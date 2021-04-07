<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-editor-task" data-modal-title="Edit Task" data-modal-width="670px">
	<form action="" class="flex-grid flex-grid-fixed">

		<div class="flex-col-md-8 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-date" class="input-label">Scheduled Date</label>
				<a data-toggle-dropdown class="btn-group btn-block btn-group-horizontal btn-group-unite">
					<div class="btn btn-default justify-content-flex-start">
						<span class="REPLACE">Friday, April 20, 2069</span>
					</div>
					<div class="btn btn-symbol btn-default">
						<i class="symbol symbol-calendar-alt"></i>
					</div>
				</a>
				<div class="dropdown dropdown-top-flush dropdown-center-x no-padding">
					<input type="text" name="task-date" class="input input-calendar no-radius-bottom" value="2069-04-20">
					<a href="#" data-toggle-dropdown class="btn btn-primary btn-block no-radius-top">Set</a>
				</div>
			</div>
		</div>

		<div class="flex-col-md-4 flex-col-xs-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-time" class="input-label">Scheduled Time</label>
				<input type="time" name="task-time" class="input input-single-line">
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="input-wrapper input-wrapper-block input-wrapper-vertical position-relative">
				<label for="task-time" class="input-label">Task Note</label>
				<textarea class="input input-multiple-line" name="task-note">
					REPLACE with tinymce
				</textarea>
			</div>
		</div>

		<div class=" flex-col-12">
			<div class="text-align-right">
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>