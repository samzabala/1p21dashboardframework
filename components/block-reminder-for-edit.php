
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
		<?php app_get_component('components/modal-workflow-edit-reminder'); ?>
	</div>
	<div class="task-reminder-body alert-content">

		<p class="no-margin-bottom reminder-title font-size-normalize">
			<span class="REPLACE">Reminder title</span>
		</p>
	</div>
</div>
