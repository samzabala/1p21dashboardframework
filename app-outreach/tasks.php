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

<div id="outreach-contacts" class="module module-no-gutter">
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
				<th class="text-nowrap">Due Date</th>
				<th class="text-nowrap">Reminder</th>
				<th class="text-nowrap">Task Owner</th>
				<th class="text-align-center">Status</th>
				<th class="text-nowra text-align-right">
					<div class="contact-actions">
						<?php app_get_component('components/tooltip-actions','',false,array(
							'links' => array(
								'Change Status for Selected'
									=> 'href="#m-contact-status-REPLACEID" data-toggle-modal data-modal-title="Set Tasks Status"',
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
				<td width="300">
					<div class="task-description">
						<span class="REPLACE">In CSS, identifiers (including element names, classes, and IDs in selectors) can contain only the characters [a-zA-Z0-9] and ISO 10646 characters U+00A0 and higher, plus the hyphen (-) and the underscore (_); they cannot start with a digit, two hyphens, or a hyphen followed by a digit. Identifiers can also contain escaped characters and any ISO 10646 character as a numeric code (see next item). For instance, the identifier "B&W?" may be written as "B\&W\?" or "B\26 W\3F</span>
					</div>
				</td>
				<td>
					<a class="color-inherit" href="<? app_create_link(array('template'=>'contact-detail')) ?>">

						<h5 class="task-contact-name no-margin-y">
							<span class="REPLACE">Phoenix Wright</span>
						</h5>
						<div class="task-contact-domain text-wrap-ellipsis">
							<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
						</div>
					</a>
				</td>
				<td>
					<a href="#" class="task-due-date color-inherit text-nowrap">
						<span class="RELPACE">4/20/69</span>
					</a>
				</td>
				<td width="130">
					<div class="flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between">
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
				<td class="text-align-center">
					<div class="contact-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</div>
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
									=> 'href="#m-contact-status-REPLACEID" data-toggle-modal ',
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
					
					<?php } ?>
		</table>
	</div>
</div>

<!-- boards that appear -->
<?app_get_component('components/modal-board-form-contact') ?>
<?app_get_component('components/modal-board-form-task') ?>
<?app_get_component('components/modal-board-form-event') ?>