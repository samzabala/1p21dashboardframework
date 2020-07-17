<div class="modal" data-modal-max-width="880px">
	<!-- @if error occured -->

		<div class="alert alert-caution p">
			<span class="alert-close" data-toggle="alert-close"><i class="symbol symbol-close"></i></span>
			<span class="REPLACE">
				Error message here
			</span>
		</div>
	<form class="flex-grid flex-grid-compact no-margin-bottom">
			

		<input type="hidden" name="entry-task-id" />

		<div class="flex-col-xs-12 flex-col-md-4">
			<div class="input-group input-group-block input-group-horizontal">
				<label class="input-label" for="entry-time-start" >Start Time</label>
				<input name="entry-time-start" id="entry-time-start" type="time" class="input input-single-line" placeholder="Start time">
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-4">
			<div class="input-group input-group-block input-group-horizontal">
				<label class="input-label" for="entry-time-duration" >Duration</label>
				<input name="entry-time-duration" id="entry-time-duration" type="text" class="input input-single-line" size="5" placeholder="00:00">
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-4">

				<label class="display-block" for="entry-time-billable" >
					<input name="entry-time-billable" id="entry-time-billable" type="checkbox" class="input input-inline">
					<span>Billable</span>
				</label>

				<label class="display-block" for="entry-time-completed" >
					<input name="entry-time-completed" id="entry-time-completed" type="checkbox" class="input input-inline">
					<span>Completed</span>
				</label>
		</div>
		<div class="flex-col-xs-12 flex-col-md-8">
			<div class="input-group input-group-block input-group-horizontal">
				<label class="input-label" for="entry-time-date">Entry Date</label>
				<input name="entry-time-date" id="entry-time-date" type="date" class="input input-single-line">
			</div>
		</div>


		<!--
			.flex-col-xs-12.flex-col-md-6
			classes to add

				if [ name="entry-time-billable"] is not checked => `display-none``
		-->
		<div class="flex-col-xs-12 flex-col-md-4">
			<div class="input-wrapper input-wrapper-block input-wrapper-horizontal">
				<div class="input-group input-group-block input-group-horizontal">
					<label class="input-label"  for="entry-time-billable-duration">Billable Time</label>
					<input name="entry-time-billable-duration" id="entry-time-billable-duration" type="text" class="input input-single-line" size="5" placeholder="00:00">
				</div>
			</div>
		</div>


		<div class="flex-col-xs-12 flex-1-0">
			<div class="input-wrapper input-wrapper-block input-wrapper-horizontal">
				<div class="input-group input-group-block input-group-horizontal">
					<textarea  name="entry-time-comment" id="entry-time-comment" type="text" class="input input-multiple-line" >replace with tinymce</textarea>
				</div>
			</div>
		</div>

		<div class="flex-col-xs-12 flex-1-0 text-align-right">
			<button class="btn btn-neutral-outline" data-toggle="modal-close">Cancel</button>
			<button class="btn btn-primary" type="submit">Add Time</button>
		</div>


	</form>
</div>