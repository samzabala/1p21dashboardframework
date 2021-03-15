
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
<!-- NOTE this field is only for searching valid users -->
<div class="modal" data-modal-width="600px">
	<?php if($args['is_in_onpage']): ?>
		<form action="">
	<?php endif; ?>

		<!-- @NOTE might need to have suffixes appended to input field name to avoid conflicting other innstances of user filter components -->

		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
			<label for="filter-REPLACEwithCorrespondingInputFieldName" class="input-label">Choose &nbsp;<span class="filter-verbiage-text">REPLACEUserVerbiage</span>s</label>
			<!-- @NOTE
				replace REPLACEUserVerbiage with appropriate verbiage based on input field it fills in eg Team Leades: Choos Team Leads, Assigned To: Choose Asignee, etc
			-->
			<input id="filter-REPLACEwithCorrespondingInputFieldName" name="filter-REPLACEwithCorrespondingInputFieldName" type="text" class="input input-block input-single-line" placeholder="Search profiles" />
		</div>

		<?php app_get_component('components/list-group-toggle-users-multiple') ?>
		
		<button data-toggle="modal-close" class="btn btn-primary-outline btn-block" onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set&nbsp;<span class="filter-verbiage-text">REPLACEUserVerbiage</span>s</button>

		
	<?php if($args['is_in_onpage']): ?>
		</form>
	<?php endif; ?>
</div>