<?php
//args. feel free to modify as needed
	$defs = array(
		//@param info - string - file extension type 
		'file_extension' => '',
	);

	$args = app_parse_args($data,$defs);
?>
<div class="background-neutral-alpha-1 padding-small pointer-reference position-relative">
	<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
		<div class="flex-col-xs-4 flex-col-lg-3 align-self-flex-start">
			<div class="ratio ratio-4-by-3">
				<!-- @if a csv -->
					<?php if( in_array( $args['file_extension'],
						array('csv')
					)): ?>
						<img src="<?=app_get_uri(); ?>/assets/images/logo-csv.svg" alt="" class="ratio-child-contain">

				<!-- @if a word documente -->
					<?php elseif( in_array( $args['file_extension'],
						array('doc','docx')
					)): ?>
						<img src="<?=app_get_uri(); ?>/assets/images/logo-doc.svg" alt="" class="ratio-child-contain">

				<!-- @if a  pdf -->
					<?php elseif( in_array( $args['file_extension'],
						array('pdf')
					)): ?>
						<img src="<?=app_get_uri(); ?>/assets/images/logo-pdf.svg" alt="" class="ratio-child-contain">

				<!-- @if a txt -->
					<?php elseif( in_array( $args['file_extension'],
						array('txt')
					)): ?>
						<img src="<?=app_get_uri(); ?>/assets/images/logo-txt.svg" alt="" class="ratio-child-contain">

				<!-- @if a web friendly image -->
					<?php elseif( in_array( $args['file_extension'],
						array('jpg','png','svg','gif','webp')
					) ): ?>
						<!-- @REPLACE url with image file's url -->
						<img src="/placeholder/files/shrek.jpg" alt="" class="ratio-child-cover">

				<!-- unknown filetype -->
					<?php else: ?>
						<img src="<?=app_get_uri(); ?>/assets/images/logo-unknown.svg" alt="" class="ratio-child-contain">

					<?php endif; ?>

			</div>
		</div>
		<div class="flex-col-xs-8 flex-col-lg-9">
			<div class="attachment-name text-wrap-ellipsis">
				<span class="REPLACE">totally-not-a-virus<?= $args['file_extension'] ? '.'. $args['file_extension'] : '' ?></span>
			</div>
			<div class="attachment-size color-neutral">
				<span class="REPLACE">69kb</span>
			</div>

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