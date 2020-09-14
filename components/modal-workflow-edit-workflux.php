<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);
?>


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-width="600px">


	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
		<input id="<?=$args['post']?>-workflux-id-to-add" name="<?=$args['post']?>-workflux-id-to-add" type="hidden" />

		<label for="filter-<?=$args['post']?>-workflux-to-add" class="input-label">Choose Workflux Board</label>

		<input id="filter-<?=$args['post']?>-workflux-to-add" name="filter-<?=$args['post']?>-workflux-to-add" type="text" class="input input-block input-large input-single-line" placeholder="Type and select workflux board" data-toggle="dropdown"/>
		<div class="dropdown dropdown-top-flush no-padding" data-dropdown-width="100%" data-dropdown-max-height="322px">
			<?php app_get_component('components/list-group-toggle-workflux') ?>
		</div>
	</div>

<!-- @NOTE

	.input-wrapper
		classes to add
			if no workflux board is selected => `display-none`
 -->
	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">
		<input id="<?=$args['post']?>-workflux-list-id-to-add" name="<?=$args['post']?>-workflux-list-id-to-add" type="hidden" />

		<label for="filter-<?=$args['post']?>-workflux-list-to-add" class="input-label">Choose Workflux Board List</label>

		<input id="filter-<?=$args['post']?>-workflux-list-to-add" name="filter-<?=$args['post']?>-workflux-list-to-add" type="text" class="input input-block input-large input-single-line" placeholder="Type and select list"  data-toggle="dropdown" />
		</button>
		<div class="dropdown dropdown-top-flush no-padding" data-dropdown-width="100%"  data-dropdown-max-height="300px">
			<?php app_get_component('components/list-group-toggle-workflux-list'); ?>
		</div>
	</div>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Add task to Workflux Board</div>
</div>