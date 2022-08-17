
<!-- @if have time entries -->
	<!-- Filter -->
	<div class="margin-large-top">
		<?php app_get_component('components/filter-logs') ?>
	</div>

	<!-- @LOOP .module -->

		<div class="module margin-top">
			<div class="module-header">
				<div class="module-title log-time-range">
					<span class="REPLACE">Today</span>
				</div>
			</div>
			<div class="module-content no-padding">

				<!-- @if has logs for the day -->
					<?php app_get_component('components/list-logs'); ?>
				<!-- @else -->
					<div class="font-style-italic color-neutral padding  border-width-thin-top border-style-solid-top border-color-neutral-alpha-3">
						No entries for the day
					</div>
			</div>
		</div>

			<!-- @PLACEHOLDER: Delete when ready -->
					<div class="module margin-top">
						<div class="module-header">
							<div class="module-title log-time-range">
								<span class="REPLACE">Yesterday</span>
							</div>
						</div>
						<div class="module-content no-padding">

							<!-- @if has logs for the day -->
								<?php app_get_component('components/list-logs'); ?>
							<!-- @else -->
								<div class="font-style-italic color-neutral padding  border-width-thin-top border-style-solid-top border-color-neutral-alpha-3">
									No entries for the day
								</div>
						</div>
					</div>
					<div class="module margin-top">
						<div class="module-header">
							<div class="module-title log-time-range">
								<span class="REPLACE">June 12, 1898</span>
							</div>
						</div>
						<div class="module-content no-padding">
								<div class="font-style-italic color-neutral padding  border-width-thin-top border-style-solid-top border-color-neutral-alpha-3">
									No entries for the day
								</div>
						</div>
					</div>
<!-- @else -->
	<div class="h2 color-neutral text-align-center font-weight-300 padding-large-y margin-large-y">
		There are no time logs yet.
	</div>