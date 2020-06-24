<div id="board-task" data-board-align="left" class="board" data-board-classes="dashboard-board-column-layout" data-board-max-width="1150px">



	<!-- @IF state is view -->
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

										<?php app_get_component('components/_DEMO-html-markup'); ?>
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
								<div class="flex-grid justify-content-space-between">
									
									<!-- @LOOP component .flex-child  -->
										<div class="flex-child">
											<?php app_get_component('components/asset'); ?>
										</div>

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<6; $i++){ ?>
												
												<div class="flex-child">
													<?php app_get_component('components/asset'); ?>
												</div>
											<?php } ?>

								</div>

							<!-- @else no attachments -->
								<p class="color-neutral font-style-italic">No attachments available</p>
						</div>

					<!-- Comments -->
						<div class="task-comments">
								
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

	<!-- @IF state is edit/add-->
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

								<div class="flex-col-xs-12  flex-col-md-9">
									
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
										<div class="dropdown no-padding">

											<input type="text" class="input-calendar">
										</div>
									</div>
								</div>
								<div class="flex-col-xs-12  flex-col-md-3">

								</div>
							</div>
						</div>


					<!-- Attachments -->
						<div class="task-attachments">

							<!-- temporary fix while figuring out what the fuck -->
							<div class="flex-grid flex-grid-no-gutter justify-content-space-between align-items-center">
								<div class="flex-col-xs-6">
									<h4 class="no-margin-y">
										Attachments
									</h4>
								</div>
								<div class="flex-col-xs-6 text-align-right">
								<!--
									@note
									
								-->
									<a href="#" onClick="REPLACEfnToTriggertaskAttachmentsToAdd(event)" class="btn btn-primary-outline btn-small btn-round">Add Attachment <i class="symbol symbol-plus"></i></a>
								</div>
								
								<div class="flex-col-xs-12">
									<div class="zone zone-primary">

										<input multiple name="task-attachments-to-add" type="file" class="input input-single-line" placeholder="Add Attachments">
										<span class="zone-text">
											Drag and drop attachments here
										</span>
									</div>
								</div>

								<!-- @NOTE not sure if `.zone` setup may work out for attachments, but just in case not, use this alternative. replace its closest `.flex-col-xs-12` -->
								<!--
									<div class="flex-col-xs-12">
										<div class="input-wrapper input-wrapper-block p">
											<input multiple name="task-attachments-to-add" type="file" class="input input-single-line" placeholder="Add Attachments">
										</div>
									</div>
								-->
							</div>

							<!-- @if attachments have rows -->
								<div class="flex-grid justify-content-space-between">

									<input type="hidden"  name="task-attachments-to-delete" />

									<!-- @LOOP component .flex-child  -->
										<div class="flex-child">
											<?php app_get_component('components/asset'); ?>
										</div>

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($j=1; $j<6; $j++){ ?>
												
												<div class="flex-child">
													<?php app_get_component('components/asset'); ?>
												</div>
											<?php } ?>
								</div>
							
							
							
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