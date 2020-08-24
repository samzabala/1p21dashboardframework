<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);


?>
<div class="module" 
	<?php if(FWAPPS_TEMPLATE == 'post-edit'): //only when in its own basic page ?>
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



		<hr>



		<!-- WIKIS N HOW TOS -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Wiki/How-Tos</h5>
					</div>
					<div class="flex-child">
						<input id="<?=$args['post']?>-wiki-id" name="<?=$args['post']?>-wiki-id" type="hidden" />
						<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit <i class="symbol symbol-edit"></i></a>
						<?php app_get_component('components/modal-workflow-edit-wiki-multiple'); ?>
					</div>
				</div>
			</div>
		

				<!-- if has docs -->
					<ul class="post-wiki unstyled">
						<li>
							<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
								<div class="flex-col-xs-9">
									<span class="wiki-title">Documentation title</span>
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
											<span class="wiki-title">Documentation title</span>
										</div>

										<div class="flex-col-xs-3 text-align-right">
											<a href="#" class="btn btn-symbol btn-small btn-link" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
										</div>
									</div>
								</li>
							<?php } ?>
					</ul>



			<hr>


		<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
		<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
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
						<?php app_get_component('components/block-reminder-for-edit'); ?>
					
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<?php app_get_component('components/block-reminder-for-edit'); ?>
							<?php } ?>
					</div>
		<?php endif; ?>
	</div>
</div>