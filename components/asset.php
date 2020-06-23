<div class="asset">
	<div class="asset-thumbnail">

		<!-- @IF file is a web image ( jpg,jpeg,png,gif ONLY... webp is not supported on safari yet) -->
			<img data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/files/photo.jpg" alt="" />

		<!-- @ELSE file is not a web image -->


			<!--
			@NOTE add to `asset-image` these classes that should output based on file type/ extension

				classes that match most common file types uploaded (at least in the production team):

				`.asset-image-code`		=>		json,xml,rss,css,html .etc
				`.asset-image-doc`		=>		doc,docx, docm, .etc
				`.asset-image-font`		=>		otf,ttf eot, woff, woff2
				`.asset-image-img`		=>		tiff,webp,eps,svg,psd,psb,ai,xd,indd .etc
				`.asset-image-pdf`		=>		pdf,pdf/x
				`.asset-image-table`	=>		xlsx,xls,xlsm,slxb, csv,tsv, 
				`.asset-image-text`		=>		txt, rich text .etc
				`.asset-image-video`	=>		mp4,mov,wmv,flv,avi,avchd, .etc
				`.asset-image-zip`		=>		zip, rar, .etc

				`.asset-image-default`   => anything else 

				optional classes but for good practices too :
				`.asset-image-audio`   => any audio file types

			-->
			<span class="asset-image asset-image-default"></span>


	</div>

	<!--
	 @IF user is on edit mode and files can be deleted

	 example ui states
		editing projects, editing task

	-->
		<a href="#" class="asset-delete btn btn-symbol btn-round btn-small btn-secondary">
			<i class="symbol symbol-close"></i>
		</a>
		

	<p class="asset-title">
		<span class="REPLACE">file name.extension</span>
	</p>
	<p class="asset-caption">
		<span class="REPLACE">420kb</span>
	</p>
</div>