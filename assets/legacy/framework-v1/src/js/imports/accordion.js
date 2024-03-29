import Initiator from './core/initiator.js';
import Settings from './core/settings.js';

import FwEvent from './data-helper/event.js';
import FwDom from './data-helper/dom.js';
import FwString from './data-helper/string.js';

import FwComponent from './classes/component.js';
import { UIToggled, UIChangeHash } from './util/ui.js';
import { BrMobileMax, ValidateBr } from './util/breakpoint.js';

const NAME = 'accordion';
const ARG_ATTRIBUTE_NAME = `${NAME}`;
const TOGGLE_MODE = `${NAME}`;
const COMPONENT_CLASS = `${FwString.ToDashed(NAME)}`;
const ACTIVATED_CLASS = `open`;
const ACTIVATED_TOGGLE_CLASS = `active`;

const DATA_KEY = `${Settings.get('prefix')}_${NAME}`;

const EVENT_KEY = `_${DATA_KEY}`;
const EVENT_CLICK = `click${EVENT_KEY}`;
const EVENT_HASHCHANGE = `hashchange${EVENT_KEY}`;

const EVENT_BEFORE_CLOSE = `before_close${EVENT_KEY}`;
const EVENT_CLOSE = `close${EVENT_KEY}`;
const EVENT_AFTER_CLOSE = `after_close${EVENT_KEY}`;

const EVENT_BEFORE_OPEN = `before_open${EVENT_KEY}`;
const EVENT_OPEN = `open${EVENT_KEY}`;
const EVENT_AFTER_OPEN = `after_open${EVENT_KEY}`;

class Accordion extends FwComponent {
  constructor(element, triggerer, args) {
    element = element || UIToggled(TOGGLE_MODE) || false;
    super(element, {
      triggerer: triggerer
        ? triggerer
        : element && element._triggerer
        ? element._triggerer
        : false,
      _customArgs: args
        ? args
        : element && element.__customArgs
        ? element.__customArgs
        : {},
    });
  }

  dispose() {
    super.setProp('triggerer', '__dispose');
    super.setProp('_customArgs', '__dispose');
    super.dispose();
  }

  static get DATA_KEY() {
    return DATA_KEY;
  }

  static configDefaults() {
    return {
      changeHash: true,
    };
  }

  get args() {
    return FwComponent._parseArgs(
      {
        changeHash:
          this.triggerer &&
          this.triggerer.hasAttribute(`data-${ARG_ATTRIBUTE_NAME}-change-hash`)
            ? this.triggerer.getAttribute(`data-${ARG_ATTRIBUTE_NAME}-change-hash`)
            : super.UIEl().hasAttribute(`data-${ARG_ATTRIBUTE_NAME}-change-hash`)
            ? super.UIEl().getAttribute(`data-${ARG_ATTRIBUTE_NAME}-change-hash`)
            : this._customArgs.changeHash,
      },
      Accordion.configDefaults()
    );
  }

  get _isValidWithinQuery() {
    return !(
      super.UIEl().classList.contains(`${NAME}-mobile`) &&
      !ValidateBr(BrMobileMax, 'above')
    );
  }

  get _isWithinGroupMultiple() {
    return this.UIGroot && this.UIGroot.classList.contains(`${NAME}-group-multiple`);
  }

  get _isWithinAllowNoActive() {
    return (
      this.UIGroot && this.UIGroot.classList.contains(`${NAME}-group-allow-no-active`)
    );
  }

  get _probablyToggle() {
    let toReturn = [];

    const selection = document.querySelectorAll(
      `[data-toggle-${TOGGLE_MODE}][href="#${this._id}"],
			[data-toggle-${TOGGLE_MODE}][data-href="#${this._id}"]`
    );

    if (selection.length) {
      toReturn = selection;
    }

    return toReturn;
  }

  get _id() {
    return super.UIEl().hasAttribute('id') ? super.UIEl().getAttribute('id') : false;
  }

  _siblicide() {
    if (!this._isWithinGroupMultiple) {
      FwDom.RunFnForChildren(
        this.UIGroot,
        `[data-toggle-${TOGGLE_MODE}]`,
        `.${COMPONENT_CLASS}-group`,
        (toggleBbies) => {
          if (toggleBbies !== this.triggerer) {
            toggleBbies.classList.remove(ACTIVATED_TOGGLE_CLASS);
          }
        }
      );
      FwDom.RunFnForChildren(
        this.UIGroot,
        `.${COMPONENT_CLASS}`,
        `.${COMPONENT_CLASS}-group`,
        (accBbies) => {
          if (accBbies !== super.UIEl()) {
            accBbies.classList.remove(ACTIVATED_CLASS);
          }
        }
      );
    }
  }

  //which came first the accordion-gruoup or the accordiiinbsbob?? the actual bitch none of that accordion-group shit
  get UIGroot() {
    let toReturn = super
      .UIEl()
      .parentNode.closest(`.${COMPONENT_CLASS},.${COMPONENT_CLASS}-group`);

    //has to actually be accordion-group closest before accordion
    if (
      !toReturn ||
      (toReturn && !toReturn.matches(`.${COMPONENT_CLASS}-group`)) //***
    ) {
      toReturn = false;
    }

    return toReturn;
  }

  close(elem, triggerer) {
    const element = elem ? super.UIEl(elem) : super.UIEl();

    if (!element) {
      return;
    }

    triggerer = triggerer || this.triggerer;
    if (!this.UIGroot || this._isWithinAllowNoActive) {
      super.runCycle(
        EVENT_BEFORE_CLOSE,
        EVENT_CLOSE,
        EVENT_AFTER_CLOSE,
        () => {
          triggerer && triggerer.classList.remove(ACTIVATED_TOGGLE_CLASS);
          this._probablyToggle.forEach((toggle) => {
            toggle.classList.remove(ACTIVATED_TOGGLE_CLASS);
          });
          element.classList.remove(ACTIVATED_CLASS);
          if (this.args.changeHash && this._id) {
            UIChangeHash('');
          }
        },
        element
      );
    }
  }

  open(elem, triggerer) {
    const element = elem ? super.UIEl(elem) : super.UIEl();

    if (!element) {
      return;
    }

    triggerer = triggerer || this.triggerer;

    super.runCycle(
      EVENT_BEFORE_OPEN,
      EVENT_OPEN,
      EVENT_AFTER_OPEN,
      () => {
        this._siblicide();
        triggerer && triggerer.classList.add(ACTIVATED_TOGGLE_CLASS);
        this._probablyToggle.forEach((toggle) => {
          toggle.classList.add(ACTIVATED_TOGGLE_CLASS);
        });
        element.classList.add(ACTIVATED_CLASS);
        if (this.args.changeHash && this._id) {
          UIChangeHash(this._id);
        }
      },
      element
    );
  }

  toggle(elem, triggerer) {
    const element = elem ? super.UIEl(elem) : super.UIEl();

    if (!element) {
      return;
    }
    triggerer = triggerer || this.triggerer;

    if (element.classList.contains(ACTIVATED_CLASS)) {
      this.close(element, triggerer);
    } else {
      this.open(element, triggerer);
    }
  }

  static handleToggler() {
    return (e) => {
      e.preventDefault();

      if (!FwComponent.isDisabled(e.target)) {
        const accordion = new Accordion(UIToggled(TOGGLE_MODE, e.target), e.target);

        accordion.toggle();
      }
    };
  }

  static handleHash() {
    return () => {
      if (Settings.get('initializeAccordion')) {
        const accordion = new Accordion();
        accordion.open();
      }
    };
  }

  static initListeners() {
    FwEvent.addListener(
      document.documentElement,
      EVENT_CLICK,
      `*[data-toggle-${TOGGLE_MODE}]`,
      Accordion.handleToggler()
    );

    FwEvent.addListener(null, EVENT_HASHCHANGE, window, Accordion.handleHash());

    Initiator.Q.on_ready = Accordion.handleHash();
  }

  static destroyListeners() {
    FwEvent.removeListener(
      document.documentElement,
      EVENT_CLICK,
      Accordion.handleToggler()
    );

    FwEvent.removeListener(window, EVENT_HASHCHANGE, Accordion.handleHash());
  }
}

export default Accordion;

Accordion.initListeners();
