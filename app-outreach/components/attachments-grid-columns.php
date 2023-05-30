<div class="grid grid-flex grid-flex-fixed">

<!-- @loop .attachment-item -->
	<div class="attachment-item grid-col-xs-6 grid-col-sm-4 flex-xs align-items-stretch">
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
			'json',
			'otf',
			'mp4',
			'zip',
			'tiff',
			'jpg',
		);
		for($i=0; $i<count($file_ext_demo); $i++){ ?>

			<div class="attachment-item grid-col-xs-6 grid-col-sm-4 flex-xs align-items-stretch">
				<?php app_get_component('components/attachment-item-columns','',false,array(
					'file_extension' => $file_ext_demo[$i]
				)); ?>
			</div>
		<?php } ?>




</div>