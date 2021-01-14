<?php
$defs = array(
	'placeholder_width' => 0, //for placeholder render only
	'placeholder_height' => 0, //for placeholder render only
	'placeholder_img_only' => false, //for placeholder render only
);

$args = app_parse_args($data,$defs);
?>
<div class="asset asset-masonry p">
		<?php 
		//just extra steps to render placeholders to make the masonry layout more visible
			$img_url = FWAPPS_ROOT_URL.'/placeholder/files/photo.jpg';
			
			if(
				$args['placeholder_width'] > 0
				&& $args['placeholder_height'] > 0
			){
				$img_url = "https://www.placecage.com/{$args['placeholder_width']}/{$args['placeholder_height']}";
			}
		?>

	<!-- @IF file is a web image ( jpg,jpeg,png,gif ONLY... webp is not supported on safari yet) -->
	<!-- @NOTE: render full res version of the image here and its properties -->
		<div class="asset-thumbnail asset-thumbnail-freeform" data-toggle="modal">
			<!-- @NOTE this is thumbnail dimensions contained size-->
			<img src="<?= $img_url; ?>" alt="" />
		</div>
		<div class="modal" data-modal-disable-overlay="false" data-modal-close="true" data-modal-width="<?=$args['placeholder_width'] + 60 ?>">
			<!-- @NOTE. this is full size -->
			<div class="text-align-center">
				<img src="<?= $img_url; ?>" alt="" /> 
			</div>
		</div>

		<?php 
			if(
				!$args['placeholder_img_only']
			):
		?>

		<!-- @ELSE file is not a web image -->
			<!--
			@NOTE add to `asset-image` these classes that should output based on file type/ extension

				classes that match most common file types uploaded (at least in the production team):

				`.asset-image-code`		=>		json,xml,rss,css,html .etc
				`.asset-image-text`		=>		txt, rtf,odf .etc
				`.asset-image-doc`		=>		doc,docx, docm, .etc
				`.asset-image-font`		=>		otf,ttf eot, woff, woff2
				`.asset-image-img`		=>		tiff,webp,eps,svg .etc
				`.asset-image-psd`		=>		psd,psb,raw,pxr
				`.asset-image-ai`		=>		ai
				`.asset-image-xd`		=>		xd
				`.asset-image-pdf`		=>		pdf
				`.asset-image-id`		=>		indd,indb,idml,indl,indt,xqx,pmd,inx
				`.asset-image-table`	=>		xlsx,xls,xlsm,slxb, csv,tsv, dsv
				`.asset-image-video`	=>		mp4,mov,wmv,flv,avi,avchd, .etc
				`.asset-image-zip`		=>		zip, rar, .etc

				`.asset-image-default`   => anything else 

				optional classes but for good practices too :
				`.asset-image-audio`   => any audio file types

			-->
				<!-- markup is commented out for less messy looking front end -->
					<a href="#REPLACEWithFileNameURI" class="asset-thumbnail" target="_blank">
						<span class="asset-image asset-image-default"></span>
					</a>

		<?php endif; ?>

	<!--
	 @IF user is on edit mode and files can be deleted

	 example ui states
		editing projects, editing task

	-->
		<div class="asset-functions">
			<!-- DELETE BUTTON -->
				<div class="asset-function">
					<a href="#" class="asset-function btn btn-symbol  btn-small btn-secondary">
						<i class="symbol symbol-close"></i>
					</a>
				</div>
			<!-- @IF file is a web image ( jpg,jpeg,png,gif ONLY... webp is not supported on safari yet) -->
				<!-- DOWNLOAD BUTTON -->
					<div class="asset-function">
						<a href="#" class="asset-function btn btn-symbol  btn-small btn-primary">
							<i class="symbol symbol-download"></i>
						</a>
					</div>
		</div>
	

	<p class="asset-title">
		<span class="REPLACE">file name.extension</span>
	</p>
	<p class="asset-caption">
		<span class="REPLACE">420kb</span>
	</p>
</div>