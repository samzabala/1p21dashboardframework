

<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-max-width="600px">

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<input id="REPLACEMODE-REPLACEwithPostType-team-lead-title-to-add" name="REPLACEMODE-REPLACEwithPostType-team-lead-title-to-add" type="hidden" />

		<label for="filter-REPLACEMODE-REPLACEwithPostType-team-lead-title-to-add" class="input-label">Choose team member title</label>

		<select id="filter-REPLACEMODE-REPLACEwithPostType-team-lead-title-to-add" name="filter-REPLACEMODE-REPLACEwithPostType-team-lead-title-to-add" type="text" class="input input-block input-large input-select" />
		<?php app_get_component('components/options-team-lead-title') ?>
		</select>
	</div>


<!-- @NOTE

	.input-wrapper
		classes to add
			if no member tyoppe is selected selected => `display-none`
 -->

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
		<input id="REPLACEMODE-REPLACEwithPostType-team-lead-id-to-add" name="REPLACEMODE-REPLACEwithPostType-team-lead-id-to-add" type="hidden" />

		<label for="filter-REPLACEMODE-REPLACEwithPostType-team-lead-to-add" class="input-label">Choose team member</label>

		<input id="filter-REPLACEMODE-REPLACEwithPostType-team-lead-to-add" name="filter-REPLACEMODE-REPLACEwithPostType-team-lead-to-add" type="text" class="input input-block input-large input-single-line p" placeholder="Search for user" />
		<?php app_get_component('components/list-group-toggle-users') ?>
	</div>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set team member</div>


</div>