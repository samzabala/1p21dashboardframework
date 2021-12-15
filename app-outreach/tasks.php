<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h1 class="no-margin">Task</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function function-add">
			<a  href="#mb-editor-task" data-modal-title="Add Task" data-toggle-modal-board class="btn btn-primary btn-block-mobile">
				Add New <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-tasks" class="module">


	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<div class="table-wrapper">
		<table class="outreach-table">
			<tr>
				<th class="text-align-center outreach-table-mobile-th">
					<form action="">
						<input type="checkbox" class="input-inline" name="select-task-all" class="task-selector" id="select-task-all">
						<label for="select-task-all" class="input-label hide-nonmobile">Select All Tasks</label>
					</form>
				</th>
				<th class="text-nowrap">Title</th>
				<th class="text-nowrap">Company / contact</th>
				<th class="text-nowrap text-align-center">Created</th>
				<th class="text-nowrap text-align-center">Due Date</th>
				<th class="text-nowrap">Reminder</th>
				<th class="text-nowrap text-align-center">Assignee</th>
				<th class="text-nowrap text-align-center">Author</th>
				<th class="text-nowrap text-align-center">Completed</th>
				<th class="text-align-center">Status</th>
				<th class="text-nowrap text-align-right outreach-table-cell-actions outreach-table-mobile-th">
					<div class="task-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Change Status for Selected'
									=> 'href="#m-task-status-REPLACEID" data-toggle-modal-default data-modal-title="Set Tasks Status"',
								'Delete Selected'
									=> 'href="#"'
							)
						)) ?>

						<div class="modal modal-default" id="m-task-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
							<form action="">
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
									<label for="" class="input-label sr-only">Change Status To</label>
									<select name="task-status" id="" class="input-select">
										<option value="">Select</option>
										<!-- @REPLACE  -->
									</select>
								</div>
								<button class="btn btn-primary btn-block">Save</button>
							</form>
						</div>
					</div>
				</th>
			</tr>

			<!-- @LOOP row


			NOTE: For animations
			1: wrap the tr with `<transition name="outreach-animate-fade"></transition>`. Markup demo is not wrapped with the element right now so that the front end doesn't freak out. 

			2: add a v-if attribute for this to work: `v-if="!taskComplete"`

			This is how the markup should look like for TaskDetail.vue:
			<transition name="outreach-animate-fade">
				<tr v-if="!taskComplete">...</tr>
			</transition>

			reference here:
			https://v3.vuejs.org/guide/transitions-enterleave.html#transitioning-single-elements-components 
		
			-->
			<tr v-if="!taskComplete">
				<td class="text-align-center outreach-table-cell-columnwidth-50">
					<form action="" class="task-c">
						<input type="checkbox" class="input-inline" name="select-task-REPLACEID" class="task-selector" id="select-task-REPLACEID">
						<label for="select-task-REPLACEID" class="input-label color-neutral hide-nonmobile">Select Task</label>
					</form>
				</td>
				

				<td class="outreach-table-cell-columnwidth-400">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Description</span>
					<div class="task-description">
						<span class="REPLACE">Our school had a saying: “When something smells, it’s usually the Butz.” In the 23 years I’ve known him, it’s usually been true.</span>
					</div>
				</td>
				<td class="outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company / Contact</span>
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'task-detail')) ?>">

						<h5 class="task-task-name no-margin-y">
							<span class="REPLACE">Phoenix Wright</span>
						</h5>
						<div class="task-task-domain text-wrap-ellipsis">
							<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
						</div>
					</a>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created</span>
					<div>
						<p class="no-margin color-primary font-weight-700">
							<span class="REPLACE">4/20/69</span>
						</p>
						<p class="font-size-small no-margin color-neutral">
							<span class="REPLACE">4:20pm</span>
						</p>
					</div>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Due Date</span>
					<div>
						<p class="no-margin color-primary font-weight-700">
							<span class="REPLACE">4/20/69</span>
						</p>
						<p class="font-size-small no-margin color-neutral">
							<span class="REPLACE">4:20pm</span>
						</p>
					</div>
				</td>
				<td class="outreach-table-cell-columnwidth-150">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reminder</span>

					<!-- @NOTE
						.task-toggle-reminder-wrapper 
							classes to add
								`disabled` => if reminder is disabled
				
					-->
					<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between flex-grid-no-gutter-y">
						<div class="flex-col-xs-2 flex-col-sm-1 flex-col-md-5">
							<div class="input-toggle input-large">
								<input type="checkbox" class="input">
								<label class="input-label input-toggle-label">
									<div class="sr-only">
										Toggle Reminder
									</div>
								</label>
							</div>
						</div>
						<div class="flex-col-xs-10 flex-col-sm-11 flex-col-md-6">
							<!-- @if reminder is enabled -->
							<div class="task-reminder-info font-size-small ">
								<p class="task-reminder-date no-margin color-primary font-weight-700">
									<span class="REPLACE">4/20/69</span>
								</p>
								<p class="task-reminder-time no-margin color-neutral">
									<span class="REPLACE">4:20pm</span>
								</p>
							</div>
						</div>
					</div>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
					<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="task-assignee">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Author</span>
					<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="task-author">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Mark as complete?</span>
					<!-- 
						@NOTE .btn
						class to add
							'btn-neutral background-neutral-alpha-5 color-background-hover background-success-hover' => if not complete yet
							'btn-success btn-no-interaction' => completed. NOTE: mike would like to start the transition for completion 1s later after click
					 -->
						<a href="#" class="btn btn-neutral background-neutral-alpha-5 color-background-hover background-success-hover well well-compact btn-round btn-symbol">
							<i class="symbol symbol-check"></i>
						</a>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<div class="task-status">
						<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
						<!-- @NOTE
							.tag
							classes to add => task status tag
								`tag-error` => Overdue 
								`tag-caution` => Pending
								`tag-success` => Completed
					
						-->
						<span class="tag tag-small tag-error">
							<span class="REPLACE">Overdue</span>
						</span>
					</div>
				</td>
				<td class="outreach-table-cell-actions text-align-right outreach-table-cell-columnwidth-50">
					
					<div class="task-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'View Details'
									=> 'class="dropdown-purger" href="#mb-detail-task" data-toggle-modal-board',
								'Edit Details'
									=> 'class="tooltip-purger" href="#mb-editor-task" data-toggle-modal-board href="#mb-editor-task" data-modal-title="Edit Details"',
								'Change Status'
									=> 'href="#m-task-status-REPLACEID" data-toggle-modal-default ',
								'Delete'
									=> 'href="#"'
							)
						)) ?>

						<div class="modal modal-default" id="m-task-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
							<form action="">
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
									<label for="" class="input-label sr-only">Change Status To</label>
									<select name="task-status" id="" class="input-select">
										<option value="">Select</option>
										<!-- @REPLACE  -->
										<option value="Backlog">Backlog</option>
										<option value="In Progress">In Progress</option>
										<option value="Completed">Completed</option>
									</select>
								</div>
								<button class="btn btn-primary btn-block">Save</button>
							</form>
						</div>
					</div>
				</td>
			</tr>

				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($i=1; $i<=4; $i++){ ?>
						<tr v-if="!taskComplete">
							<td class="text-align-center outreach-table-cell-columnwidth-50">
								<form action="" class="task-c">
									<input type="checkbox" class="input-inline" name="select-task-REPLACEID" class="task-selector" id="select-task-REPLACEID">
									<label for="select-task-REPLACEID" class="input-label color-neutral hide-nonmobile">Select Task</label>
								</form>
							</td>
							

							<td class="outreach-table-cell-columnwidth-400">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Description</span>
								<div class="task-description">
									<span class="REPLACE">Our school had a saying: “When something smells, it’s usually the Butz.” In the 23 years I’ve known him, it’s usually been true.</span>
								</div>
							</td>
							<td class="outreach-table-cell-columnwidth-300">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company / Contact</span>
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'task-detail')) ?>">

									<h5 class="task-task-name no-margin-y">
										<span class="REPLACE">Phoenix Wright</span>
									</h5>
									<div class="task-task-domain text-wrap-ellipsis">
										<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
									</div>
								</a>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created</span>
								<div>
									<p class="no-margin color-primary font-weight-700">
										<span class="REPLACE">4/20/69</span>
									</p>
									<p class="font-size-small no-margin color-neutral">
										<span class="REPLACE">4:20pm</span>
									</p>
								</div>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Due Date</span>
								<div>
									<p class="no-margin color-primary font-weight-700">
										<span class="REPLACE">4/20/69</span>
									</p>
									<p class="font-size-small no-margin color-neutral">
										<span class="REPLACE">4:20pm</span>
									</p>
								</div>
							</td>
							<td class="outreach-table-cell-columnwidth-150">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Reminder</span>

								<!-- @NOTE
									.task-toggle-reminder-wrapper 
										classes to add
											`disabled` => if reminder is disabled
							
								-->
								<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between flex-grid-no-gutter-y">
									<div class="flex-col-xs-2 flex-col-sm-1 flex-col-md-5">
										<div class="input-toggle input-large">
											<input type="checkbox" class="input">
											<label class="input-label input-toggle-label">
												<div class="sr-only">
													Toggle Reminder
												</div>
											</label>
										</div>
									</div>
									<div class="flex-col-xs-10 flex-col-sm-11 flex-col-md-6">
										<!-- @if reminder is enabled -->
										<div class="task-reminder-info font-size-small ">
											<p class="task-reminder-date no-margin color-primary font-weight-700">
												<span class="REPLACE">4/20/69</span>
											</p>
											<p class="task-reminder-time no-margin color-neutral">
												<span class="REPLACE">4:20pm</span>
											</p>
										</div>
									</div>
								</div>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Assignee</span>
								<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="task-assignee">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Author</span>
								<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="task-author">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Mark as complete?</span>
								<!-- 
									@NOTE .btn
									class to add
										'btn-neutral background-neutral-alpha-5 color-background-hover background-success-hover' => if not complete yet
										'btn-success btn-no-interaction' => completed. NOTE: mike would like to start the transition for completion 1s later after click
								-->
									<a href="#" class="btn btn-success btn-no-interaction well well-compact btn-round btn-symbol">
										<i class="symbol symbol-check"></i>
									</a>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<div class="task-status">
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
									<!-- @NOTE
										.tag
										classes to add => task status tag
											`tag-error` => Overdue 
											`tag-caution` => Pending
											`tag-success` => Completed
								
									-->
									<span class="tag tag-small tag-error">
										<span class="REPLACE">Overdue</span>
									</span>
								</div>
							</td>
							<td class="outreach-table-cell-actions text-align-right outreach-table-cell-columnwidth-50">
								
								<div class="task-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'View Details'
												=> 'class="dropdown-purger" href="#mb-detail-task" data-toggle-modal-board',
											'Edit Details'
												=> 'class="tooltip-purger" href="#mb-editor-task" data-toggle-modal-board href="#mb-editor-task" data-modal-title="Edit Details"',
											'Change Status'
												=> 'href="#m-task-status-REPLACEID" data-toggle-modal-default ',
											'Delete'
												=> 'href="#"'
										)
									)) ?>

									<div class="modal modal-default" id="m-task-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
										<form action="">
											<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
												<label for="" class="input-label sr-only">Change Status To</label>
												<select name="task-status" id="" class="input-select">
													<option value="">Select</option>
													<!-- @REPLACE  -->
													<option value="Backlog">Backlog</option>
													<option value="In Progress">In Progress</option>
													<option value="Completed">Completed</option>
												</select>
											</div>
											<button class="btn btn-primary btn-block">Save</button>
										</form>
									</div>
								</div>
							</td>
						</tr>
					<?php } ?>
		</table>
	</div>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
</div>