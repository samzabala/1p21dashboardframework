<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);
?>

<div class="task-reminder-row alert alert-small alert-default p">

	<div class="alert-header">
		<p class="alert-title task-reminder-due h6 text-transform-uppercase">
			<!-- @if due within week -->
				Due within <span class="task-reminder-due-day-count">3</span> days
			<!-- @else -->
				<span class="task-reminder-due-date"><span class="REPLACE">06/09/69</span> Note</span>
		</p>
		<a href="#" class="alert-close color-primary" onclick="REPLACEfnToDeleteReminderAndTriggerDataToggleAlertClose"><i class="symbol symbol-close"></i></a>
		<button class="display-none" data-toggle="alert-close">Remove Reminder from UI</button>

		<a href="#" class="alert-close color-primary" data-modal-title="Edit reminder" data-toggle="modal"><i class="symbol symbol-edit"></i></a>
		<?php app_get_component('components/modal-workflow-edit-reminder',null,false,array('post'=>$args['post'])); ?>
	</div>
	<div class="task-reminder-body alert-content">

		<p class="no-margin-bottom reminder-title font-size-normalize">
			<span class="REPLACE">Reminder title</span>
		</p>
	</div>
</div>
