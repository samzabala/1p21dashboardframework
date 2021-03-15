<div
	id="outreach-company-detail"
	class="module-grid"
	data-grid-template-columns-md="[main] 1fr [side] 315px"
	data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))">

	<!-- Main -->
		<?php app_get_component('components/module-contact-detail-main') ?>
	<!-- utility -->
		<?php app_get_component('components/module-contact-detail-utility') ?>
	<!-- events -->
		<?php app_get_component('components/module-detail-events') ?>
	<!-- Calling Card because Contact Info is redundant -->
		<?php app_get_component('components/module-detail-calling-card','',false,array(
			'has_module_title' => true,
			'has_preferred' => true,
			'has_phone' => true,
			'has_cell' => true,
			'has_undergrad' => true,
			'has_social' => true,
			'has_acct_owner' => true,
		)) ?>
</div>
<?app_get_component('components/modal-board-form-email') ?>
<?app_get_component('components/modal-board-form-task') ?>
<?app_get_component('components/modal-board-form-event') ?>