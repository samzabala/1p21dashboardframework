<?php
$defs = array(
	//@param post - type of single achuchuchu
	'post' => 'task', //project,client,note,whatever
);

$args = app_parse_args($data,$defs);

?>
<div class="module"
	data-grid-area-md="auto / side"
>
	<div class="module-content">


		<!-- FOLLOWERS -->
			<div class="h5 no-margin-top">
				<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
					<div class="grid-col">
						<h5 class="no-margin-y">Followers</h5>
					</div>
					<div class="grid-col">
						<div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">

						<!-- @NOTE
							.btn
								classes to add
									if user follows <?=$args['post']?> => `active`
									if user doesnt follow <?=$args['post']?> => ``
					-->
							<a href="#" data-board-title="Add Time Entry" class="btn btn-primary-outline btn-small pointer-reference">
								<span class="hide-toggle">Follow</span>
								<i class="hide-toggle symbol symbol-plus"></i>

								<span class="hide-not-toggle only-not-hover">Followed</span>
								<i class="hide-not-toggle only-not-hover symbol symbol-check"></i>

								<span class="hide-not-toggle only-hover">Unfollow</span>
								<i class="hide-not-toggle only-hover symbol symbol-minus"></i>
							</a>
						</div>
						&nbsp;
						<a href="#post-side-followers-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>


		
			
			<div id="post-side-followers-view" class="accordion open" data-accordion-change-hash="false">
				<!-- if has followers -->
					<div class="<?=$args['post']?>-followers">
						
						<?php app_get_component('components/profile-named') ?>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
						<?php app_get_component('components/profile-named') ?>
							<?php } ?>
					</div>
				<!-- @else -->
					<p>
						<span class="color-neutral font-style-italic">
							No followers yet.
						</span>
					</p>
			</div>



		<hr>

		<?php if($args['post'] == 'task'): ?>

			<!-- Notes -->
				<div class="h5 no-margin-y">
					<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
						<div class="grid-col">
							<h5 class="no-margin-y">Notes</h5>
						</div>
						<div class="grid-col">
							<a href="#post-side-note-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>
				</div>

			
				
				<div id="post-side-note-view" class="accordion open" data-accordion-change-hash="false">

					<!-- if has docs -->
						<ul class="<?=$args['post']?>-note unstyled">
							<li>
							<!-- @NOTE not sure where this link goes to yet -->
								<a class="note-title" href="<?= app_create_link(array('template'=>'note-view')) ?>"><span class="REPLACE">Documentation title</span></a>
							</li>
							
							
								<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<=3; $i++){ ?>
									<li>
									<!-- @NOTE where this link goes to yet -->
										<a class="note-title" href="<?= app_create_link(array('template'=>'note-view')) ?>"><span class="REPLACE">Documentation title</span></a>
									</li>
								<?php } ?>
						</ul>
					<!-- @else -->
						<p>
							<span class="color-neutral font-style-italic">
								No documentations available.
							</span>

							<!-- @if user can edit <?=$args['post']?> -->
								<br>
								<a
									href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
								>Edit <?=$args['post']?> to add documentation.</a>
						</p>
				</div>



				<hr>

			<?php endif; ?>

			<!-- REMINDERS -->
				<div class="h5 no-margin-top">
					<div class="grid grid-flex grid-compact grid-constricted-y justify-content-space-between align-items-center">
						<div class="grid-col">
							<h5 class="no-margin-y">Reminders</h5>
						</div>
						<div class="grid-col">
							<a href="#post-side-reminders-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>
				</div>


				
				<div id="post-side-reminders-view" class="accordion open" data-accordion-change-hash="false">

					<!-- if has reminders -->
						<div class="<?=$args['post'] ?>-reminders">
							<?php app_get_component('components/block-reminder'); ?>
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<=3; $i++){ ?>
									<?php app_get_component('components/block-reminder'); ?>
								<?php } ?>
						</div>
					<!-- @else -->
						<p>
							<span class="color-neutral font-style-italic">
								No reminders set.
							</span>


							<!-- @TODO finalize apporpriate or remove uneeded conditional statement here -->
							<?php if($args['post'] == 'task' || $args['post'] == 'project'): ?>
								<!-- @if user can edit <?=$args['post'] ?> -->
									<br>
									<a
										href="<?=app_create_link(array('template'=>$args['post'].'-edit')) ?>"
									>Edit <?=$args['post'] ?> to add reminders.</a>
							<?php endif; ?>
							
						</p>
				</div>
	</div>
</div>