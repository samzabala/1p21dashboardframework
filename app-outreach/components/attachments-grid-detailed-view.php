

<ul class="attachment-list list-group list-group-interactive">
	<li class="pointer-reference">
		<div class="grid grid-flex justify-content-space-between align-items-center grid-flex-fixed grid-constricted-y">
			<div class="grid-col-2 text-align-right">
				<!-- @if attachment is a web image (jpg,png,gif,etc) -->
					<div class="attachment-thumbnail asset">
						<div class="asset-thumbnail">
							<span class="asset-image font-size-small">
									<img src="/placeholder/files/shrek.jpg" alt="" class="REPLACE">
							</span>
						</div>
					</div>
				
				<!-- @else anything else -->
				<!--
					@NOTE 
					.asset-image	
						ATTRIBUTE TO ADD
							data-asset-extension => file's extension

						CLASS TO ADD
							add to `asset-image` these classes that should output based on file type/ extension

								classes that match most common file types uploaded (at least in the production team):

								`.asset-image-code`		=>		json,xml,rss,css,html .etc
								`.asset-image-text`		=>		txt, rtf,odf .etc
								`.asset-image-doc`		=>		doc,docx, docm, .etc
								`.asset-image-font`		=>		otf,ttf eot, woff, woff2
								`.asset-image-img`		=>		tiff,webp,eps,svg .etc
								`.asset-image-table`	=>		xlsx,xls,xlsm,slxb, csv,tsv, dsv
								`.asset-image-video`	=>		mp4,mov,wmv,flv,avi,avchd, .etc
								`.asset-image-zip`		=>		zip, rar, .etc

								`.asset-image-default`   => anything else 

								optional classes but for good practices too :
								`.asset-image-audio`   => any audio file types

							-->
				<!-- Commented out so front end doesn't look uglee -->
				<!-- <div class="attachment-thumbnail asset">
					<div class="asset-thumbnail">
						<span data-asset-extension="REPLACE" class="asset-image asset-image-default font-size-small"></span>
					</div>
				</div> -->
			</div>
			<div class="grid-col-4">

				<span class="attachement-filename text-wrap-ellipsis">
					<span class="REPLACE">filename.virus</span>
				</span>

				<span class="attachement-filezise text-wrap-ellipsis font-style-italic color-neutral">
					<span class="REPLACE">69gb</span>
				</span>

			</div>
			<div class="hide-xs grid-col-2">
				<span class="attachement-date-added">
					<span class="REPLACE">4/20/69</span>
				</span>
			</div>
			<div class="grid-col-xs-4 grid-col-sm-2 text-align-right">
				<span class="attachement-adder">
					<span class="REPLACE">Iris Wilson</span>
				</span>
			</div>
			<div class="grid-col-2 text-align-right">
				<a class="only-hover color-primary color-secondary-hover" target="_blank" href="#REPLACEWithFilePathForDownloading" ><i class="symbol symbol-download"></i></a>
			</div>
		</div>
	</li>

	<!-- placeholder -->
	<?php for($i=1; $i<10; $i++){ ?>
	
		<li class="pointer-reference">
			<div class="grid grid-flex justify-content-space-between align-items-center grid-flex-fixed grid-constricted-y">
				<div class="grid-col-2 text-align-right">
					<div class="attachment-thumbnail asset">
						<div class="asset-thumbnail">
							<span data-asset-extension="csv" class="asset-image asset-image-table font-size-small"></span>
						</div>
					</div>
				</div>
				<div class="grid-col-4">

					<span class="attachement-filename text-wrap-ellipsis">
						<span class="REPLACE">filename.virus</span>
					</span>

					<span class="attachement-filezise text-wrap-ellipsis font-style-italic color-neutral">
						<span class="REPLACE">69gb</span>
					</span>

				</div>
				<div class="hide-xs grid-col-2">
					<span class="attachement-date-added">
						<span class="REPLACE">4/20/69</span>
					</span>
				</div>
				<div class="grid-col-xs-4 grid-col-sm-2 text-align-right">
					<span class="attachement-adder">
						<span class="REPLACE">Iris Wilson</span>
					</span>
				</div>
				<div class="grid-col-2 text-align-right">
					<a class="only-hover color-primary color-secondary-hover" target="_blank" href="#REPLACEWithFilePathForDownloading" ><i class="symbol symbol-download"></i></a>
				</div>
			</div>
		</li>
	<?php } ?>
</ul>