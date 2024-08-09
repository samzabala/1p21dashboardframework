<div
	id="outreach-contact-detail"
	class="flex-grid flex-grid-fixed">
		<div class="flex-col-xs-12 flex-col-md-8">
			<div class="module-grid">
				<!-- Header -->
					<?php app_get_component('components/module-contact-detail-header') ?>
				<!-- Main -->
					<?php app_get_component('components/module-contact-detail-main') ?>
			</div>
		</div>

		<div class="flex-col-xs-12 flex-col-md-4">
			<div class="module-grid">
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
			<!-- sequences -->
				<?php app_get_component('components/module-sequences') ?>
			</div>
		</div>
</div>