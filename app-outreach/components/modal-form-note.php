<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div id="m-editor-note" class="modal modal-default"  data-modal-title="Edit Note" data-modal-width="700px">
	<?php app_get_component('components/note-form','simple',false,array(
		'add_close_btn' => false
	)) ?>
</div>