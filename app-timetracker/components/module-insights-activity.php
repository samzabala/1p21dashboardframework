<div class="module flex-xs flex-direction-column align-items-stretch" data-grid-area="activity" data-align-self-lg="self-start">

	<h5 class="no-margin-y">Activity</h5>

	<div class="flex-1-1 flex-xs flex-direction-column justify-content-center">
	
		<h6 class="color-inherit">Most Active Days</h6>
		
		<!-- @NOTE: Unlike charts from other modules, this needs at least a week or two days worth of entries -->

		<!-- @if has entries more than two days -->
				<?php app_get_component('components/chart-time-active-days'); ?>
		<!-- @else -->
			<span class="font-style-italic color-neutral">Not enough entries yet</span>

	</div>

	<hr class="flex-0-0">

	<div class="flex-1-1 flex-xs flex-direction-column justify-content-center">
		<h6 class="color-inherit">Most Active Hours</h6>
		

		
		<!-- @NOTE: Unlike charts from other modules, this needs at least a week or two days worth of entries -->

		<!-- @if has entries more than two days -->
			<?php app_get_component('components/chart-time-active-hours'); ?>
		<!-- @else -->
			<span class="font-style-italic color-neutral">Not enough entries yet</span>
	</div>

</div>