

<div class="module-grid">
	<!-- Heading + Info -->
		<div class="module">
			<div class="module-content">
				<!-- Heading -->
					<div class="project-heading">

						<h1 class="project-title no-margin-top">
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
								<a href="#project-library" >Notes &amp; Documents</a>
							</li>
						</ul>

						<br>

						<div class="accordion open" id="project-details">
							<div class="project-description">
								

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
						</div>

						<div class="accordion" id="project-library">

							<div class="accordion-group">


								<!-- notes -->
									<div class="p project-library-header">
										<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
											<div class="flex-col-xs-12 flex-col-md-6">
												<h3 class="module-title open" data-toggle="accordion" data-href="#project-notes">
													Notes <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
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

												<table class=" dashboard-table-cells-match-height text-vertical-align-middle">
													<tr>
														<th class="text-nowrap dashboard-table-cell-date">Created</th>
														<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">Author</th>
														<th class="text-nowrap">Note Title</th>
														<th class="text-nowrap">Task</th>
														<th class="dashboard-table-cell-action text-nowrap table-cell-no-gutter">&nbsp;<span class="sr-only">Actions</span></th>
													</tr>

													<!-- @LOOP tr -->
														<tr>
															<td class="dashboard-table-cell-date">
																<span class="project-note-date-created">
																	<span class="REPLACE">5/12/20</span>
																</span>
															</td>
															<td class="text-align-center dashboard-table-cell-thumbnail">
																<?php app_get_component('components/profile-image-small') ?>
															</td>
															<td>
																<a href="<?=app_create_link(array('template'=>'note-view')) ?>" class="project-note-title text-wrap-ellipsis dashboard-table-cell-max">
																	<span class="REPLACE">Duis aute irure dolor in reprehendert </span>
																</a>
															</td>
															<td>
																<a href="<?=app_create_link(array('template'=>'task-view')) ?>" class="project-note-task text-wrap-ellipsis dashboard-table-cell-max">
																	<span class="REPLACE">Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here </span>
																</a>
															</td>
															<td class="dashboard-table-cell-action ">
																<?php app_get_component('components/tooltip-action-with-share'); ?>
															</td>
														</tr>
															<!-- @PLACEHOLDER: DELETE WHEN READY -->
															<?php for($i=1; $i<=5; $i++){ ?>
																<tr class=" dashboard-table-cell-date">
																	<td>
																		<span class="project-note-date-created">
																			<span class="REPLACE">5/12/20</span>
																		</span>
																	</td>
																	<td class="text-align-center dashboard-table-cell-thumbnail">
																		<?php app_get_component('components/profile-image-small') ?>
																	</td>
																	<td>
																		<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="project-note-title text-wrap-ellipsis dashboard-table-cell-max">
																			<span class="REPLACE">Duis aute irure dolor in reprehendert </span>
																		</span>
																	</td>
																	<td>
																		<a href="<?=app_create_link(array('template'=>'task-view')) ?>" class="project-note-task text-wrap-ellipsis dashboard-table-cell-max">
																			<span class="REPLACE">Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here Long task name here </span>
																		</a>
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

								<!-- project Docs/files -->
									<div class="p project-library-header">
										<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y justify-content-space-between align-items-center">
											<div class="flex-col-xs-12 flex-col-md-6">
												<h3 class="module-title open" data-toggle="accordion" data-href="#project-docs">
													Documents & Files <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
												</h3>
											</div>
											<div class="flex-col-xs-12 flex-col-md-6 text-align-right">
												<?php app_get_component('components/linkto-add-files') ?>
											</div>
										</div>
									</div>

									<div class="accordion open project-library-section p" id="project-docs" data-accordion-change-hash="false">
										<!-- @if there are entries -->
											<div class="table-wrapper dashboard-table-wrapper-gutterless">

												<table class=" dashboard-table-cells-match-height text-vertical-align-middle">
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
											<p class="p color-neutral font-style-italic">No attachments yet.</p>
									</div>
							</div>

							
					</div>
				</div>
			</div>
		</div>

	<!-- Tasks -->
		<div class="module">
			<div class="module-header no-margin-bottom module-header-break">
				<h3 class="module-title open" data-toggle="accordion" data-href="#project-tasks">
					Tasks <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</h3>
				<div class="module-functions">
					<div class="module-function">

						<a href="#task-REPLACEwithPostTypeID-edit" data-toggle="board" class="btn btn btn-block-mobile btn-primary-outline">
							New Task
							<i class="symbol symbol-plus"></i>
						</a>
					</div>

					
					
				</div>
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
						<!-- @if there are entries -->
							<div class="table-wrapper dashboard-table-wrapper-gutterless">
								<table class=" dashboard-table-cells-match-height text-vertical-align-middle">
									<tr>
										<th class="dashboard-table-cell-max text-nowrap">Name</th>
										<th class="text-nowrap">Status</th>
										<th class="dashboard-table-cell-thumbnail text-nowrap">Assignee</th>
										<th class="text-nowrap text-align-center dashboard-table-cell-date">Assigned On</th>
										<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">Created By</th>
									</tr>

									<tr>
										<td class="dashboard-table-cell-thumbnail ">
											<a href="<?=app_create_link(array('template'=>'task-view')); ?>" class="task-name text-wrap-ellipsis">
												<span class="REPLACE">Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name </span>
											</a>
										</td>
										<td>
											<span class="task-status text-wrap-ellipsis">
												<span class="REPLACE">Backlog</span>
											</span>
										</td>
										<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
											<!-- @if assigned to somebody -->
												<?php app_get_component('components/profile-image-small'); ?>
											<!-- @else not assigned -->
												<span class="color-neutral font-style-italic">Unassigned</span>
										</td>
										<td class="dashboard-table-cell-date text-align-center">
											<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="text-wrap-ellipsis">
												<span class="REPLACE">5/29/20</span>
											</span>
										</td>
										<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
											<?php app_get_component('components/profile-image-small'); ?>
										</td>
									</tr>

										<!-- @PLACEHOLDER. delete when ready -->
											<?php for($i=1; $i<=6; $i++){ ?>
												<tr>
													<td class="dashboard-table-cell-thumbnail ">
														<a href="<?=app_create_link(array('template'=>'task-view')); ?>" class="task-name text-wrap-ellipsis">
															<span class="REPLACE">Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name </span>
														</a>
													</td>
													<td>
														<span class="task-status text-wrap-ellipsis">
															<span class="REPLACE">Backlog</span>
														</span>
													</td>
													<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
														<!-- @if assigned to somebody -->
															<?php app_get_component('components/profile-image-small'); ?>
														<!-- @else not assigned -->
															<span class="color-neutral font-style-italic">Unassigned</span>
													</td>
													<td class="dashboard-table-cell-date text-align-center">
														<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="text-wrap-ellipsis">
															<span class="REPLACE">5/29/20</span>
														</span>
													</td>
													<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
														<?php app_get_component('components/profile-image-small'); ?>
													</td>
												</tr>
											<?php } ?>
								</table>
							</div>
							
						<!-- @else no entries -->
							<p class="p color-neutral font-style-italic">No open tasks so far.</p>
					</div>
					<div class="accordion" id="project-closed-tasks">
						<!-- @if there are entries -->
							<div class="table-wrapper dashboard-table-wrapper-gutterless">
								<table class=" dashboard-table-cells-match-height text-vertical-align-middle">
									<tr>
										<th class="dashboard-table-cell-max text-nowrap">Name</th>
										<th class="text-nowrap">Status</th>
										<th class="dashboard-table-cell-thumbnail text-nowrap">Assignee</th>
										<th class="text-nowrap text-align-center dashboard-table-cell-date ">Assigned On</th>
										<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">Created By</th>
									</tr>

									<tr>
										<td class="dashboard-table-cell-thumbnail ">
											<a href="<?=app_create_link(array('template'=>'task-view')); ?>" class="task-name text-wrap-ellipsis">
												<span class="REPLACE">Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name </span>
											</a>
										</td>
										<td>
											<span class="task-status text-wrap-ellipsis">
												<span class="REPLACE">Backlog</span>
											</span>
										</td>
										<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
											<!-- @if assigned to somebody -->
												<?php app_get_component('components/profile-image-small'); ?>
											<!-- @else not assigned -->
												<span class="color-neutral font-style-italic">Unassigned</span>
										</td>
										<td class="dashboard-table-cell-date text-align-center">
											<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="text-wrap-ellipsis">
												<span class="REPLACE">5/29/20</span>
											</span>
										</td>
										<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
											<?php app_get_component('components/profile-image-small'); ?>
										</td>
									</tr>

										<!-- @PLACEHOLDER. delete when ready -->
											<?php for($i=1; $i<=6; $i++){ ?>
												<tr>
													<td class="dashboard-table-cell-thumbnail ">
														<a href="<?=app_create_link(array('template'=>'task-view')); ?>" class="task-name text-wrap-ellipsis">
															<span class="REPLACE">Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name Task with a really long name </span>
														</a>
													</td>
													<td>
														<span class="task-status text-wrap-ellipsis">
															<span class="REPLACE">Backlog</span>
														</span>
													</td>
													<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
														<!-- @if assigned to somebody -->
															<?php app_get_component('components/profile-image-small'); ?>
														<!-- @else not assigned -->
															<span class="color-neutral font-style-italic">Unassigned</span>
													</td>
													<td class="dashboard-table-cell-date text-align-center">
														<span href="<?=app_create_link(array('template'=>'project-view')) ?>" class="text-wrap-ellipsis">
															<span class="REPLACE">5/29/20</span>
														</span>
													</td>
													<td class="dashboard-table-cell-thumbnail text-align-center position-relative">
														<?php app_get_component('components/profile-image-small'); ?>
													</td>
												</tr>
											<?php } ?>
								</table>
							</div>
						
						<!-- @else no entries -->
							<p class="p color-neutral font-style-italic">No closed tasks yet.</p>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Activity & Comments -->
		<div class="module">
			<div class="module-content">
				<h3>Activity & Comments</h3>
				<?php app_get_component('components/comment-form','',false,array('post'=>'project')); ?>
				<?php app_get_component('components/comment-row'); ?>
			</div>
		</div>
</div>


<?php app_get_component('components/board-task-edit') ?>
<?php app_get_component('components/board-note-edit') ?>