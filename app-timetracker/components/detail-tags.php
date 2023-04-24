

<!-- 
@IMPORT

SCSS:
		@import 'framework/src/scss/_dropdown';
		@import 'framework/src/scss/_modal';
JS:
		import Dropdown from 'framework/src/js/dropdown.js';
		import Modal from 'framework/src/js/modal.js';
 -->
 <?php
$defs = array(
	'has_data' => false,
	'can_edit' => true,
);

$args = app_parse_args($data,$defs);
?>

<!-- Client -->
	<?php if(str_contains(FWAPPS_TEMPLATE,'project-detail') || str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>
		<form class="position-relative margin-small-top display-inline-block">



			<!-- @NOTE hidden input types here -->

			<!-- @NOTE
				.tag

					attributes to add
						`data-toggle-dropdown` => if can edit info
			-->

			<div class="tag tag-neutral font-weight-400"
				<?php if($args['can_edit']): ?>
					data-toggle-dropdown
				<?php endif; ?>
			>
				<!-- @if has client -->
				<?php if($args['has_data']): ?>
					<span class="REPLACE">Wright & Co. Law</span>

				<!-- @else -->
				<?php else: ?>

					<!-- @if can edit info -->
					<?php if($args['can_edit']): ?>
						Add Client +

					<!-- @else -->
					<?php else: ?>
						No Client

					<?php endif; ?>

				<?php endif; ?>
					

			</div>

			<!-- @if can edit info -->
			<?php if($args['can_edit']): ?>
				<?php app_get_component('components/dropdown-list-group-search','',false,array(
					'search_placeholder' => 'Search Client',
					'list' => array(
						'Wright & Co. Law',
						'Wrong Only Law, LLP',
						'WISE Agency',
						'Super Mario Bros.',
						'Nook Inc.',
						'Jollibee Food Corporation',
						'Bread',
						'A Company',
						'Another Company',
					)
				)); ?>
			<?php endif; ?>
		</form>
	<?php endif; ?>



<!-- Project -->
	<?php if(str_contains(FWAPPS_TEMPLATE,'task-detail')): ?>

		<form class="position-relative margin-small-top display-inline-block">



			<!-- @NOTE hidden input types here -->

			<!-- @NOTE
				.tag

					attributes to add
						`data-toggle-dropdown` => if can edit info
			-->

			<div class="tag tag-neutral font-weight-400"
				<?php if($args['can_edit']): ?>
					data-toggle-dropdown
				<?php endif; ?>
			>
				<!-- @if has client -->
				<?php if($args['has_data']): ?>
					<span class="REPLACE">ace-attorney.com (SEO)</span>
					
				<!-- @else -->
				<?php else: ?>
					<!-- @if can edit info -->
					<?php if($args['can_edit']): ?>
						Add Project +

					<!-- @else -->
					<?php else: ?>
						No Project

					<?php endif; ?>

				<?php endif; ?>

			</div>

			<!-- @if can edit info -->
			<?php if($args['can_edit']): ?>

				<?php app_get_component('components/dropdown-list-group-search','',false,array(
					'search_placeholder' => 'Search Client',
					'list' => array(
						'Maintenance Task Requests',
						'domain.com (SEO)',
						'anotherdomain.com (SEO)',
						'somuchdomains.com (PPC)',
						'helpmuchdomainssuchwow.com (PPC)',
						'wevebeenreachingouttoyouforyourextendedcarwarranty.com (PPC)',
					)
				)); ?>

			<?php endif; ?>

		</form>
	<?php endif; ?>