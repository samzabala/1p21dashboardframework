<div
	id="outreach-company-detail"
	class="module-grid"
	data-grid-template-columns-md="[main] 1fr [side] 315px"
	data-grid-template-rows-md="repeat(auto-fill,minmax(0,min-content))">

	<!-- Main -->
		<?php app_get_component('components/module-company-detail-main') ?>
	<!-- Utility Contact -->
		<?php app_get_component('components/module-company-detail-utility') ?>
	<!-- Calling Card because Contact Info is redundant -->
		<?php app_get_component('components/module-detail-calling-card','',false,array(
			'has_address' => true,
			'has_phone' => true,
			'has_fax' => true,
			'has_url' => true,
			'has_primary' => true,
			'has_social' => true,
		)) ?>
	<!-- events -->
		<?php app_get_component('components/module-detail-events','',false,array(
			'has_add_event' => true
		)) ?>
</div>

<!-- boards that appear -->
<?app_get_component('components/modal-board-form-contact') ?>
<?app_get_component('components/modal-board-form-email') ?>
<?app_get_component('components/modal-board-form-task') ?>
<?app_get_component('components/modal-board-form-event') ?>