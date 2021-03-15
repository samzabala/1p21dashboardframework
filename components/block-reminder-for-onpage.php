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
		<form action="">
			<a href="#" class="alert-close color-primary" onclick="REPLACEfnToDeleteReminderAndTriggerDataToggleAlertClose"><i class="symbol symbol-close"></i></a>
			<button class="display-none" data-toggle="alert-close">Remove Reminder from UI</button>
		</form>
		
		<form action="">
			<a href="#" class="alert-close color-primary" data-modal-title="Edit reminder" data-toggle="modal"><i class="symbol symbol-edit"></i></a>
			<?php app_get_component('components/modal-workflow-edit-reminder',null,false,array('post'=>$args['post'])); ?>
		</form>

	</div>
	<div class="task-reminder-body alert-content">

		<p class="reminder-title font-size-normalize">
			<span class="REPLACE">Reminder title</span>
		</p>



		<!-- @if reminder has description -->
			<div class="task-reminder-description">
					<a href="#" data-toggle="modal">More info</a>
					<div class="modal" data-modal-title="Reminder: REPLACEWithReminderTitle" data-modal-classes="record-notes-modal">
						<div class="REPLACE">
							<p>I once forgot to brush my teeth for 5 weeks.</p>
							<p>I didn’t actually sell my car, I just forgot where I parked it.</p>
							<p>I don’t know who Al Gore is and at this point I’m too afraid to ask.</p>
							<p>When they say 2 percent milk I don’t know what the other 98 percent is.</p>
							<p>When I was a baby my head was so big scientists did experiments on me.</p>
							<p>I once threw beer at a swan and then it attacked my niece, Rebecca.</p>
						</div>
					</div>

			</div>

	</div>
</div>
