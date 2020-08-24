


<!-- NOTE this field is an extension of the editor's fields -->
<div class="modal" data-modal-width="600px">


	<div class="input-wrapper input-wrapper-vertical input-wrapper-block p position-relative">

		<label for="filter-<?=$args['post']?>-wiki-to-add" class="input-label">Choose Documentaions</label>

		<input id="filter-<?=$args['post']?>-wiki-to-add" name="filter-<?=$args['post']?>-wiki-to-add" type="text" class="input input-block input-large input-single-line" placeholder="Search for documentation title" />
	</div>
		
	<?php app_get_component('components/list-group-toggle-wiki') ?>

	<div data-toggle="modal-close" class="btn btn-primary-outline btn-block"  onclick="REPLACEWithFnThatMakesChangesToCorrespondingInputFieldName">Set as relevant documentations</div>
</div>