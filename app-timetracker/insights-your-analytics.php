<!-- @NOTE
JS to Import:

	import ModuleGrid from './../../../assets/plugins/framework/src/js/imports/module-grid';


-->

<!-- @DEMO purpose only. no need to copy-->
	<script>
		window.__DEMO_TT_CHARTS_TODAY = '2023-12-08T17:00:00';
	</script>

<div class="flex-grid align-items-center">
	<div class="flex-col-xs-12 flex-col-md-5 flex-col-lg-6">
		<!-- Tabs -->
		<?php app_get_component('components/insights-nav-tabs') ?>
	</div>
	<div class="flex-col-xs-12 flex-col-md-7 flex-col-lg-6 text-align-right">
		<div class="inline-flex-md position-relative">
			<div class="btn-group btn-group-horizontal btn-block-mobile">
				<a href="#" class="btn btn-default btn-symbol">
					<i class="symbol symbol-arrow-left"></i>
				</a>

				<a href="#insights-range" data-toggle-dropdown class="btn btn-default">
					<span class="REPLACE">December 4 - December 11</span>
				</a>

				<a href="#" class="btn btn-default btn-symbol">
					<i class="symbol symbol-arrow-right"></i>
				</a>
			</div>
			<!-- @NOTE:
				- DO NOT copy over onclick and data-DEMO- attributes. for demo purposes only for the chartssss
			-->
			<div id="insights-range" class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="max(800px,100%)">
				<div class="flex-grid">
					<div class="flex-col-xs-12 flex-col-sm-6">
							
						<h5 class="no-margin-top">Time Range</h5>
						<ul class="list-group list-group-interactive">
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-timeBy="day"
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-date="2023-12-08"
								>Today</a>
							</li>
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-timeBy="week"
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-date="2023-12-08"
								>This Week</a>
							</li>
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-timeBy="month"
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-date="2023-12-08"
								>This Month</a>
							</li>
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-timeBy="month"
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-date="2023-11-8"
								>Last Month</a>
							</li>
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-date="2023-11-8"
									data-DEMO-chart-timeBy="year"
								>This Year</a>
							</li>
							<li>
								<a href="#" class="dropdown-purger"
									data-DEMOToggleUpdate
									data-DEMO-chart-date-start="false"
									data-DEMO-chart-timeBy="all"
								>All Time</a>
							</li>

							<!-- @PLACEHOLDER: For demo only -->
								<li>
									<a href="#" class="dropdown-purger"
										data-DEMOToggleUpdate
										data-DEMO-chart-date="2023-11-07"
										data-DEMO-chart-date-start="2023-10-27"
									>Custom Demo<br>
									Ideal Amount of days <br>
									[2023-10-27 - 2023-11-07]</a>
								</li>
								<li>
									<a href="#" class="dropdown-purger"
										data-DEMOToggleUpdate
										data-DEMO-chart-date="2023-11-07"
										data-DEMO-chart-date-start="2023-04-20"
									>Custom Demo<br>
									More than 1 month<br>
									Less than a year<br>
									[2023-04-20 - 2023-11-07]</a>
								</li>
								<li>
									<a href="#" class="dropdown-purger"
										data-DEMOToggleUpdate
										data-DEMO-chart-date="2023-12-08"
										data-DEMO-chart-date-start="2023-10-14"
									>Custom Demo<br>
									Edge Case Week bars max/<br>
									approx 12 weeks - DEMO <br>
									[2023-10-14 - 2023-12-08]</a>
								</li>
								<li>
									<a href="#" class="dropdown-purger"
										data-DEMOToggleUpdate
										data-DEMO-chart-date="2023-12-08"
										data-DEMO-chart-date-start="2023-11-14"
									>Custom Demo<br>
									More than max days /<br>
									approx more than 12 - DEMO <br>
									[2023-11-14 - 2023-12-08]</a>
								</li>
						</ul>
					</div>
					<div class="flex-col-xs-12 flex-col-sm-6">
						<form action="">
							<h5 class="no-margin-top">Custom Range</h5>
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block margin-small-bottom">
								<label for="start_date" class="input-label">Start Date</label>
								<input id="start_date" class="input input-single-line input-block" type="date">
							</div>
							<div class="input-wrapper input-wrapper-vertical input-wrapper-block margin-small-bottom">
								<label for="end_date" class="input-label">End date</label>
								<input id="end_date" class="input input-single-line input-block" type="date">
							</div>
							<button class="btn btn-theme">Apply</button>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<span class="spacer">&nbsp;</span>
		<?php app_get_component('components/insights-export') ?>
	</div>
</div>

<div class="module-grid align-items-stretch"
	data-grid-flow="dense"
	data-grid-template-rows=" minmax(100px,min-content) minmax(180px,min-content) 1fr "
	data-grid-auto-rows="auto"
	data-grid-template-columns-xs="100%"
	data-grid-template-areas-xs="
		'sidebar'
		'overview'
		'scheduled'
		'log'
		'allocation'
		'activity'
		'latest'
	"
	data-grid-template-columns-md="minmax(235px,1fr) 8fr 18fr"
	data-grid-template-areas-md="
		'sidebar overview overview'
		'sidebar scheduled scheduled'
		'sidebar log log'
		'allocation allocation activity'
		'latest latest latest'
	"
	data-grid-template-columns-lg="minmax(235px,1fr) 4fr 2fr"
	data-grid-template-areas-lg="
		'sidebar overview allocation'
		'sidebar scheduled allocation'
		'sidebar log allocation'
		'sidebar log activity'
		'latest latest latest'
	"
>
	<?php app_get_component('components/module-insights-sidebar'); ?>
	<?php app_get_component('components/module-insights-overview'); ?>
	<?php app_get_component('components/module-insights-scheduled'); ?>
	<?php app_get_component('components/module-insights-log'); ?>
	<?php app_get_component('components/module-insights-allocation'); ?>
	<?php app_get_component('components/module-insights-activity'); ?>
	<?php app_get_component('components/module-insights-latest'); ?>
</div>