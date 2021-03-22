import Initiator from './core/initiator.js';
import Settings from './core/settings.js';
import { Palette } from './util/validation.js';

import FwEvent from './data-helper/event.js';
import FwString from './data-helper/string.js';

import FwComponent from './classes/component.js';

const NAME = 'tooltip';
const TOGGLE_MODE_CLICK = `${NAME}-click`;
const TOGGLE_MODE_HOVER = `${NAME}-hover`;
const COMPONENT_CLASS = `${FwString.ToDashed(NAME)}`;
const COMPONENT_CUSTOM_WIDTH_CLASS = `${COMPONENT_CLASS}-has-custom-width`;
const COMPONENT_PURGER_CLASS = `${COMPONENT_CLASS}-purger`;
const COMPONENT_ALLOW_INTERACTION_CLASS = `${COMPONENT_CLASS}-allow-interaction`;
const ACTIVATED_CLASS = `active`;

const DATA_KEY = `${Settings.get('prefix')}.${NAME}`;

const EVENT_KEY = `.${DATA_KEY}`;
const EVENT_CLICK = `click${EVENT_KEY}`;
const EVENT_CLICK_PURGE = `click${EVENT_KEY}.purge`;
const EVENT_MOUSEENTER = `mouseenter${EVENT_KEY}`;
const EVENT_MOUSELEAVE = `mouseleave${EVENT_KEY}`;

const EVENT_BEFORE_CREATE = `before_create${EVENT_KEY}`;
const EVENT_CREATE = `create${EVENT_KEY}`;
const EVENT_AFTER_CREATE = `after_create${EVENT_KEY}`;

const EVENT_BEFORE_DESTROY = `before_destroy${EVENT_KEY}`;
const EVENT_DESTROY = `destroy${EVENT_KEY}`;
const EVENT_AFTER_DESTROY = `after_destroy${EVENT_KEY}`;

const EVENT_BEFORE_POSITION = `before_position${EVENT_KEY}`;
const EVENT_POSITION = `position${EVENT_KEY}`;
const EVENT_AFTER_POSITION = `after_position${EVENT_KEY}`;

const CURRENT_TOOLTIP_INSTANCE = {
  UI: null,
  triggerer: null,
  args: null,
};

class Tooltip extends FwComponent {
  constructor(triggerElement, args) {
    triggerElement = triggerElement || Tooltip.current.triggerer || false;

    super(triggerElement, {
      _customArgs: args || false,
    });
  }

  dispose() {
    super.dispose();
    this._customArgs = null;
  }

  static get current() {
    return CURRENT_TOOLTIP_INSTANCE;
  }

  static set current(obj) {
    CURRENT_TOOLTIP_INSTANCE.UI = obj.UI;
    CURRENT_TOOLTIP_INSTANCE.args = obj.args;
    CURRENT_TOOLTIP_INSTANCE.triggerer = obj.triggerer;
  }

  get UICurrent() {
    return Tooltip.current.UI;
  }

  static get configDefaults() {
    return {
      placement: 'left',
      badge: false,
      badgeBg: 'primary',
      badgeSize: '',
      classes: '',
      inverse: false,
      size: '',
      content: '<em class="color-neutral tooltip-placeholder">No info...</em>',
      centerX: false,
      centerY: false,
      x: false,
      y: false,
      width: null,
      allowInteraction: false,
    };
  }

  get args() {
    return FwComponent._parseArgs(
      this._customArgs
        ? this._customArgs
        : {
            placement: super.UIEl().getAttribute(`data-${NAME}-placement`),
            badge: super.UIEl().getAttribute(`data-${NAME}-badge`),
            badgeBg: super.UIEl().getAttribute(`data-${NAME}-badge-background`),
            badgeSize: super.UIEl().getAttribute(`data-${NAME}-badge-size`),
            classes: super.UIEl().getAttribute(`data-${NAME}-classes`),
            content: super.UIEl().getAttribute(`data-${NAME}-content`),
            inverse: super.UIEl().getAttribute(`data-${NAME}-inverse`),
            size: super.UIEl().getAttribute(`data-${NAME}-size`),
            centerX: super.UIEl().getAttribute(`data-${NAME}-center-x`),
            centerY: super.UIEl().getAttribute(`data-${NAME}-center-y`),
            x: super.UIEl().getAttribute(`data-${NAME}-x`),
            y: super.UIEl().getAttribute(`data-${NAME}-y`),
            width: super.UIEl().getAttribute(`data-${NAME}-width`),
            allowInteraction: super
              .UIEl()
              .getAttribute(`data-${NAME}-allow-interaction`),
          },
      Tooltip.configDefaults
    );
  }

  static get DATA_KEY() {
    return DATA_KEY;
  }

  _markup() {
    let html = '';

    if (this.args.badge) {
      html += `<span class="badge ${NAME}-badge`;
      if (this.args.badgeSize == 'small' || this.args.badgeSize == 'large') {
        html += ` badge-${this.args.badgeSize}`;
      }

      if (Palette.includes(this.args.badgeBg)) {
        html += ` badge-${this.args.badgeBg}`;
      } else {
        html += `" style="background-color:${this.args.badgeBg};`;
      }
      html += `"></span>`;
    }

    html += `<div class="${NAME}-content ${this.args.classes}">${this.args.content}</div></div>`;

    return html;
  }

  get elementOffset() {
    const element = super.UIEl();

    return {
      top: element.getBoundingClientRect().top + window.pageYOffset,
      left: element.getBoundingClientRect().left + window.pageXOffset,
      height: element.getBoundingClientRect().height,
      width: element.getBoundingClientRect().width,
    };
  }

  get _pointWidth() {
    let toReturn = parseFloat(
      window.getComputedStyle(Tooltip.current.UI, ':before').getPropertyValue('width')
    );

    toReturn = Math.sqrt(toReturn * toReturn * 2) * 0.5;
    isNaN(toReturn) && (toReturn = 15);

    return toReturn;
  }

  get badge() {
    if (!this.UICurrent) {
      return;
    }
    return this.UICurrent.querySelector(`.${COMPONENT_CLASS}-badge`);
  }

  get width() {
    return this.UICurrent.getBoundingClientRect().width;
  }

  get height() {
    return this.UICurrent.getBoundingClientRect().height;
  }

  set width(val) {
    this.UICurrent.style.width = val;
  }

  set height(val) {
    this.UICurrent.style.height = val;
  }

  create(elem) {
    const element = elem ? super.UIEl(elem) : super.UIEl();

    if (!element) {
      return;
    }

    FwEvent.trigger(element, EVENT_BEFORE_CREATE);

    this.destroy();

    FwEvent.trigger(element, EVENT_CREATE);

    const tip = document.createElement('div');
    document.body.appendChild(tip);

    tip.className = `${COMPONENT_CLASS} ${COMPONENT_CLASS}-${this.args.placement}
			${this.args.width ? COMPONENT_CUSTOM_WIDTH_CLASS : ''}
			${this.args.allowInteraction ? COMPONENT_ALLOW_INTERACTION_CLASS : ''}
			${this.args.size ? `${COMPONENT_CLASS}-${this.args.size}` : ''}
			${this.args.inverse ? 'theme-inverse' : ''}`;

    if (this.args.width) {
      tip.style.width = this.args.width;
    }

    tip.innerHTML += this._markup();

    Tooltip.current = {
      UI: tip,
      args: this.args,
      triggerer: element,
    };

    if (this.args.width) {
      this.width = this.args.width;
    }

    tip.classList.add(ACTIVATED_CLASS);

    this.position();

    FwEvent.trigger(element, EVENT_AFTER_CREATE);
  }

  destroy() {
    const element = Tooltip.current.UI;

    FwEvent.trigger(element, EVENT_BEFORE_DESTROY);

    if (!element) {
      return;
    }

    FwEvent.trigger(element, EVENT_DESTROY);

    element.parentNode.removeChild(element);

    Tooltip.current = {
      UI: false,
      args: false,
      triggerer: false,
    };

    FwEvent.trigger(element, EVENT_AFTER_DESTROY);
  }

  get UIOffset() {
    let the_x = this.width * -0.5; //top and bottom
    let badgeOffsetX = 0;

    switch (this.args.placement) {
      case 'right':
        the_x = this._pointWidth;
        break;
      case 'left':
        the_x = -(this.width + this._pointWidth);
        break;
    }

    if (
      this.badge &&
      (this.args.placement == 'left' || this.args.placement == 'right')
    ) {
      badgeOffsetX =
        this.args.placement == 'left'
          ? this.badge.getBoundingClientRect().width * -0.5
          : this.badge.getBoundingClientRect().width * 0.5;
    }

    the_x += badgeOffsetX;

    let the_y = this.height * -0.5; // left and right
    let badgeOffsetY = 0;

    switch (this.args.placement) {
      case 'bottom':
        the_y = this._pointWidth;
        break;
      case 'top':
        the_y = -(this.height + this._pointWidth);
        break;
    }

    if (
      this.badge &&
      (this.args.placement == 'top' || this.args.placement == 'bottom')
    ) {
      badgeOffsetY =
        this.args.placement == 'top'
          ? this.badge.getBoundingClientRect().height * -0.5
          : this.badge.getBoundingClientRect().height * 0.5;
    }

    the_y += badgeOffsetY;

    return {
      x: the_x,
      y: the_y,
      // x: 0,
      // y: 0
    };
  }

  position(posX, posY) {
    const element = super.UIEl();

    FwEvent.trigger(element, EVENT_BEFORE_POSITION);
    if (!Tooltip.current.UI) {
      return;
    }

    FwEvent.trigger(element, EVENT_POSITION);

    const toolTip = Tooltip.current.UI;

    posX = posX || this.elementOrigin.x;
    posY = posY || this.elementOrigin.y;

    toolTip.style.left = posX + this.UIOffset.x + 'px';
    toolTip.style.top = posY + this.UIOffset.y + 'px';

    FwEvent.trigger(element, EVENT_AFTER_POSITION);
  }

  get elementOrigin() {
    if (!Tooltip.current.UI) {
      return;
    }

    let the_x = this.elementOffset.left + this.elementOffset.width * 0.5; //top and bottom

    if (!this.args.x) {
      if (!this.args.centerX) {
        switch (this.args.placement) {
          case 'right':
            the_x = this.elementOffset.left + this.elementOffset.width;
            break;
          case 'left':
            the_x = this.elementOffset.left;
            break;
        }
      }
    } else {
      the_x = parseFloat(this.args.x);
    }

    let the_y = this.elementOffset.top + this.elementOffset.height * 0.5; // left and right
    if (!this.args.y) {
      if (!this.args.centerY) {
        switch (this.args.placement) {
          case 'bottom':
            the_y = this.elementOffset.top + this.elementOffset.height;
            break;
          case 'top':
            the_y = this.elementOffset.top;
            break;
        }
      }
    } else {
      the_y = parseFloat(this.args.y);
    }

    return {
      x: the_x,
      y: the_y,
    };
  }

  static handleToggleClickOn() {
    return (e) => {
      e.preventDefault();

      if (!FwComponent.isDisabled(e.target)) {
        const tooltip = new Tooltip(e.target);
        tooltip.create();
      }
    };
  }

  static handleUniversalPurge() {
    return (e) => {
      if (FwComponent.isDisabled(e.target)) {
        e.preventDefault();
      } else if (!FwComponent.isDynamic(e.target)) {
        if (
          !e.target.closest(`[data-toggle-${TOGGLE_MODE_CLICK}]`) &&
          !e.target.closest(`[data-toggle-${TOGGLE_MODE_HOVER}]`)
          // && !e.target.closest(`.${COMPONENT_CLASS}.${COMPONENT_ALLOW_INTERACTION_CLASS}`)
        ) {
          const tooltip = new Tooltip();
          tooltip.destroy();
        }
      }
    };
  }

  static handleToggleHoverOn() {
    return (e) => {
      if (FwComponent.isDisabled(e.target)) {
        e.preventDefault();
      } else {
        const tooltip = new Tooltip(e.target);
        tooltip.create();
      }
    };
  }

  static handleToggleHoverOff() {
    return (e) => {
      const tooltip = new Tooltip();
      tooltip.destroy();
    };
  }

  static handleResizeScroll() {
    return () => {
      if (Tooltip.current.triggerer) {
        tooltip = new Tooltip(Tooltip.current.triggerer);

        tooltip.position();
      }
    };
  }

  static initListeners() {
    FwEvent.addListener(
      document.documentElement,
      EVENT_MOUSEENTER,
      `*[data-toggle-${TOGGLE_MODE_HOVER}]`,
      Tooltip.handleToggleHoverOn()
    );

    FwEvent.addListener(
      document.documentElement,
      EVENT_MOUSELEAVE,
      `*[data-toggle-${TOGGLE_MODE_HOVER}]`,
      Tooltip.handleToggleHoverOff()
    );

    FwEvent.addListener(
      document.documentElement,
      EVENT_CLICK,
      `*[data-toggle-${TOGGLE_MODE_CLICK}]`,
      Tooltip.handleToggleClickOn()
    );

    FwEvent.addListener(
      document.documentElement,
      EVENT_CLICK_PURGE,
      `*, .${COMPONENT_PURGER_CLASS}`,
      Tooltip.handleUniversalPurge()
    );

    Initiator.Q.on_ready = Tooltip.handleResizeScroll();
    Initiator.Q.on_resize = Tooltip.handleResizeScroll();
  }

  static destroyListeners() {
    FwEvent.removeListener(
      document.documentElement,
      EVENT_MOUSEENTER,
      Tooltip.handleToggleHoverOn()
    );

    FwEvent.removeListener(
      document.documentElement,
      EVENT_MOUSELEAVE,
      Tooltip.handleToggleHoverOff()
    );

    FwEvent.removeListener(
      document.documentElement,
      EVENT_CLICK,
      Tooltip.handleToggleClickOn()
    );

    FwEvent.removeListener(
      document.documentElement,
      EVENT_CLICK_PURGE,
      Tooltip.handleUniversalPurge()
    );
  }
}

export default Tooltip;

Tooltip.initListeners();
