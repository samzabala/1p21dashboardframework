<form class="grid grid-flex grid-flex-fixed grid-compact grid-constricted-y align-items-flex-end">
	<div class="grid-col-xs-12 grid-col-md-10">
		<div class="grid grid-flex grid-flex-fixed grid-compact">
			<div class="grid-col-xs-12 grid-col-md-3">
				<?php app_get_component('components/module-function-datalist','',false,array(
					'label' => 'Client',
					'title' => 'Select or Type Client',
					'slug' => 'client',
					'count' => 1,
					'items' => array(
						'Wright & Co Law Offices',
						'1Point21 Internal',
						'Samurai Jack',
						'Ghost Stories American English Dub',
						'Inuyasha',
						'Spy X Family',
						'Mang Inasal',
						'Jollibee',
						'The Mandalorian',
						'Ranking of Kings',
						'Eren Yeager',
						'Not Eren Yeager',
						'Beyonce',
						'Liza Soberano',
					),
				)) ?>
			</div>
			<div class="grid-col-xs-12 grid-col-md-3">
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
			<div class="grid-col-xs-12 grid-col-md-3">
				<?php app_get_component('components/module-function-select','',false,array(
					'label' => 'Status',
					'title' => 'Select Status',
					'slug' => 'status',
					'count' => 1,
					'items' => array(
						'Backlog',
						'In Progress',
						'Review',
						'Completed',
					),
				)) ?>
			</div>
			<div class="grid-col-xs-12 grid-col-md-3">
				<?php app_get_component('components/module-function-select','',false,array(
					'label' => 'Time Range',
					'title' => 'Time Range',
					'slug' => 'range',
					'count' => 1,
					'items' => array(
						'Today',
						'Last 3 Days',
						'Last Week',
						'Last Month',
					),
				)) ?>
			</div>
			
		</div>
	</div>
	<div class="grid-col-xs-12 grid-col-md-2">
		<div class="grid grid-flex grid-flex-fixed grid-compact">
			<div class="grid-col-12">
				<button class="btn btn-theme btn-block no-padding-x">Apply Filters</button>
			</div>
		</div>
	</div>
</form>

