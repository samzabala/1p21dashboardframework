<div class="module">
	<div class="module-content">


		<!-- FOLLOWERS -->
			<div class="h5 no-margin-top">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="no-margin-y">Followers</h5>
					</div>
					<div class="flex-child">
						<div class="btn-group btn-group-toggle btn-group-horizontal btn-group-toggle-allow-no-active">

						<!-- @NOTE
							.btn
								classes to add
									if user follows task => `active`
									if user doesnt follow task => ``
					-->
							<a href="#" data-board-title="Add Time Entry" class="btn btn-primary-outline btn-small">
								<span class="hide-toggle">Follow</span>
								<i class="hide-toggle symbol symbol-plus"></i>

								<span class="hide-not-toggle only-not-hover">Followed</span>
								<i class="hide-not-toggle only-not-hover symbol symbol-check"></i>

								<span class="hide-not-toggle only-hover">Unfollow</span>
								<i class="hide-not-toggle only-hover symbol symbol-minus"></i>
							</a>
						</div>
						&nbsp;
						<a href="#task-side-followers-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>


		
			
			<div id="task-side-followers-view" class="accordion open" data-accordion-change-hash="false">
				<!-- if has followers -->
					<div class="task-followers">
						
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



		<!-- WIKIS N HOW TOS -->
			<div class="h5 no-margin-y">
				<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
					<div class="flex-child">
						<h5 class="no-margin-y">Wiki/How-Tos</h5>
					</div>
					<div class="flex-child">
						<a href="#task-side-wiki-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
					</div>
				</div>
			</div>

		
			
			<div id="task-side-wiki-view" class="accordion open" data-accordion-change-hash="false">

				<!-- if has docs -->
					<ul class="task-wiki unstyled">
						<li>
						<!-- @NOTE not sure where this link goes to yet -->
							<a class="wiki-title" href="<?= app_create_link(array('template'=>'doc')) ?>"><span class="REPLACE">Documentation title</span></a>
						</li>
						
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<li>
								<!-- @NOTE where this link goes to yet -->
									<a class="wiki-title" href="<?= app_create_link(array('template'=>'doc')) ?>"><span class="REPLACE">Documentation title</span></a>
								</li>
							<?php } ?>
					</ul>
				<!-- @else -->
					<p>
						<span class="color-neutral font-style-italic">
							No documentations available.
						</span>

						<!-- @if user can edit task -->
							<br>
							<a  href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Edit task to add documentation.</a>
					</p>
			</div>



			<hr>



			<!-- REMINDERS -->
				<div class="h5 no-margin-top">
					<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
						<div class="flex-child">
							<h5 class="no-margin-y">Reminders</h5>
						</div>
						<div class="flex-child">
							<a href="#task-side-reminders-view" data-toggle="accordion" class="border-color-transparent btn no-padding-x btn-no-shadow btn-small color-neutral color-primary-hover open"><i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></a>
						</div>
					</div>
				</div>


				
				<div id="task-side-reminders-view" class="accordion open" data-accordion-change-hash="false">

					<!-- if has reminders -->
						<div class="task-reminders">
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

							<!-- @if user can edit task -->
								<br>
								<a  href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Edit task to add reminders.</a>
						</p>
				</div>
	</div>
</div>