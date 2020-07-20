


<!-- NOTE this field is an extension of the editor's fields. Adding a new reminder also shares this modal's markup -->
<div class="modal" data-modal-max-width="600px">

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
		<label for="REPLACEMODE-REPLACEwithPostType-reminder-description-row[REPLACEWithRowIndex]" class="input-label">Description</label>
		<textarea id="REPLACEMODE-REPLACEwithPostType-reminder-description-row[REPLACEWithRowIndex]" name="REPLACEMODE-REPLACEwithPostType-reminder-description-row[REPLACEWithRowIndex]" type="text" class="input input-block input-multiple-line" placeholder="Add reminder title/descriptior"></textarea>
	</div>

	<div class="flex-grid flex-grid-no-gutter-y flex-grid-fixed">
		<div class="flex-col-xs-12 flex-col-md-8">
			
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
				<label for="REPLACEMODE-REPLACEwithPostType-reminder-due-date-row[REPLACEWithRowIndex]" class="input-label">Due Date</label>
				<input id="REPLACEMODE-REPLACEwithPostType-reminder-due-date-row[REPLACEWithRowIndex]" name="REPLACEMODE-REPLACEwithPostType-reminder-due-date-row[REPLACEWithRowIndex]" type="date" class="input input-block input-single-line" placeholder="mm/dd/yyyy" />
			</div>
		</div>
		<div class="flex-col-xs-12 flex-col-md-4">
			
			<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
				<label for="REPLACEMODE-REPLACEwithPostType-reminder-due-time-row[REPLACEWithRowIndex]" class="input-label">Due Time</label>
				<input id="REPLACEMODE-REPLACEwithPostType-reminder-due-time-row[REPLACEWithRowIndex]" name="REPLACEMODE-REPLACEwithPostType-reminder-due-time-row[REPLACEWithRowIndex]" type="time" class="input input-block input-single-line" placeholder="--:-- --" />
			</div>
		</div>
	</div>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set Reminder</div>
</div>