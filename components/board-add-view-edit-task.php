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
						<!-- @if attachments have rows -->
							<div class="task-attachments flex-grid justify-content-space-between">
								<div class="flex-col-xs-12">
									<div class="cf">

										<h3 class="float-left">
											Attachments
										</h3>

										<a href="#" class="btn btn-link"><i class="symbol symbol-download"></i> Download All</a>
									</div>
								</div>
								<!-- @LOOP component .flex-child  -->
								<div class="flex-child">

									<?php app_get_component('components/asset'); ?>
								</div>

								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($j=1; $j<=2; $j++){ ?>
										
										<div class="flex-child">
											<?php app_get_component('components/asset'); ?>
										</div>
									<?php } ?>
							</div>


					<!-- Comments -->
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
								<label for="" class="sr-only"></label>
								<input type="text" placeholder="Enter title" name="task-title" class="input-no-shadow input-round input input-single-line input-large task-title">
							</div>
							




						</div>
						
					<!-- Description -->
						<div class="task-description">
							<!-- @NOTE use tinymce here -->
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">


								<label for="" class="sr-only"></label>
								<textarea name="task-description" id="" cols="30" rows="10" class="input-no-shadow input input-multiple-line"></textarea>
							</div>
						</div>


					<!-- Attachments -->


					<!-- Comments -->
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