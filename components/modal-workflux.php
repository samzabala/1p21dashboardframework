


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-max-width="600px">


	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
		<input id="REPLACEMODE-task-workflux-id-to-add" name="REPLACEMODE-task-workflux-id-to-add" type="hidden" />

		<label for="filter-REPLACEMODE-task-workflux-id-to-add" class="input-label">Choose Workflux Board</label>

		<input id="filter-REPLACEMODE-task-workflux-id-to-add" name="filter-REPLACEMODE-task-workflux-id-to-add" type="text" class="input input-block input-large input-single-line p" placeholder="Search for team member" />
		<?php app_get_component('components/list-group-toggle-workflux') ?>
	</div>

<!-- @NOTE

	.input-wrapper
		classes to add
			if no workflux board is selected => `display-none`
 -->
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<input id="REPLACEMODE-task-workflux-list-to-add" name="REPLACEMODE-task-workflux-list-to-add" type="hidden" />

		<label for="filter-REPLACEMODE-task-workflux-list-to-add" class="input-label">Choose Workflux Board List</label>

		<input id="filter-REPLACEMODE-task-workflux-list-to-add" name="filter-REPLACEMODE-task-workflux-list-to-add" type="text" class="input input-block input-large input-single-line p" placeholder="Search for List" />
		<?php app_get_component('components/list-group-toggle-workflux-list') ?>
	</div>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Add task to Workflux Board</div>
</div>