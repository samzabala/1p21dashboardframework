
<div class="module-function function-filter-acctowner position-relative">

    <div class="input-wrapper input-wrapper-horizontal input-wrapper-block-mobile input-wrapper-responsive no-padding-right">
        <label class="input-label">Filter By</label>
	</div>
</div>


	<?php app_get_component('components/module-function-dropdown','',false,array(
		'title' => 'User',
		'slug' => 'acctowner',
		'count' => 1,
		'items' => array(
			'All Users',
			'Franky Franklin',
			'Fiona Frost',
			'Donovan Desmond',
			'Miles Medgeworth',
			'Becky Blackbell',
		),
	)) ?>


	<?php app_get_component('components/module-function-dropdown','',false,array(
		'title' => 'Owner',
		'slug' => 'acctowner',
		'count' => 1,
		'items' => array(
			'All Users',
			'Yanni Yogi',
			'El Tigre',
			'Matt Engarde',
			'Frank Sahwit',
			'Dee Vasquez',
		),
	)) ?>