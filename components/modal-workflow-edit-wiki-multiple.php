


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-max-width="600px">


	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">

		<label for="filter-REPLACEMODE-task-wiki-to-add" class="input-label">Choose Documentaions</label>

		<input id="filter-REPLACEMODE-task-wiki-to-add" name="filter-REPLACEMODE-task-wiki-to-add" type="text" class="input input-block input-large input-single-line" placeholder="Search for documentation title" />
	</div>
		
	<?php app_get_component('components/list-group-toggle-wiki') ?>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set as task wiki/how-tos</div>
</div>