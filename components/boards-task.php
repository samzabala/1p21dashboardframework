

<!-- VIEW  -->
<!-- @NOTE data-board-resize feature will be built after for building ya boi faster -->
	<div id="task-REPLACEwithPostTypeID-view" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true" data-board-max-width="1240px">

		<div class="dashboard-board-column-layout-container  background-theme-contrast">
			<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
				<div class="container">

					<!-- Title -->
						<div class="task-heading">

							<!-- @IF state is view -->
							<h1 class="task-title no-margin-top">
								<span class="replace">Project Title</span>
							</h1>

							<p class="color-neutral">
								Task #<span class="task-id"><span class="REPLACE">69</span></span>
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
										<div>

											<?php app_get_component('components/_DEMO-html-markup'); ?>
										</div>

									</div>

								<!--@ELSE no description  -->
									<p class="color-neutral font-style-italic">No description available</p>

						</div>


					<hr class="no-margin-bottom">

					<!-- Attachments -->
						
						<div class="task-attachments">

							<div class="flex-grid flex-grid-compact justify-content-space-between align-items-center">
								<div class="flex-col-xs-6">
									<h4 class="no-margin-y">
										Attachments
									</h4>
								</div>
								<!-- @if there are attachemtns -->
									<div class="flex-col-xs-6 text-align-right">
										<a href="#" class="task-attachments-downloader" ><i class="symbol symbol-download"></i> Download All</a>
									</div>
							</div>

							<!-- @if attachments have rows -->
								<?php app_get_component('components/attachment-grid-view'); ?>

							<!-- @else no attachments -->
								<p class="color-neutral font-style-italic">No attachments available</p>

						</div>

					<hr class="no-margin-bottom">
					<!-- Comments -->

						<div class="task-comments-form" id="task-comments-form">
							<h4>Activities &amp; Comments</h4>

							<?php app_get_component('components/comment-form'); ?>
						</div>
						<!-- @if comments -->
							<div class="task-comments">
								<!-- @LOOP component comment-row  -->
								<?php app_get_component('components/comment-row'); ?>

								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<9; $i++){ ?>
										<?php app_get_component('components/comment-row'); ?>
									<?php } ?>

							</div>

						<!-- @else no comments -->
							<p class="color-neutral font-style-italic">No comments yet.</p>
				</div>
			</div>
			<div class="dashboard-board-partition dashboard-board-column-layout-side">
				<div class="container container-wide">
					<div class="module-grid">
						<!-- Time Tracker -->
						<?php app_get_component('components/toolbar-side-view') ?>

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

<!-- EDIT -->

<!-- 

@NOTE change `task-REPLACEwithPostTypeID-edit` to `task-new` if task to edit is new/

For board to render for new tasks, feel free to copy paste if needed. This board will have the exact markup structure but attributes will change, particularly these on the `.board` block:
		id => `task-new-edit` // feel free to change as fit

		There will be comments along the way as well
 -->

<div id="task-REPLACEwithPostTypeID-edit" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-max-width="1240px">
	<?php app_get_component('components/boards-task-form') ?>
</div>



<!-- ADD -->
<div id="task-new" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-resize="true"  data-board-max-width="1240px">

	<!-- Shares the same markup structure almost with edit. commented out so front end demo can work but you get the picture -->
	<?php //app_get_component('components/boards-task-form') ?>


				<!-- @PLACEHOLDER -->
					<pre>DO NOT COPY THIS SECTION<br><br><br>View <a href="#task-REPLACEwithPostTypeID-edit" data-toggle="board">Form render on edit board</a></pre>

</div>