
<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
	'is_in_onpage' => false
);

$args = app_parse_args($data,$defs);
?>

<!-- NOTE this field is an extension of the editor's fields. Adding a new reminder also shares this modal's markup -->
<div class="modal" data-modal-width="600px">
	<?php if($args['is_in_onpage']): ?>
		<form action="">
	<?php endif; ?>
	
		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
			<label for="<?=$args['post']?>-reminder-title-row[REPLACEWithRowIndex]" class="input-label">Title</label>
			<input id="<?=$args['post']?>-reminder-title-row[REPLACEWithRowIndex]" name="<?=$args['post']?>-reminder-title-row[REPLACEWithRowIndex]" type="text" class="input input-block input-single-line" placeholder="Add title" />
		</div>

		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
			<label for="<?=$args['post']?>-reminder-description-row[REPLACEWithRowIndex]" class="input-label">Description</label>
			<textarea id="<?=$args['post']?>-reminder-description-row[REPLACEWithRowIndex]" name="<?=$args['post']?>-reminder-description-row[REPLACEWithRowIndex]"  class="input input-block input-multiple-line" placeholder="Add description"></textarea>
		</div>

		<div class="flex-grid flex-grid-no-gutter-y flex-grid-fixed">
			<div class="flex-col-xs-12 flex-col-md-8">
				
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
					<label for="<?=$args['post']?>-reminder-due-date-row[REPLACEWithRowIndex]" class="input-label">Due Date</label>
					<input id="<?=$args['post']?>-reminder-due-date-row[REPLACEWithRowIndex]" name="<?=$args['post']?>-reminder-due-date-row[REPLACEWithRowIndex]" type="date" class="input input-block input-single-line" placeholder="mm/dd/yyyy" />
				</div>
			</div>
			<div class="flex-col-xs-12 flex-col-md-4">
				
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
					<label for="<?=$args['post']?>-reminder-due-time-row[REPLACEWithRowIndex]" class="input-label">Due Time</label>
					<input id="<?=$args['post']?>-reminder-due-time-row[REPLACEWithRowIndex]" name="<?=$args['post']?>-reminder-due-time-row[REPLACEWithRowIndex]" type="time" class="input input-block input-single-line" placeholder="--:-- --" />
				</div>
			</div>
		</div>

		<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set Reminder</div>

	<?php if($args['is_in_onpage']): ?>
		</form>
	<?php endif; ?>
</div>