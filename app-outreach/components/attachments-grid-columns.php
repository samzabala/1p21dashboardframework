<div class="flex-grid flex-grid-fixed">

<!-- @loop .attachment-item -->
	<div class="attachment-item flex-col-xs-6 flex-col-sm-4 flex-xs align-items-stretch">
		<?php app_get_component('components/attachment-item-columns','',false,array(
			'file_extension' => 'REPLACEWithFileExtension'
		)); ?>
	</div>

	<!-- @PLACEHOLDER: delete when ready -->
		<?php
		$file_ext_demo = array(
			'csv',
			'doc',
			'pdf',
			'txt',
			'jpg',
		);
		for($i=0; $i<count($file_ext_demo); $i++){ ?>

			<div class="attachment-item flex-col-xs-6 flex-col-sm-4 flex-xs align-items-stretch">
				<?php app_get_component('components/attachment-item-columns','',false,array(
					'file_extension' => $file_ext_demo[$i]
				)); ?>
			</div>
		<?php } ?>




</div>