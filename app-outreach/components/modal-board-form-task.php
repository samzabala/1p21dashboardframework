<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-editor-task" data-modal-title="Edit Task" data-modal-width="670px">
	<form action="" class="flex-grid flex-grid-fixed">
		<div class=" flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="task-title" class="input-label sr-only">Title</label>
				<input type="text" name="task-title" class="input input-single-line input-large" placeholder="Add title">	
			</div>
		</div>

		<div class="flex-col-md-8 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-schedule-date" class="input-label">Scheduled Date</label>
				<a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
					<div class="btn btn-default justify-content-flex-start">
						<span class="REPLACE">Friday, April 20, 2069</span>
					</div>
					<div class="btn btn-symbol btn-default">
						<i class="symbol symbol-calendar-alt"></i>
					</div>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
					<input type="text" name="task-schedule-date" class="input input-calendar" value="2069-04-20"/>
				</div>
			</div>
		</div>

		<div class="flex-col-md-4 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="task-schedule-time" class="input-label">Scheduled Time</label>
				<input type="time" name="task-time" class="input input-single-line">
			</div>
		</div>

		<div class="flex-col-md-5 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-due-date" class="input-label">Due Date</label>
				<a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
					<div class="btn btn-default justify-content-flex-start">
						<span class="REPLACE">Friday, April 20, 2069</span>
					</div>
					<div class="btn btn-symbol btn-default">
						<i class="symbol symbol-calendar-alt"></i>
					</div>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
					<input type="text" name="task-due-date" class="input input-calendar" value="2069-04-20"/>
				</div>
			</div>
		</div>

		<div class="flex-col-md-3 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="task-due-time" class="input-label">Due Time</label>
				<input type="time" name="task-due-time" class="input input-single-line">
			</div>
		</div>

		<div class="flex-col-md-4 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="task-asignee" class="input-label">Assignee</label>
				<select type="text" name="task-asignee" class="input input-single-line">
					<option value="">Select User</option>
					<option value="REPLACEId">Phoenix Wright</option>
					<option value="REPLACEId">Miles Edgeworth</option>
					<option value="REPLACEId">Eren Yaeger</option>
					<option value="REPLACEId">Sasha Braus</option>
					<option value="REPLACEId">Harambe</option>
					<option value="REPLACEId">Inuyasha</option>
					<option value="REPLACEId">Batman</option>
					<option value="REPLACEId">Zack Snyder</option>
				</select>
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-note" class="input-label">Task Note</label>
				<textarea class="input input-multiple-line" name="task-note">
					REPLACE with tinymce
				</textarea>
			</div>
		</div>
		<div class=" flex-col-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-time" class="input-label">Attachments</label>
				<input type="file" multiple class="input input-single-line" name="task-attachments" />
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="text-align-right">
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>