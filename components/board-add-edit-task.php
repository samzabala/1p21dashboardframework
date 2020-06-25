<!-- 

@NOTE change task-edit-REPLACEwithTaskId to task-new if task to edit is new/

 -->

<div id="task-edit-REPLACEwithTaskId" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-max-width="1150px">


	<form method="get" class="dashboard-board-column-layout-container  background-theme-contrast">
		<div class="dashboard-board-partition dashboard-board-column-layout-main  background-theme">
			<div class="container">


				<!-- Title -->
					<div class="task-heading">
						<div class="input-wrapper p input-wrapper-block input-wrapper-vertical">
							<label for="task-title" class="input-label sr-only">Title</label>
							<input type="text" placeholder="Enter title" id="task-title" name="task-title" class="input-no-shadow input-round input input-single-line input-large task-title">
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
						<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y">
							<div class="flex-col-xs-12">
								<div class="input-wrapper p input-wrapper-vertical input-wrapper-block">
									<div class="input-toggle">
										<input type="checkbox" class="input" name="task-enable-delay" id="task-enable-delay">
										<label for="task-enable-delay" class="input-label input-toggle-label">
											Delay task requests
										</label>
									</div>
								</div>
							</div>

							<div class="flex-col-xs-12  flex-col-md-8">
								
								<div class="input-wrapper p input-wrapper-block input-wrapper-horizontal">
									<button class="btn btn-no-shadow btn-default btn-round btn-block justify-content-space-between" data-toggle="dropdown">

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
							<a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small btn-round">Add Attachment <i class="symbol symbol-plus"></i></a>
						</div>
					</div>

					
						<!-- @if attachments have rows -->
							<?php app_get_component('components/attachment-grid-modify'); ?>


							
						
							<?php app_get_component('components/attachment-field'); ?>
						
						
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
	</form>

</div>