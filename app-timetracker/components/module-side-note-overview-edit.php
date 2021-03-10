<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'note', //project,client,note,whatever
	'is_in_board_modal' => false,
);

$args = app_parse_args($data,$defs);

?>
<div class="module position-relative"
	<?php if($args['is_in_board_modal'] == false): //only when in its own basic page ?>
		data-grid-area-md="auto / side"
	<?php endif; ?>
>
	<div class="module-content">

		<!-- Project -->
			<h5>Project</h5>
			<p class="<?=$args['post']?>-project">
				<span class="REPLACE">Project Name</span>
			</p>

		<!-- Client -->
			<h5>Client</h5>
			<p class="<?=$args['post']?>-client">
				<span class="REPLACE">Client Name</span>
			</p>

			<div id="<?=$args['post']?>-status">
			
				<h5>Status</h5>
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
					<span class="flex-child">
						<input name="<?=$args['post']?>-status" type="radio" class="input input-inline" value="private" />
						Private
					</span>
					<span class="flex-child">
						<input name="<?=$args['post']?>-status" type="radio" class="input input-inline" value="public" />
						Public
					</span>
				</div>
			</div>
			

		<hr class="no-margin-y">


		<!-- Sher -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Share With:</h5>
					</div>
					<div class="flex-child">
						<input id="<?=$args['post']?>-followers-id" name="<?=$args['post']?>-followers-id" type="hidden" />
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Share <i class="symbol symbol-edit"></i></a>
						<?php app_get_component('components/modal-share-notes-with','',false,array(
							'is_in_note_edit_form' => true
						)); ?>
					</div>
				</div>
			</div>
	</div>
</div>