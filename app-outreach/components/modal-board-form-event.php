<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-editor-event" data-modal-title="Edit Event" data-modal-width="670px">
<form action="" class="flex-grid flex-grid-fixed">
		<div class=" flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="event-title" class="input-label sr-only">Title</label>
				<input type="text" name="event-title" class="input input-single-line input-large" placeholder="Add title">	
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="event-note" class="input-label">event Note</label>
				<textarea class="input input-multiple-line" name="event-note">
					REPLACE with tinymce
				</textarea>
			</div>
		</div>

		

		<div class="flex-col-md-7 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="event-schedule-date" class="input-label">Scheduled Date</label>
				<a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
					<div class="btn btn-default justify-content-flex-start">
						<span class="REPLACE">Friday, April 20, 2069</span>
					</div>
					<div class="btn btn-symbol btn-default">
						<i class="symbol symbol-calendar-alt"></i>
					</div>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
					<input type="text" name="event-schedule-date" class="input input-calendar" value="2069-04-20"/>
				</div>
			</div>
		</div>

		<div class="flex-col-md-5 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="event-schedule-time" class="input-label">Scheduled Time</label>
				<input type="time" name="event-time" class="input input-single-line">
			</div>
		</div>

		<div class="flex-col-md-7 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="event-due-date" class="input-label">Due Date</label>
				<a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
					<div class="btn btn-default justify-content-flex-start">
						<span class="REPLACE">Friday, April 20, 2069</span>
					</div>
					<div class="btn btn-symbol btn-default">
						<i class="symbol symbol-calendar-alt"></i>
					</div>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-center-x no-padding" data-dropdown-width="100%">
					<input type="text" name="event-due-date" class="input input-calendar" value="2069-04-20"/>
				</div>
			</div>
		</div>

		<div class="flex-col-md-5 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
				<label for="event-due-time" class="input-label">Due Time</label>
				<input type="time" name="event-due-time" class="input input-single-line">
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="text-align-right">
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>