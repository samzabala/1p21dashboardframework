
<!-- 
@IMPORT

SCSS:
		@import 'framework/src/scss/_modal';
JS:
		import Modal from 'framework/src/js/modal.js';



 -->
 <!-- @PLACEHOLDER: delete when ready. -->
<?php
$defs = array(
	'type' => 'client',
);

$args = app_parse_args($data,$defs);
?>
<div id="m-delete-<?=$args['type'] ?>" class="modal modal-expanded modal-default" data-modal-width="500px">
	<form action="" class="padding">
		<h2 class="color-inherit no-margin-top">Delete <?= ucfirst($args['type']) ?></h3>
		<p>Are you sure you want to delete this <?=$args['type'] ?>?</p>

		<!-- @NOTE hidden input fields here -->

		<label class="input-toggle input-toggle-primary padding-small-y p">
			<input type="checkbox" class="input"> 
			<span class="input-label input-toggle-label font-weight-700">
					Delete from Wrike
			</span>
		</label>

		<div class="flex-grid flex-grid-compact flex-grid-fixed">
			<div class="flex-col-xs-12 flex-col-sm-6">
				<button class="btn btn-theme btn-block">Delete</button>
			</div>
			<div class="flex-col-xs-12 flex-col-sm-6">
				<a href="#" data-toggle-modal-default-close class="btn btn-theme-outline btn-block font-weight-400">Cancel</a>
			</div>
		</div>

		
	</form>
</div>