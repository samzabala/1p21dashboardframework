

<!-- NOTE this field is only for searching valid users -->
<div class="modal" data-modal-max-width="600px">

	<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components -->

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<label for="filter-user-REPLACEwithCorrespondingInputFieldName" class="input-label sr-only">Search</label>
		<!-- @NOTE
			replace placeholder with appropriate verbage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="filter-user-REPLACEwithCorrespondingInputFieldName" name="filter-user-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Search for PLACEHOLDER" />
	</div>

	<?php app_get_component('components/list-group-toggle-users-multiple') ?>
	
	<button data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Done</button>
</div>