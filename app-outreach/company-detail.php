<div
	id="outreach-company-detail"
	class="flex-grid flex-grid-fixed">
	<div class="flex-col-xs-12 flex-col-md-8">
	<!-- Main -->
		<?php app_get_component('components/module-company-detail-main') ?>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4">
		<div class="module-grid">
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

			
			<!-- tags -->
				<?php app_get_component('components/module-tags') ?>
		</div>
	</div>
</div>