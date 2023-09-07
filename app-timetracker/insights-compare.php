<!-- @DEMO purpose only. no need to copy-->
<script>
	window.__DEMO_TT_CHARTS_TODAY = '2023-12-08T17:00:00';
</script>

<div class="flex-grid">
	<div class="flex-col-xs-12 flex-col-md-5 flex-col-lg-6">
		<!-- Tabs -->
		<?php app_get_component('components/insights-nav-tabs') ?>
	</div>
	<div class="flex-col-xs-12 flex-col-md-7 flex-col-lg-6 text-align-right">
		<?php app_get_component('components/insights-export') ?>
	</div>
</div>


<div class="module module-expanded">
	<div class="module-header module-header-break">
		<h2 class="no-margin">How you Compare</h2>
		<div class="module-functions">
			<select class="module-function input input-select margin-right"
				data-DEMOToggleUpdate
			>
				<option value="">Select Category</option>
				<option value="task_category">Task Category</option>
				<option value="project">Projects</option>
				<option value="client">Clients</option>
			</select>
			<div class="btn btn-group btn-group-horizontal btn-group-responsive btn-block-mobile btn-group-toggle">
				<!-- @NOTE:
					- DO NOT copy over onclick and data-DEMO- attributes. for demo purposes only for the chartssss
				-->
				<!-- @NOTE
					classes to add
						`active` => when time span is active
				-->
				<a href="#" class="btn border-color-neutral-alpha-3 background-neutral-alpha-2 color-neutral font-weight-inherit background-theme-active color-theme-active active"
					data-DEMOToggleUpdate
					data-DEMO-chart-timeBy="week"
					data-DEMO-chart-date-start="false"
					data-DEMO-chart-date="2023-12-08"
				>
					Week
				</a>
				<a href="#" class="btn border-color-neutral-alpha-3 background-neutral-alpha-2 color-neutral font-weight-inherit background-theme-active color-theme-active"
					data-DEMOToggleUpdate
					data-DEMO-chart-timeBy="month"
					data-DEMO-chart-date-start="false"
					data-DEMO-chart-date="2023-12-08"
				>
					Month
				</a>
				<a href="#" class="btn border-color-neutral-alpha-3 background-neutral-alpha-2 color-neutral font-weight-inherit background-theme-active color-theme-active"
					data-DEMOToggleUpdate
					data-DEMO-chart-timeBy="year"
					data-DEMO-chart-date-start="false"
					data-DEMO-chart-date="2023-12-08"
				>
					Year
				</a>
				<a href="#" class="btn border-color-neutral-alpha-3 background-neutral-alpha-2 color-neutral font-weight-inherit background-theme-active color-theme-active"
					data-DEMOToggleUpdate
					data-DEMO-chart-timeBy="all"
					data-DEMO-chart-date-start="false"
					data-DEMO-chart-date="2023-12-08"
				>
					All Time
				</a>
			</div>
		</div>

	</div>
	<div class="module-content">
		<div class="flex-grid flex-grid-fixed flex-grid-expanded">
			<div class="flex-col-sm-6 flex-col-xs-12">
				<?php app_get_component('components/dropdown-compare-user','',false,array(
					'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-dev-nadia.jpg',
					'name' => 'Nadia Rodriguez',
					'title' => 'Web Developer',
					'has_user' => true,
				)); ?>
			</div>
			<div class="flex-col-sm-6 flex-col-xs-12">
				<?php app_get_component('components/dropdown-compare-user','',false,array(
					// 'image' => FWAPPS_ROOT_URL.'/placeholder/files/shrek.jpg',
					// 'name' => 'Shrek',
					// 'title' => 'Somebody',
				)); ?>
			</div>
		</div>


		<?php app_get_component('components/chart-time-compare'); ?>
	</div>
</div>