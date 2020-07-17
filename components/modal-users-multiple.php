

<!-- NOTE this field is only for searching valid users -->
<div class="modal" data-modal-max-width="600px">

	<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components -->

	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
		<label for="filter-REPLACEwithCorrespondingInputFieldName" class="input-label">Choose &nbsp;<span class="filter-verbiage-text">REPLACEUserVerbiage</span>s</label>
		<!-- @NOTE
			replace REPLACEUserVerbiage with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
		-->
		<input id="filter-REPLACEwithCorrespondingInputFieldName" name="filter-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-large input-single-line" placeholder="Type and select profile" />
	</div>

	<?php app_get_component('components/list-group-toggle-users-multiple') ?>
	
	<button data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set&nbsp;<span class="filter-verbiage-text">REPLACEUserVerbiage</span>s</button>
</div>