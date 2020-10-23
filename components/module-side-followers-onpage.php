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
						<form action="" class="display-inline">
							<!-- HIDDEN INPUT TYPES HERE -->
							<div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">

							<!-- @NOTE
								.btn
									classes to add
										if user follows <?=$args['post']?> => `active`
										if user doesnt follow <?=$args['post']?> => ``
							-->
								<button type="submit" class="btn btn-primary-outline btn-small pointer-reference">
									<span class="hide-toggle">Follow</span>
									<i class="hide-toggle symbol symbol-plus"></i>

									<span class="hide-not-toggle hide-idle">Followed</span>
									<i class="hide-not-toggle hide-idle symbol symbol-check"></i>

									<span class="hide-not-toggle only-idle">Unfollow</span>
									<i class="hide-not-toggle only-idle symbol symbol-minus"></i>
								</button>
							</div>
						</form>


						<a href="#<?=$args['post'] ?>-side-followers-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

			<div id="<?=$args['post'] ?>-side-followers-onpage" class="accordion open" data-accordion-change-hash="false">

				<!-- @if has followers -->
					<div class="post-followers">
								
						<?php app_get_component('components/profile-named-for-onpage') ?>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
						<?php app_get_component('components/profile-named-for-onpage') ?>
							<?php } ?>
					</div>

				<!-- @else -->
				<p class="color-neutral font-style-italic">
					No followers yet.
				</p>



				<!-- @if user can edit -->
					<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Edit Followers <i class="symbol symbol-edit"></i></a>
					<?php app_get_component('components/modal-workflow-edit-users-multiple','',false,array(
						'post'=>$args['post'],
						'is_in_onpage' => true,
					)); ?>

				

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
						<!-- @if user can edit -->
							<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">
								Edit Notes <i class="symbol symbol-pencil"></i>
							</a>
							<?php app_get_component('components/modal-workflow-edit-wiki-multiple',null,false,array(
								'post'=>$args['post'],
								'is_in_onpage' => true,
							)); ?>

						<a href="#<?=$args['post'] ?>-side-notes-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>


			<div id="<?=$args['post'] ?>-side-notes-onpage" class="accordion open" data-accordion-change-hash="false">
				
				<!-- if has docs -->
					<ul class="post-note unstyled">
						<li class="pointer-reference no-margin-y">
							<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
								<div class="flex-col-xs-9">
									<a
										href="<?=app_create_link(array('template'=>'note')) ?>"
										class="note-title btn btn-link no-shadow no-padding-x font-weight-inherit">
										<span class="REPLACE">
											Documentation title
										</span>
									</a>
								</div>

								<div class="flex-col-xs-3 text-align-right">
									<!-- @if user can edit -->
										<a href="#" class="btn btn-symbol btn-small btn-link hide-idle" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
								</div>
							</div>
						</li>
						
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<li class="pointer-reference no-margin-y">
									<div class="flex-grid flex-grid-compact flex-grid-fixed align-items-center flex-grid-no-gutter-y">
										<div class="flex-col-xs-9">
											<a
												href="<?=app_create_link(array('template'=>'note')) ?>"
												class="note-title btn btn-link no-shadow no-padding-x font-weight-inherit">
												<span class="REPLACE">
													Documentation title
												</span>
											</a>
										</div>

										<div class="flex-col-xs-3 text-align-right">
											<!-- @if user can edit -->
												<a href="#" class="btn btn-symbol btn-small btn-link hide-idle" onclick="REPLACEwithFnToDeleteSetProfile"><i class="symbol symbol-close"></i></a>
										</div>
									</div>
								</li>
							<?php } ?>
					</ul>

				<!-- @else -->
					<p class="color-neutral font-style-italic">
						No documentations added.
					</p>
			</div>
		

				
		<?php endif; ?>


		<hr>
		<!-- REMINDERS -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="input-label">Reminders</h5>
					</div>
					<div class="flex-child">
						<a href="#" data-toggle="modal" data-modal-title="Add reminder" class="btn btn-primary-outline btn-small">Reminder <i class="symbol symbol-plus"></i></a>
						<?php app_get_component('components/modal-workflow-edit-reminder',null,false,array(
							'post'=>$args['post'],
							'is_in_onpage' => true,
						)); ?>
						<a href="#<?=$args['post'] ?>-side-reminders-onpage" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

			<div id="<?=$args['post'] ?>-side-reminders-onpage" class="accordion open" data-accordion-change-hash="false">
				<!-- if has reminders -->
					<br>
					<div class="post-reminders">
						<?php app_get_component('components/block-reminder-for-onpage',null,false,array(
							'post'=>$args['post']
						)); ?>
					
						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<?php app_get_component('components/block-reminder-for-onpage',null,false,array(
									'post'=>$args['post']
								)); ?>
							<?php } ?>
					</div>

				<!-- @else -->
					<p class="color-neutral font-style-italic">
						No reminders set.
					</p>
			</div>


			
	</div>
</div>