

<div class="module-grid">
<!-- Heading + Info -->
	<div class="module">
		<div class="module-content">
			<!-- Heading -->
				<div class="project-heading">

					<h1 class="task-title no-margin-top">
						<span class="REPLACE">Project Title</span>
					</h1>


					<p class="color-neutral">
						<span class="project-name"><span class="REPLACE">Dental on Central (DEC)</span></span>
						|
						Project #<span class="project-id"><span class="REPLACE">0000</span></span>
						|
						<span class="project-meta">
							Created by
							<a href="<?=app_create_link(array('template'=>'profile')) ?>" class="color-inherit"><span class="REPLACE">Profile Name</span></a>
							on <span class="project-date"><span class="REPLACE">4/40/69</span></span>
						</span>
					</p>
				</div>
			<!-- Info -->
			
				<div class="accordion-group accordion-group-no-close">
					<!-- @NOTE: on of the .tabs li  along with paired `.accordion` must be `.open`. in this case today is default. modify if needed -->
					<ul class="tabs	tabs-responsive no-border">
						<li class="tab open" data-toggle="accordion" data-href="#project-details"> 
							<a href="#project-details" >Details</a>
						</li>
						<li class="tab" data-toggle="accordion" data-href="#project-library">
							<a href="#project-library" >Wiki/How-Tos, Documents & Notes</a>
						</li>
					</ul>

					<br>
					
					<div class="accordion open" id="project-details">
						<div class="project-details">
							<div class="REPLACE overflow-hidden" style="max-height: 500px;">
								<?php app_get_component('components/_DEMO-html-markup') ?>
							</div>
						</div>
					</div>

					<div class="accordion" id="project-library">

						<!-- project Wikis -->
							<div class="p project-library-header">
								<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
									<div class="flex-col-xs-12 flex-col-md-6">
										<h3 class="module-title open" data-toggle="accordion" data-href="#project-wiki">
											Wiki/How-Tos <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
										</h3>
									</div>
									<div class="flex-col-xs-12 flex-col-md-6 text-align-right">
										<?php app_get_component('components/linkto-add-wiki') ?>
									</div>
								</div>
							</div>

							<div class="accordion open project-library-section p" id="project-wiki" data-accordion-change-hash="false">
								<!-- @if there are entries -->
									<div class="table-wrapper dashboard-table-wrapper-gutterless">

										<table class="">
											<tr>
												<th class="dashboard-table-cell-max-larger text-nowrap">Name</th>
												<th class="text-nowrap text-align-center">Created</th>
												<th class="text-nowrap text-align-center">Updated</th>
											</tr>

											<!-- @LOOP tr -->
												<tr>
													<td class="dashboard-table-cell-max-larger">
														<a href="<?=app_create_link(array('template'=>'wiki')); ?>" class="project-wiki-name text-wrap-ellipsis">
															<span class="REPLACE">Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name </span>
														</a>
													</td>
													<td class="text-align-center project-wiki-date-created">
														<span class="REPLACE">5/29/20</span>
													</td>
													<td class="text-align-center project-wiki-date-updated">
														<span class="REPLACE">5/29/20</span>
													</td>
												</tr>
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=5; $i++){ ?>
														<tr>
															<td class="dashboard-table-cell-max-larger">
																<a href="<?=app_create_link(array('template'=>'wiki')); ?>" class="project-wiki-name text-wrap-ellipsis">
																	<span class="REPLACE">Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name Wiki with a really long name </span>
																</a>
															</td>
															<td class="text-align-center project-wiki-date-created">
																<span class="REPLACE">5/29/20</span>
															</td>
															<td class="text-align-center project-wiki-date-updated">
																<span class="REPLACE">5/29/20</span>
															</td>
														</tr>
													<?php } ?>
										</table>
									</div>
								<!-- @else no entries -->
									<p class="p color-neutral font-style-italic">No projects wikis yet.</p>
							</div>


							
						<!-- project Docs/files -->
							<div class="p project-library-header">
								<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
									<div class="flex-col-xs-12 flex-col-md-6">
										<h3 class="module-title open" data-toggle="accordion" data-href="#project-docs">
											Documents & Files <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
										</h3>
									</div>
									<div class="flex-col-xs-12 flex-col-md-6 text-align-right">
										<?php app_get_component('components/linkto-add-docs') ?>
									</div>
								</div>
							</div>

							<div class="accordion open project-library-section p" id="project-docs" data-accordion-change-hash="false">
								<!-- @if there are entries -->
									<div class="table-wrapper dashboard-table-wrapper-gutterless">

										<table class="">
											<tr>
												<th class="dashboard-table-cell-max-larger text-nowrap">Name</th>
												<th class="text-nowrap text-align-center">Created</th>
												<th class="text-nowrap text-align-center">Updated</th>
											</tr>

											<!-- @LOOP tr -->
												<tr>
													<td class="dashboard-table-cell-max-larger">
														<!-- @note
															.project-doc-name
																attributes to modify
																	href
																		

														-->
														<a href="REPLACELinkToActualFile" class="project-doc-name text-wrap-ellipsis">
															<span class="REPLACE">Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name </span>
														</a>
													</td>
													<td class="text-align-center project-doc-date-created">
														<span class="REPLACE">5/29/20</span>
													</td>
													<td class="text-align-center project-doc-date-updated">
														<span class="REPLACE">5/29/20</span>
													</td>
												</tr>
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=5; $i++){ ?>
														<tr>
															<td class="dashboard-table-cell-max-larger">
																<a href="REPLACELinkToActualFile" class="project-doc-name text-wrap-ellipsis">
																	<span class="REPLACE">Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long nameDoc or file probablyi with a really long name Doc or file probably with a really long name Doc or file probably with a really long name </span>
																</a>
															</td>
															<td class="text-align-center project-doc-date-created">
																<span class="REPLACE">5/29/20</span>
															</td>
															<td class="text-align-center project-doc-date-updated">
																<span class="REPLACE">5/29/20</span>
															</td>
														</tr>
													<?php } ?>
										</table>
									</div>
								<!-- @else no entries -->
									<p class="p color-neutral font-style-italic">No projects wikis yet.</p>
							</div>



						<!-- project Docs/files -->
							<div class="p project-library-header">
								<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
									<div class="flex-col-xs-12 flex-col-md-6">
										<h3 class="module-title open" data-toggle="accordion" data-href="#project-notes">
											Project Notes <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
										</h3>
									</div>
									<div class="flex-col-xs-12 flex-col-md-6 text-align-right">
										<?php app_get_component('components/linkto-add-notes') ?>
									</div>
								</div>
							</div>

							<div class="accordion open project-library-section p" id="project-notes" data-accordion-change-hash="false">
								<!-- @if there are entries -->
									<div class="table-wrapper dashboard-table-wrapper-gutterless">

										<table class="">
											<tr>
												<th class="text-nowrap">Created</th>
												<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">Author</th>
												<th class="dashboard-table-cell-max text-nowrap">Task</th>
												<th class="dashboard-table-cell-max text-nowrap">Note Title</th>
												<th class="dashboard-table-cell-action text-nowrap table-cell-no-gutter">&nbsp;<span class="sr-only">Actions</span></th>
											</tr>

											<!-- @LOOP tr -->
												<tr>
													<td>
														<span class="project-note-date-created">
															<span class="REPLACE">5/12/20</span>
														</span>
													</td>
													<td class="text-align-center dashboard-table-cell-thumbnail">
														<?php app_get_component('components/profile-image-small') ?>
													</td>
													<td>
														<a href="<?=app_create_link(array('template'=>'task-view')) ?>" class="project-note-task text-wrap-ellipsis dashboard-table-cell-max">
															<span class="REPLACE">Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here </span>
														</a>
													</td>
													<td>
														<span href="<?=app_create_link(array('template'=>'project')) ?>" class="project-note-title text-wrap-ellipsis dashboard-table-cell-max">
															<span class="REPLACE">Duis aute irure dolor in reprehendert </span>
														</span>
													</td>
													<td class="dashboard-table-cell-action ">
														<?php app_get_component('components/tooltip-action-with-share'); ?>
													</td>
												</tr>
													<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=5; $i++){ ?>
														<tr>
															<td>
																<span class="project-note-date-created">
																	<span class="REPLACE">5/12/20</span>
																</span>
															</td>
															<td class="text-align-center dashboard-table-cell-thumbnail">
																<?php app_get_component('components/profile-image-small') ?>
															</td>
															<td>
																<a href="<?=app_create_link(array('template'=>'task-view')) ?>" class="project-note-task text-wrap-ellipsis dashboard-table-cell-max">
																	<span class="REPLACE">Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here </span>
																</a>
															</td>
															<td>
																<span href="<?=app_create_link(array('template'=>'project')) ?>" class="project-note-title text-wrap-ellipsis dashboard-table-cell-max">
																	<span class="REPLACE">Duis aute irure dolor in reprehendert </span>
																</span>
															</td>
															<td class="dashboard-table-cell-action ">
																<?php app_get_component('components/tooltip-action-with-share'); ?>
															</td>
														</tr>
													<?php } ?>
										</table>
									</div>
								<!-- @else no entries -->
									<p class="p color-neutral font-style-italic">No notes yet.</p>
							</div>

					
				</div>
			</div>
		</div>
	</div>

	<div class="module">
		<div class="module-header no-margin-bottom">
			<h3 class="module-title open" data-toggle="accordion" data-href="#project-tasks">
				Tasks <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
			</h3>
		</div>
		<div class="accordion open" id="project-tasks">
			<div class="accordion-group accordion-group-no-close">
				<!-- @NOTE: on of the .tabs li  along with paired `.accordion` must be `.open`. in this case today is default. modify if needed -->
				<ul class="tabs	tabs-responsive no-border">
					<li class="tab open" data-toggle="accordion" data-href="#project-open-tasks"> 
						<a href="#project-open-tasks" >Open Tasks</a>
					</li>
					<li class="tab" data-toggle="accordion" data-href="#project-closed-tasks">
						<a href="#project-closed-tasks">Closed & Archived Tasks</a>
					</li>
				</ul>
				<br>
				<div class="accordion open" id="project-open-tasks">
					<div class="table-wrapper dashboard-table-wrapper-gutterless">
						<table>
							<tr>
								<th class="text-nowrap">Name</th>
								<th class="text-nowrap">Status</th>
								<th class="text-nowrap">Assignee</th>
								<th class="text-nowrap text-align-center">Assigned On</th>
								<th class="text-nowrap text-align-center">Created By</th>
							</tr>
							<?php for($i=1; $i<=2; $i++){ ?>
								<tr>
									<td>
										<a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
											<span class="REPLACE">Dental on Central Long Form</span>
										</a>
									</td>
									<td>
										<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
											<span class="REPLACE">Backlog</span>
										</a>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
										<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
											<div class="thumbnail-image">
												<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
											</div>
											<span class="thumbnail-text profile-name-initial">
												<span class="REPLACE">PN</span>
											</span>
										</a>
									</td>
									<td class="dashboard-table-cell-max text-align-center">
										<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
											<span class="REPLACE">5/29/20</span>
										</span>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
										<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
											<div class="thumbnail-image">
												<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
											</div>
											<span class="thumbnail-text profile-name-initial">
												<span class="REPLACE">PN</span>
											</span>
										</a>
									</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div class="accordion" id="project-closed-tasks">
					<div class="table-wrapper dashboard-table-wrapper-gutterless">
						<table>
							<tr>
								<th class="text-nowrap">Name</th>
								<th class="text-nowrap">Status</th>
								<th class="text-nowrap">Assignee</th>
								<th class="text-nowrap text-align-center">Assigned On</th>
								<th class="text-nowrap text-align-center">Created By</th>
							</tr>
							<?php for($i=1; $i<=2; $i++){ ?>
								<tr>
									<td>
										<a href="<?=app_create_link(array('template'=>'project')); ?>" class="open-task text-wrap-ellipsis">
											<span class="REPLACE">Dental on Central Long Form</span>
										</a>
									</td>
									<td>
										<a href="<?=app_create_link(array('template'=>'project')) ?>" class="open-project text-wrap-ellipsis">
											<span class="REPLACE">Backlog</span>
										</a>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
										<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
											<div class="thumbnail-image">
												<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
											</div>
											<span class="thumbnail-text profile-name-initial">
												<span class="REPLACE">PN</span>
											</span>
										</a>
									</td>
									<td class="dashboard-table-cell-max text-align-center">
										<span href="<?=app_create_link(array('template'=>'project')) ?>" class="open-client text-wrap-ellipsis">
											<span class="REPLACE">5/29/20</span>
										</span>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
										<a class="thumbnail thumbnail-small" href="<?=app_create_link(array('template'=>'profile')) ?>">
											<div class="thumbnail-image">
												<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
											</div>
											<span class="thumbnail-text profile-name-initial">
												<span class="REPLACE">PN</span>
											</span>
										</a>
									</td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="module">
		<div class="module-content">
			<h3>Activity & Comments</h3>
			<?php app_get_component('components/comment-form'); ?>
			<?php app_get_component('components/comment-row'); ?>
		</div>
	</div>
</div>