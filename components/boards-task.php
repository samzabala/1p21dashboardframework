
<!-- VIEW  -->
	<div id="task-view-REPLACEwithTaskId" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-max-width="1240px">

		<div class="dashboard-board-column-layout-container  background-theme-contrast">
			<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
				<div class="container">

					<!-- Title -->
						<div class="task-heading">

							<!-- @IF state is view -->
							<h1 class="task-title no-margin-top">
								<span class="replace">Project Title</span>
							</h1>

							<p class="color-neutral no-margin-bottom">
								<span class="task-id">
									Task #<span class="REPLACE">69</span>
								</span>
								|
								<span class="task-meta">
									Created by
									<a href="<?=app_create_link(array('template'=>'profile')) ?>" class="color-inherit"><span class="REPLACE">Profile Name</span></a>
									on <span class="task-date"><span class="REPLACE">4/40/69</span></span>
								</span>
							</p>

						</div>
						
					<!-- Description -->
						<div class="task-description">

							<!-- @IF there is a description -->

								<!-- @PLACEHOLDER delete when ready -->
									<div class="REPLACE">
										<div class="overflow-hidden" style="height:63em">

											<?php app_get_component('components/_DEMO-html-markup'); ?>
										</div>

									</div>

								<!--@ELSE no description  -->
									<p class="color-neutral font-style-italic">No description available</p>

							<hr>
						</div>


					<!-- Attachments -->
						
						<div class="task-attachments">

							<div class="flex-grid flex-grid-no-gutter justify-content-space-between align-items-center">
								<div class="flex-col-xs-6">
									<h4 class="no-margin-y">
										Attachments
									</h4>
								</div>
								<div class="flex-col-xs-6 text-align-right">
									<a href="#" class="task-attachments-downloader" ><i class="symbol symbol-download"></i> Download All</a>
								</div>
							</div>

							<!-- @if attachments have rows -->
								<?php app_get_component('components/attachment-grid-view'); ?>

							<!-- @else no attachments -->
								<p class="color-neutral font-style-italic">No attachments available</p>




							<hr>
						</div>

					<!-- Comments -->
						<div class="task-comments">
							<h4>
								Activities &amp; Comments
							</h4>

							<?php app_get_component('components/comment-form'); ?>


							<!-- @LOOP component comment-row  -->
							<?php app_get_component('components/comment-row'); ?>

							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<9; $i++){ ?>
									<?php app_get_component('components/comment-row'); ?>
								<?php } ?>

						</div>
				</div>
			</div>
			<div class="dashboard-board-partition dashboard-board-column-layout-side">
				<div class="container container-wide">
					<div class="module-grid">

						<!-- Toolbar  -->
						<?php app_get_component('components/toolbar-side') ?>



						<!-- Team Info -->
						<?php app_get_component('components/module-side-team-view') ?>



						<!-- Time Tracker -->
						<?php app_get_component('components/module-side-time-view') ?>



						<!-- Categries Boards/Tags -->
						<?php app_get_component('components/module-side-flux-view') ?>



						<!-- Followers/Wiki/Reminders -->
						<?php app_get_component('components/module-side-followers-view') ?>
					</div>

				</div>
			</div>
		</div>

	</div>

<!-- EDIT ADD -->

<!-- 

@NOTE change task-editor-REPLACEwithTaskId to task-new if task to edit is new/

 -->

<div id="task-editor-REPLACEwithTaskId" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-max-width="1240px">


	<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
		<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
			<div class="container">


				<!-- Title -->
					<div class="task-heading">
						<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
							<label for="task-title" class="input-label sr-only">Title</label>
							<input type="text" placeholder="Enter title" id="task-title" name="task-title" class="input-no-shadow  input input-single-line input-large task-title">
						</div>
						




					</div>
					
				<!-- Description -->
					<div class="task-description">
						<!-- @NOTE use tinymce here -->
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">


							<label for="task-description" class="input-label sr-only">Description</label>
							<textarea name="task-description" id="task-description" cols="30" rows="10" class="input-no-shadow input input-multiple-line">use tinymce in place</textarea>
						</div>
					</div>

					<div class="task-time-meta">
						<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
							<div class="input-toggle">
								<input type="checkbox" class="input" name="task-enable-delay" id="task-enable-delay">
								<label for="task-enable-delay" class="input-label input-toggle-label">
									Delay task requests
								</label>
							</div>
						</div>

						<!-- 

						@NOTE
							.flex-grid
								classes to add
									`input-disabled` => when input[name=task-enable-delay] is checked
						-->
						<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
							<div class="flex-col-xs-12  flex-col-md-8">
								<div class="input-wrapper p input-wrapper-block input-wrapper-horizontal">
									<button class="btn  btn-default  btn-block justify-content-space-between" data-toggle="dropdown">

									<!-- @NOTE @DYNAMIC : update text to the value set to tthe input field -->
										<span class="task-delay-date-value">
											<span class="REPLACE">
												Saturday, April 20, 2069
											</span>
										</span>

										<i class="symbol symbol-arrow-down color-primary"></i>
									</button>
									<div class="dropdown dropdown-top-flush dropdown-left no-padding">
										<input type="text" class="input-calendar" name="task-delay-date" id="task-delay-date">
									</div>
								</div>
							</div>
							<div class="flex-col-xs-12  flex-col-md-4">

								<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
									<label for="task-title" class="input-label sr-only">Title</label>
									<input type="time" placeholder="Enter title" id="task-title" name="task-title" class="input-no-shadow input-round input input-single-line task-title">
								</div>
							</div>
						</div>



						<hr>
					</div>


				<!-- Attachments -->
					<div class="task-attachments">
					<div class="flex-grid flex-grid-no-gutter justify-content-space-between align-items-center">


						<div class="flex-col-xs-6">
							<h4 class="no-margin-y">
								Attachments
							</h4>
						</div>


						<div class="flex-col-xs-6 text-align-right">
							<a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small ">Add Attachment <i class="symbol symbol-plus"></i></a>
						</div>
					</div>

					
						<!-- @if attachments have rows -->
							<?php app_get_component('components/attachment-grid-modify'); ?>


							
						
							<?php app_get_component('components/attachment-field'); ?>
						
						
					</div>
					
			</div>
		</div>
		<div class="dashboard-board-partition dashboard-board-column-layout-side">
			<div class="container container-wide">

				<!-- Toolbar  -->
				<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact justify-content-space-between">
					<div class="flex-child">
						<button type="submit" class="btn btn-primary btn-block-mobile">Create Task</button>
						<button data-toggle="board" href="#task-view-REPLACEwithTaskId" class="btn btn-neutral-outline btn-block-mobile">Cancel</button>
					</div>
					<div class="flex-child">
						<button data-toggle="board" href="#" class="btn btn-theme-polar btn-symbol"><i class="symbol symbol-delete"></i></button>
					</div>
				</div>

				<div class="module-grid">

					<!-- Toolbar  -->
					<?php app_get_component('components/toolbar-side') ?>



					<!-- Team Info -->
					<?php app_get_component('components/module-side-team-edit') ?>



					<!-- Time Tracker -->
					<?php app_get_component('components/module-side-time-edit') ?>



					<!-- Categries Boards/Tags -->
					<?php app_get_component('components/module-side-flux-edit') ?>



					<!-- Followers/Wiki/Reminders -->
					<?php app_get_component('components/module-side-followers-edit') ?>
				</div>

			</div>
		</div>
	</form>

</div>