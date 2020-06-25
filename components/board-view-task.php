<div id="task-view-REPLACEwithTaskId" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-max-width="1150px">

	<div id="task-view-REPLACEwithTaskId" class="dashboard-board-column-layout-container  background-theme-contrast">
		<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
			<div class="container">

				<!-- Title -->
					<div class="task-heading">

						<!-- @IF state is view -->
						<h1 class="task-title no-margin-top">
							<span class="replace">Project Title</span>
						</h1>

						<p class="color-neutral">
							<span class="task-id">
								Task #<span class="REPLACE">69</span>
							</span>
							|
							<span class="task-meta">
								Created by
								<a href="<?=app_create_link(array('template'=>'profile')) ?>"><span class="REPLACE">Profile Name</span></a>
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
			<div class="container">
				<!-- Toolbar  -->



				<!-- Team Info -->



				<!-- Time Tracker -->



				<!-- Categries Boards/Tags -->



				<!-- Followers/Wiki/Reminders -->

			</div>
		</div>
	</div>

</div>