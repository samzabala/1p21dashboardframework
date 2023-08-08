<form class="flex-grid flex-grid-compact align-items-flex-end">
	<div class="flex-col-xs-12 flex-col-md-8">
		<div class="flex-grid flex-grid-fixed flex-grid-compact no-margin-bottom ">

		<!-- @if can filter by Sales Rep -->
			<?php if(FWAPPS_TEMPLATE == 'clients'): ?>
				<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
					<?php app_get_component('components/module-function-datalist','',false,array(
						'label' => 'Sales Rep',
						'title' => 'Select or Type Name',
						'slug' => 'sales',
						'count' => 1,
						'items' => array(
							'RM Leader',
							'Suga Rapper',
							'J-Hope Rapper',
							'Jin Vocals',
							'Jungkook Vocals',
							'V Vocals',
							'Jimin Vocals',
							'Lalisa Rapper',
							'Rose Vocals',
							'Jennie Rapper',
							'Jisoo Vocals',

						),
					)) ?>
				</div>
			<?php endif; ?>

		<!-- @if can filter by account manager -->
			<?php if(FWAPPS_TEMPLATE == 'clients'): ?>
				<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
					<?php app_get_component('components/module-function-datalist','',false,array(
						'label' => 'Account Manager',
						'title' => 'Select or Type Name',
						'slug' => 'am',
						'count' => 1,
						'items' => array(
							'Ken Vocals',
							'Stell Coreographer',
							'Justin Vocals',
							'Pablo Leader',
							'Josh Rapper',
							'Sandara Park',
							'Bom Park',
							'CL',
							'Minzy',
						),
					)) ?>
				</div>
			<?php endif; ?>

		<!-- @if can filter by client -->
			<?php if(FWAPPS_TEMPLATE == 'projects' || FWAPPS_TEMPLATE == 'tasks'): ?>
				<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">

					<?php app_get_component('components/module-function-datalist','',false,array(
						'label' => 'Client',
						'title' => 'Select or Type Client',
						'slug' => 'client',
						'count' => 1,
						'items' => array(
							'A Client',
							'Another Client',
							'This other Client',
							'Other Other Client',
							'Oh Lordy that\'s a lot of Clients',
							'Eren Yeager',
							'Barbie & Ken',
							'Just Ken',
							'Selena Gomez',
						),
					)) ?>
				</div>
			<?php endif; ?>
			
		<!-- @if can filter by project -->
			<?php /* if(FWAPPS_TEMPLATE == 'projects'): ?>
				<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">

					<?php app_get_component('components/module-function-datalist','',false,array(
						'label' => 'Project',
						'title' => 'Select or Type Project',
						'slug' => 'project',
						'count' => 1,
						'items' => array(
							'A Project',
							'Another Project',
							'This other Project',
							'Other Other Project',
							'Oh Lordy that\'s a lot of Projects',
							'Chemical X',
							'Mekeni Mekeni Dugdug Doremi (Repeat)',
							'Tongtongtongtongpakitongkitong',
							'Bababa ba? Bababa!',
						),
					)) ?>
				</div>
			<?php endif; */ ?>
			

			<!-- @if can filter by project status -->
				<?php if(FWAPPS_TEMPLATE == 'projects'): ?>
					<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
						<?php app_get_component('components/module-function-select','',false,array(
							'label' => 'Project Status',
							'title' => 'Select Status',
							'slug' => 'status',
							'count' => 1,
							'items' => array(
								'Backlog',
								'In Progress',
								'Review',
								'Completed',
								'Blocked',
							),
						)) ?>
					</div>
				<?php endif; ?>
			

			<!-- @if can filter by project type -->
				<?php if(FWAPPS_TEMPLATE == 'projects'): ?>
					<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
						<?php app_get_component('components/module-function-select','',false,array(
							'label' => 'Project Type',
							'title' => 'Select Type',
							'slug' => 'type',
							'count' => 1,
							'items' => array(
								'A type',
								'Another type',
								'B Type',
								'0 Type',
								'AB Type',
							),
						)) ?>
					</div>
				<?php endif; ?>

		
			<?php if( FWAPPS_TEMPLATE == 'tasks'): ?>
				<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
					<?php app_get_component('components/module-function-select','',false,array(
						'label' => 'Task Status',
						'title' => 'Select Status',
						'slug' => 'status',
						'count' => 1,
						'items' => array(
							'Backlog',
							'In Progress',
							'Review',
							'Completed',
							'Blocked',
						),
					)) ?>
				</div>
			<?php endif; ?>
			

			<!-- @if can filter by range -->
				<?php if(FWAPPS_TEMPLATE == 'projects' || FWAPPS_TEMPLATE == 'tasks'): ?>
					<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-1 flex-1-1">
						<?php app_get_component('components/module-function-select','',false,array(
							'label' => 'Time Range',
							'title' => 'Time Range',
							'slug' => 'range',
							'count' => 1,
							'items' => array(
								'Due Today/Overdue',
								'Due This Week',
								'Due This Month',
								'Created Today',
								'Created This Week',
								'Created This Year',
								'Created Last Year',
							),
						)) ?>
					</div>
				<?php endif; ?>
			
			
		</div>
	</div>
	<div class="flex-child flex-1-0">
		<div class="flex-md align-items-flex-end">
			<div>
				<label for="filter-range" class="input-label no-padding-top padding-small-bottom display-block">Show Overdue Tasks</label>
				<div class="btn-group btn-group-horizontal btn-group-interactive btn-group-toggle btn-block">
					<a href="#" class="btn border-color-neutral-alpha-3 background-transparent color-neutral font-weight-inherit background-theme-active color-theme-active active">On</a>
					<a href="#" class="btn border-color-neutral-alpha-3 background-transparent color-neutral font-weight-inherit background-theme-active color-theme-active">Off</a>
				</div>
			</div>
			<div class="hide-mobile margin-small-right"><span class="spacer"></span></div>
			<button class="btn btn-theme-outline btn-block-mobile margin-top flex-1-1">Apply Filters</button>
		</div>
	</div>
</form>