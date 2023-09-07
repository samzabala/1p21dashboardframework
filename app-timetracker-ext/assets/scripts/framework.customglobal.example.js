/*
  @NPM SETUP
    see webpack.config.example.js
*/

//core. for restart functions and modifying settings
import Initiator from './../../../assets/plugins/framework/src/js/imports/core/initiator.js';
import Settings from './../../../assets/plugins/framework/src/js/imports/core/settings.js';
import Accordion from './../../../assets/plugins/framework/src/js/imports/accordion';
import Modal from './../../../assets/plugins/framework/src/js/imports/modal';

//globally used components

const FrameWork = {
  Initiator,
  Settings,
  Accordion,
  Modal
};
export default FrameWork;
