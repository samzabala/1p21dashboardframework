<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h1 class="no-margin">Task</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function">
			<a  href="#mb-editor-task" data-modal-title="Add Task" data-toggle-modal-board class="btn btn-primary">
				Add New <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-contacts" class="module module-no-gutter overflow-hidden">
	<div class="table-wrapper">
		<table>
			<tr>
				<th class="text-align-center">
					<form action="">
						<input type="checkbox" class="input-inline" name="select-task-all" class="task-selector" id="select-task-all">
					</form>
				</th>
				<th class="text-nowrap">Description</th>
				<th class="text-nowrap">Contact</th>
				<th class="text-nowrap text-align-center">Due Date</th>
				<th class="text-nowrap">Reminder</th>
				<th class="text-nowrap text-align-center">Task Owner</th>
				<th class="text-align-center">Status</th>
				<th class="text-nowra text-align-right">
					<div class="contact-actions">
						<?php app_get_component('components/tooltip-actions','',false,array(
							'links' => array(
								'Change Status for Selected'
									=> 'href="#m-contact-status-REPLACEID" data-toggle-modal-default data-modal-title="Set Tasks Status"',
								'Delete Selected'
									=> 'href="#"'
							)
						)) ?>

						<div class="modal modal-default" id="m-contact-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
							<form action="">
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
									<label for="" class="input-label sr-only">Change Status To</label>
									<select name="contact-status" id="" class="input-select">
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

			<!-- @LOOP row -->
			<tr>
				<td class="text-align-center">
					<form action="" class="task-c">
						<input type="checkbox" class="input-inline" name="select-task-all" class="task-selector" id="select-task-REPLACEID">
					</form>
				</td>
				<td width="350">
					<div class="task-description">
						<span class="REPLACE">Our school had a saying: “When something smells, it’s usually the Butz.” In the 23 years I’ve known him, it’s usually been true.</span>
					</div>
				</td>
				<td width="200">
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

						<h5 class="task-contact-name no-margin-y">
							<span class="REPLACE">Phoenix Wright</span>
						</h5>
						<div class="task-contact-domain text-wrap-ellipsis">
							<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
						</div>
					</a>
				</td>
				<td class=" text-align-center">
					<a href="#" class="task-due-date color-inherit text-nowrap">
						<span class="RELPACE">4/20/69</span>
					</a>
				</td>
				<td width="130">
					<!-- @NOTE
						.task-toggle-reminder-wrapper 
							classes to add
								`disabled` => if reminder is disabled
				
					-->
					<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between flex-grid-no-gutter-y">
						<div class="flex-col-5">
							<div class="input-toggle input-large">
								<input type="checkbox" class="input">
								<label class="input-label input-toggle-label">
									<div class="sr-only">
										Toggle Reminder
									</div>
								</label>
							</div>
						</div>
						<div class="flex-col-6">
							<!-- @if reminder is enabled -->
							<div class="task-reminder-info">
								<p class="font-size-small task-reminder-date no-margin color-primary font-weight-700">
									<span class="REPLACE">4/20/69</span>
								</p>
								<p class="font-size-small task-reminder-time no-margin color-neutral">
									<span class="REPLACE">4:20pm</span>
								</p>
							</div>
						</div>
					</div>
				</td>
				<td width="100" class="text-align-center">
					<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="contact-acct-owner">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center">
					<div class="contact-type text-align-center">
						<!-- @NOTE
							.tag
							classes to add => contact type
								`tag-error` => Overdue 
								`tag-caution` => Pending
								`tag-success` => Completed
					
						-->
						<span class="tag tag-error">
							<span class="REPLACE">Overdue</span>
						</span>
					</div>
				</td>
				<td class="text-align-right">
					
					<div class="contact-actions">
						<?php app_get_component('components/tooltip-actions','',false,array(
							'links' => array(
								'Edit Details'
									=> 'class="tooltip-purger" href="#mb-editor-task" data-toggle-modal-board href="#mb-editor-task" data-modal-title="Edit Details"',
								'Change Status'
									=> 'href="#m-contact-status-REPLACEID" data-toggle-modal-default ',
								'Delete'
									=> 'href="#"'
							)
						)) ?>

						<div class="modal modal-default" id="m-contact-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
							<form action="">
								<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
									<label for="" class="input-label sr-only">Change Status To</label>
									<select name="contact-status" id="" class="input-select">
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
						<tr>
							<td class="text-align-center">
								<form action="" class="task-c">
									<input type="checkbox" class="input-inline" name="select-task-all" class="task-selector" id="select-task-REPLACEID">
								</form>
							</td>
							<td width="350">
								<div class="task-description">
									<span class="REPLACE">Our school had a saying: “When something smells, it’s usually the Butz.” In the 23 years I’ve known him, it’s usually been true.</span>
								</div>
							</td>
							<td width="200">
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

									<h5 class="task-contact-name no-margin-y">
										<span class="REPLACE">Phoenix Wright</span>
									</h5>
									<div class="task-contact-domain text-wrap-ellipsis">
										<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
									</div>
								</a>
							</td>
							<td class=" text-align-center">
								<a href="#" class="task-due-date color-inherit text-nowrap">
									<span class="RELPACE">4/20/69</span>
								</a>
							</td>
							<td width="130">
								<!-- @NOTE
									.task-toggle-reminder-wrapper 
										classes to add
											`disabled` => if reminder is disabled
							
								-->
								<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between flex-grid-no-gutter-y">
									<div class="flex-col-5">
										<div class="input-toggle input-large">
											<input type="checkbox" class="input">
											<label class="input-label input-toggle-label">
												<div class="sr-only">
													Toggle Reminder
												</div>
											</label>
										</div>
									</div>
									<div class="flex-col-6">
										<!-- @if reminder is enabled -->
										<div class="task-reminder-info">
											<p class="font-size-small task-reminder-date no-margin color-primary font-weight-700">
												<span class="REPLACE">4/20/69</span>
											</p>
											<p class="font-size-small task-reminder-time no-margin color-neutral">
												<span class="REPLACE">4:20pm</span>
											</p>
										</div>
									</div>
								</div>
							</td>
							<td width="100" class="text-align-center">
								<a href="<?= app_create_link(array('template'=>'profile')) ?>" class="contact-acct-owner">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td class="text-align-center">
								<div class="contact-type text-align-center">
									<!-- @NOTE
										.tag
										classes to add => contact type
											`tag-error` => Overdue 
											`tag-caution` => Pending
											`tag-success` => Completed
								
									-->
									<span class="tag tag-error">
										<span class="REPLACE">Overdue</span>
									</span>
								</div>
							</td>
							<td class="text-align-right">
								
								<div class="contact-actions">
									<?php app_get_component('components/tooltip-actions','',false,array(
										'links' => array(
											'Edit Details'
												=> 'class="tooltip-purger" href="#mb-editor-task" data-toggle-modal-board href="#mb-editor-task" data-modal-title="Edit Details"',
											'Change Status'
												=> 'href="#m-contact-status-REPLACEID" data-toggle-modal-default ',
											'Delete'
												=> 'href="#"'
										)
									)) ?>

									<div class="modal modal-default" id="m-contact-status-REPLACEID" data-modal-width="400px" data-modal-title="Set Status to">
										<form action="">
											<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
												<label for="" class="input-label sr-only">Change Status To</label>
												<select name="contact-status" id="" class="input-select">
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
</div>

<!-- boards that appear -->
<?app_get_component('components/modal-board-form-contact') ?>
<?app_get_component('components/modal-board-form-task') ?>
<?app_get_component('components/modal-board-form-event') ?>