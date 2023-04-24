
<div id="timetracker-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12  flex-col-md-6">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-6">
		<div class="module-functions text-align-right">
			<?php app_get_component('components/function-input-search'); ?>
			<div class="module-function">
				<a href="<?= app_create_link(array('template' => 'project-detail')) ?>" class="btn btn-block-mobile btn-theme">Add New +</a>
			</div>
		</div>
	</div>
</div>

<div id="timetracker-projects" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between align-items-center">
			<?php app_get_component('components/pagination-per-page') ?>
			<?php app_get_component('components/pagination-number') ?>
		</div>
		<hr class="hide-nonmobile no-margin-bottom">
	</div>

	<div class="module-content no-padding-x">
		<?php app_get_component('components/list-projects'); ?>
	</div>


	<div class="module-footer">
		<hr class="hide-nonmobile">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between align-items-center">
			<?php app_get_component('components/pagination-per-page') ?>
			<?php app_get_component('components/pagination-number') ?>
		</div>
	</div>
</div>