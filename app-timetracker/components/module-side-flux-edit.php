<?php
$defs = array(
	//@param post - type of single achuchuchu
	//is_in_board_modal -> attributes to add/remove whther or not the boi is within a modal
		//@NOTE this attribute is specifically [data-grid-area-md="auto / side"]. should only be present if the markup is within a static page. this attroibute should not be present when being used in a board modal
	'post' => 'task', //project,client,note,whatever
	'is_in_board_modal' => false,
);

$args = app_parse_args($data,$defs);

?>
<div class="module"
	<?php if($args['is_in_board_modal'] == false): //only when in its own basic page ?>
		data-grid-area-md="auto / side"
	<?php endif; ?>
>
	<div class="module-content">
	
		<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
		<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
			<!-- WORKFLUX BOARDS -->
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Workflux Boards</h5>
					</div>
					<div class="flex-child">
						<input id="<?=$args['post']?>-workfluxs-id" name="<?=$args['post']?>-workfluxs-id" type="hidden" />
						<input id="<?=$args['post']?>-workfluxs-list" name="<?=$args['post']?>-workfluxs-list" type="hidden" />
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Board <i class="symbol symbol-plus"></i></a>
						<?php app_get_component('components/modal-workflow-edit-workflux'); ?>
					</div>
				</div>

				<div class="post-workflux">
					<!-- @LOOP component -->
						<?php app_get_component('components/profile-workflux-titled-for-edit') ?>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<2; $i++){ ?>
								<?php app_get_component('components/profile-workflux-titled-for-edit'); ?>
							<?php } ?>
				</div>

				
			<hr class="no-margin-y">
		<?php endif; ?>


		<!-- TAGS -->
			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="input-label">Labels &amp; Tags</h5>
				</div>
				<div class="flex-child">
					<input id="<?=$args['post']?>-tags" name="<?=$args['post']?>-tags" type="hidden" />
					<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Tags <i class="symbol symbol-plus"></i></a>
					<?php app_get_component('components/modal-workflow-edit-tags',null,false,array('post'=>$args['post'])); ?>
				</div>
			</div>

			<div class="post-tags">
				<!--
					AVAILABLE TAG SCHEMES:
					tag-default
					tag-primary
					tag-secondary
					tag-accent
					tag-neutral
					tag-success
					tag-caution
					tag-error
					tag-intensity-1
					tag-intensity-2
					tag-intensity-3
					tag-intensity-4
					tag-intensity-5
				-->
					<!--
						@NOTE @dynamic class => tag-COLORSCHEME
						we may need to coordinate to have colors associated with certain tags.
						I would not recommend creating new classes by adding colors to the ui's color scheme so we can reduce the need of increasing the stylesheet's file size further.
						We can have an array of random colors much like the setup for the scoreboard charts and set them as inline background-color for `tag-default`
						If it gets too tedious, we can always just use `tag-primary` for all tags as fallback
					-->

				<span class="p tag tag-primary">
					<span class="tag-text">
						<span class="REPLACE">Tag Text</span>
					</span>
					&nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
				</span>

				
					<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php 
						$abilabol_tag = array(
							'tag-default',
							'tag-primary',
							'tag-secondary',
							'tag-accent',
							'tag-neutral',
							'tag-success',
							'tag-caution',
							'tag-error',
							'tag-intensity-1',
							'tag-intensity-2',
							'tag-intensity-3',
							'tag-intensity-4',
							'tag-intensity-5',
						);
						?>
						<?php for($i=0; $i<count($abilabol_tag); $i++){ ?>
							<?php $j = 1;?>
							<span class="p tag <?=$abilabol_tag[$i];?>">
								<span class="tag-text">
									<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
								</span>
								&nbsp;<a href="#" onclick="REPLACEfnToDeleteDisTag"><i class="symbol symbol-close"></i></a>
							</span>
						<?php } ?>
			</div>

	</div>
</div>