<!-- @if there are notifications -->
<div class="timetracker-alert-container alert-container no-padding-x offset-nav-top padding-top position-sticky">
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