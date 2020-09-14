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


		<!-- FOLLOWERS ?? -->

			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Followers</h5>
					</div>
					<div class="flex-child">
						<input id="<?=$args['post']?>-followers-id" name="<?=$args['post']?>-followers-id" type="hidden" />
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Followers <i class="symbol symbol-edit"></i></a>
						<?php app_get_component('components/modal-workflow-edit-users-multiple'); ?>
					</div>
				</div>
			</div>
			
			<div class="post-followers">
						
					<?php app_get_component('components/profile-named-for-edit') ?>
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
						<?php for($i=1; $i<=3; $i++){ ?>
					<?php app_get_component('components/profile-named-for-edit') ?>
						<?php } ?>
				</div>





		<?php if( $args['post'] == 'task' ): ?>
		<hr>

		<!-- Notes -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Notes</h5>
					</div>
					<div class="flex-child">
						<input id="<?=$args['post']?>-wiki-id" name="<?=$args['post']?>-wiki-id" type="hidden" />
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit <i class="symbol symbol-edit"></i></a>
						<?php app_get_component('components/modal-workflow-edit-wiki-multiple',null,false,array('post'=>$args['post'])); ?>
					</div>
				</div>
			</div>
		

				<!-- if has docs -->
					<ul class="post-note unstyled">
						<li>
							<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
								<div class="flex-col-xs-9">
									<span class="note-title">Documentation title</span>
								</div>

								<div class="flex-col-xs-3 text-align-right">
									<a href="#" class="btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
								</div>
							</div>
						</li>
						
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<li>
									<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
										<div class="flex-col-xs-9">
											<span class="note-title">Documentation title</span>
										</div>

										<div class="flex-col-xs-3 text-align-right">
											<a href="#" class="btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
										</div>
									</div>
								</li>
							<?php } ?>
					</ul>
		<?php endif; ?>


		<?php if( $args['post'] == 'task' ): ?>



			<hr>
			<!-- REMINDERS -->
				<div class="h5 no-margin-y">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
						<div class="flex-child">
							<h5 class="input-label">Reminders</h5>
						</div>
						<div class="flex-child">
							<input id="<?=$args['post']?>-followers-id" name="<?=$args['post']?>-followers-id" type="hidden" />
							<a href="#" data-toggle="modal" data-modal-title="Add reminder" class="btn btn-primary-outline btn-small">Reminder <i class="symbol symbol-plus"></i></a>
							<?php app_get_component('components/modal-workflow-edit-reminder'); ?>
						</div>
					</div>
				</div>


				<!-- if has reminders -->
					<div class="post-reminders">
						<?php app_get_component('components/block-reminder-for-edit',null,false,array('post'=>$args['post'])); ?>
					
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<?php app_get_component('components/block-reminder-for-edit',null,false,array('post'=>$args['post'])); ?>
							<?php } ?>
					</div>
		<?php endif; ?>
	</div>
</div>