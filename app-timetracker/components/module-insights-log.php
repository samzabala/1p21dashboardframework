<!-- @NOTE
JS to Import:

	import ModuleGrid from './../../../assets/plugins/framework/src/js/imports/button';


-->
<div class="module align-items-stretch flex-xs flex-direction-column" data-grid-area="log">
	<div class="flex-0-0">
		<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
			<div class="flex-child	flex-1-1 margin-right-auto">
				<h5 class="no-margin-y">Time Log</h5>
			</div>
			<div class="flex-child align-self-center">

				<!-- @NOTE:
					- DO NOT copy over onchange and data-DEMO- attributes. for demo purposes only
				-->
				<select class="input input-select margin-right"
					data-DEMOToggleUpdate
				>
					<option value="task_category">Task Category</option>
					<option value="project">Projects</option>
					<option value="client">Clients</option>
				</select>
			</div>
		</div>
	</div>
	<div class="flex-1-1 flex-xs flex-direction-column justify-content-flex-start">
		<?php app_get_component('components/chart-time-log'); ?>
	</div>
</div>