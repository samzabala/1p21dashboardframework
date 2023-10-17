<!-- @if there are notifications -->
<div class="timetracker-alert-container-side alert-container offset-nav-sticky offset-0-right position-fixed">
		<!--`error`: for fatal error user feedback -->
			<?php app_get_component('components/alert','basic',false,array(
				'type'		=> 'error',
				'content'	=> 'Error: Ya dun goofed.',
			)); ?>

		<!--`caution`: for non-fatal error user feedback -->
			<?php app_get_component('components/alert','basic',false,array(
				'type'		=> 'caution',
				'content'	=> 'Oops! Something went wrong.'
			)); ?>

		<!--`success`: for important and successful user feedback -->
			<?php app_get_component('components/alert','basic',false,array(
				'type'		=> 'success',
				'content'	=> 'Your time entry has been added successfuly.'
			)); ?>

		<!--`info`: for minor things/ default alert type -->
			<?php app_get_component('components/alert','basic',false,array(
				'content'	=> 'Generic message can be used here.'
			)); ?>


</div>