

<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
	'is_in_onpage' => false,
);

$args = app_parse_args($data,$defs);
?>
<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-width="600px">
	<?php if($args['is_in_onpage']): ?>
		<form action="">
	<?php endif; ?>

		<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">

			<label for="filter-<?=$args['post']?>-wiki-to-add" class="input input-label">Choose Documentaions</label>

			<input id="filter-<?=$args['post']?>-wiki-to-add" name="filter-<?=$args['post']?>-wiki-to-add" type="text" class="input input-block input-box" placeholder="Search for documentation title" />
		</div>
			
		<?php app_get_component('components/list-group-toggle-wiki') ?>

		<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set as relevant documentations</div>
	<?php if($args['is_in_onpage']): ?>
		</form>
	<?php endif; ?>
</div>