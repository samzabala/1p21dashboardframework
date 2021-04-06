//change file paths depending on setup

//core. for restart functions and modifying settings
import Initiator from './../../../assets/plugins/framework/src/js/imports/core/initiator.js';
import Settings from './../../../assets/plugins/framework/src/js/imports/core/settings.js';

//globally used components
import Dropdown from './../../../assets/plugins/framework/src/js/imports/dropdown.js';
import Lazy from './../../../assets/plugins/framework/src/js/imports/lazy.js';
import ModuleGrid from './../../../assets/plugins/framework/src/js/imports/module-grid.js';

/* component/template specific components. will be mentioned in specific components where they are present */
	// import Tooltip from './../../../assets/plugins/framework/src/js/imports/tooltip.js';
	// import Accordion from './../../../assets/plugins/framework/src/js/imports/accordion.js';
	// import Button from './../../../assets/plugins/framework/src/js/imports/button.js'; //
	// import Form from './../../../assets/plugins/framework/src/js/imports/form.js';
	// import Modal from './../../../assets/plugins/framework/src/js/imports/modal.js';
	// import Switch from './../../../assets/plugins/framework/src/js/imports/switch.js';

const FrameWork = {
  Initiator,
  Settings,

  Dropdown,
  Lazy,
  ModuleGrid,
};
export default FrameWork;
