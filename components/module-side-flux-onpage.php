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
	<div class="module-content no-padding-y">
	
		<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
		<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
			<!-- WORKFLUX BOARDS -->
				<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
					<div class="grid-col">
						<h5 class="input input-label">Workflux Boards</h5>
					</div>
					<div class="grid-col">

						<!-- @if user can edit -->
							<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Board <i class="symbol symbol-plus"></i></a>
								<?php app_get_component('components/modal-workflow-edit-workflux',null,false,array(
									'post' => $args['post'],
									'is_in_onpage' => true,
								)); ?>
							
						<a href="#<?=$args['post'] ?>-side-flux-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
				<div id="<?=$args['post'] ?>-side-flux-onpage" class="accordion open" data-accordion-change-hash="false">
					<div class="post-workflux">
						<!-- @if has worflux boards linked to -->
						<!-- @LOOP component -->
							<?php app_get_component('components/profile-workflux-titled-for-onpage',null,false,array(
									'post' => $args['post'],
									'is_in_onpage' => true,
								)) ?>
								<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<2; $i++){ ?>
									<?php app_get_component('components/profile-workflux-titled-for-onpage',null,false,array(
									'post' => $args['post'],
									'is_in_onpage' => true,
								)); ?>
								<?php } ?>

						
						<!-- @else -->
							<p class="color-neutral font-style-italic">
								No associated workflux boards.
							</p>
					</div>
				</div>

				
			<hr class="no-margin-y">
		<?php endif; ?>


		<!-- TAGS -->
			<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
				<div class="grid-col">
					<h5 class="input input-label">Labels &amp; Tags</h5>
				</div>
				<div class="grid-col">
					<!-- @if user can edit -->
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">
							Edit Tags <i class="symbol symbol-pencil"></i>
						</a>
						<?php app_get_component('components/modal-workflow-edit-tags',null,false,array(
							'post' => $args['post'],
							'is_in_onpage' => true,
						)); ?>
					
					<a href="#<?=$args['post'] ?>-side-tags-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					
				</div>
			</div>

			<div id="<?=$args['post'] ?>-side-tags-onpage" class="accordion open" data-accordion-change-hash="false">
				<!-- @if has tags -->
					<div class="post-tags p">
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


						<span class="p tag tag-primary pointer-reference">
							<a href="<?=app_create_link(array('template'=>'search')) ?>" class="tag-text">
								<span class="REPLACE">Tag Text</span>
							</a>
							<!-- @if user can edit -->
								<form action="" class="sr-only" onsubmit="REPLACEfnToDeleteDisTag">
									<!-- @hidden input here -->
								</form>
								
								&nbsp;<a href="#" onclick="REPLACEfnToTriggerDeleteDisTagForm"><i class="hide-idle symbol symbol-close"></i></a>
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
									<span class="p tag <?=$abilabol_tag[$i];?> pointer-reference">
										<a href="<?=app_create_link(array('template'=>'search')) ?>" class="tag-text">
											<span class="REPLACE">Tag Te<?php while($j <= $i): echo 'e'; $j++; endwhile; ?>xt</span>
										</a>
										
										<!-- @if user can edit -->
											<form action="" class="sr-only" onsubmit="REPLACEfnToDeleteDisTag">
												<!-- @hidden input here -->
											</form>
											
											&nbsp;<a href="#" onclick="REPLACEfnToTriggerDeleteDisTagForm"><i class="hide-idle symbol symbol-close"></i></a>
									</span>
								<?php } ?>
					</div>
				<!-- @else -->
					<p class="color-neutral font-style-italic">
						No set tags.
					</p>
			</div>
				

	</div>
</div>