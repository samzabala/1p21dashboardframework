<div class="module">
	<div class="module-content">


		<!-- FOLLOWERS ?? -->

			<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
				<div class="flex-child">
					<h5 class="input-label">Followers</h5>
				</div>
				<div class="flex-child">
					<input id="REPLACEMODE-task-followers-id" name="REPLACEMODE-task-followers-id" type="hidden" />
					<a href="#" data-toggle="modal" class="btn btn-primary-outline btn-small">Followers <i class="symbol symbol-edit"></i></a>
					<?php app_get_component('components/modal-users-multiple'); ?>
				</div>
			</div>
			<div class="task-followers">
						
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
							<a data-toggle="modal" href="#">Documentation title</a>
							<?php app_get_component('components/_DEMO-modal-placeholder') ?>
						</li>
						
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=3; $i++){ ?>
								<li>
								<!-- @NOTE where this link goes to yet -->
									<a data-toggle="modal" href="#">Documentation title</a>
									<?php app_get_component('components/_DEMO-modal-placeholder') ?>
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
				<div class="h5 no-margin-y">
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
							<?php app_get_component('components/block-reminder-for-edit'); ?>
						
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<=3; $i++){ ?>
									<?php app_get_component('components/block-reminder-for-edit'); ?>
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