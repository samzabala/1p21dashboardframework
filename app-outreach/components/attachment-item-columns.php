<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - file extension type 
		'file_extension' => '',
	);

	$args = app_parse_args($data,$defs);
?>
<div class="flex-1-1 outreach-attachment-item outreach-attachment-item-grid flex-0-0 background-neutral-alpha-1 padding-small pointer-reference position-relative">
	<div class="outreach-attachment-item-thumbnail align-self-center">

		<!-- @if a csv -->
			<?php if( in_array( $args['file_extension'],
				array('xls','xlsx','xlsm','slxb','csv','tsv','dsv')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-x.svg" alt="" />

		<!-- @if a word documente -->
			<?php elseif( in_array( $args['file_extension'],
				array('doc','docx','docm')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-doc.svg" alt="" />

		<!-- @if a  pdf -->
			<?php elseif( in_array( $args['file_extension'],
				array('pdf')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-pdf.svg" alt="" />

		<!-- @if a txt -->
			<?php elseif( in_array( $args['file_extension'],
				array('txt','rtf')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-txt.svg" alt="" />

		<!-- @if a xml/front end language -->
			<?php elseif( in_array( $args['file_extension'],
				array('json','xml','rss','css','html')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-code.svg" alt="" />

		<!-- @if a font file -->
			<?php elseif( in_array( $args['file_extension'],
				array('otf','ttf','eot','woff','woff2')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-font.svg" alt="" />

		<!-- @if a video file -->
			<?php elseif( in_array( $args['file_extension'],
				array('mp4','mov','wmv','flv','avi','avchd')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-video.svg" alt="" />

		<!-- @if a compressed file -->
			<?php elseif( in_array( $args['file_extension'],
				array('zip','rar')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-zip.svg" alt="" />

		<!-- @if a compressed file -->
			<?php elseif( in_array( $args['file_extension'],
				array('wav','mp3')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-audio.svg" alt="" />

		<!-- @if a non-web img -->
			<?php elseif( in_array( $args['file_extension'],
				array('tiff','eps')
			)): ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-img.svg" alt="" />

		<!-- @if a web friendly image -->
			<?php elseif( in_array( $args['file_extension'],
				array('jpg','png','svg','gif','webp')
			) ): ?>
				<div class="outreach-attachment-item-thumbnail-img ratio ratio-4-by-3">
					<!-- @REPLACE url with image file's url -->
					<img src="/placeholder/files/shrek.jpg" alt="" class="ratio-child-cover">
				</div>


		<!-- unknown filetype -->
			<?php else: ?>
				<img class="outreach-attachment-item-thumbnail-icon" src="<?=app_get_uri(); ?>/assets/images/logo-unknown.svg" alt="" />

			<?php endif; ?>
	</div>
	<div class="outreach-attachment-item-details">
		<div class="attachment-name text-wrap-ellipsis">
			<span class="REPLACE">totally-not-a-virus<?= $args['file_extension'] ? '.'. $args['file_extension'] : '' ?></span>
		</div>
		<div class="attachment-size color-neutral">
			<span class="REPLACE">69kb</span>
		</div>
	</div>


	<!-- @if user can edit or delete attachment -->
		<div class="only-hover position-absolute offset-small-top-negate offset-small-right-negate">
			<a href="#" data-toggle-dropdown class="btn btn-neutral-glassy btn-small">
				<div class="sr-only">Attachment Options</div>
				<i class="symbol symbol-kebab-horizontal"></i>
			</a>
			<ul data-dropdown-width="150px" class="dropdown doropdown-expanded dropdown-top-flush dropdown-right">
				<li><a href="#">Download</a></li>
				<li><a href="#">Delete</a></li>
			</ul>
		</div>
</div>