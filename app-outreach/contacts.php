
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h1 class="no-margin">Contacts</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function">
			<a  href="#mb-editor-contact" data-modal-title="Add contact" data-toggle-modal-board class="btn btn-primary btn-block-mobile">
				Add <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-contacts" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="text-nowrap">Name</th>
			<th class="text-nowrap">Company</th>
			<th class="text-nowrap">Email</th>
			<th class="text-nowrap">Phone</th>
			<th class="text-nowrap text-align-center" width="75">Acct Owner</th>
			<th class="text-nowrap text-align-center" width="100">Type</th>
			<th class="text-nowrap text-align-center" width="50">&nbsp;<span class="sr-only">Actions</span></th>
		</tr>

		<!-- @LOOP row -->
		<tr>
			<td>
				<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

					<h5 class="contact-name no-margin-y">
						<span class="REPLACE">Phoenix Wright</span>
					</h5>
					<div class="contact-domain text-wrap-ellipsis">
						<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
					</div>
				</a>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company</span>

				<a href="<?= app_create_link(array('template'=>'company-detail')) ?>" class="contact-company color-inherit text-wrap-ellipsis">
					<span class="RELPACE">Wright & Co. Law Offices</span>
				</a>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Email</span>
				<!-- @if has email -->
					<a href="#mb-editor-email" data-toggle-modal-board class="contact-email color-inherit text-wrap-ellipsis">
						<span class="RELPACE">naruhodo@ace-attorney.com</span>
					</a>
				<!-- @else -->
					<span class="color-neutral">
						Not Available
					</span>
			</td>
			<td>
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
				<!-- @if has phone -->
					<a href="tel:REPLACEwithphone" class="contact-phone color-inherit text-nowrap">
						<span class="RELPACE">(555) 555-5555</span>
					</a>
				<!-- @else -->
					<span class="color-neutral">
						Not Available
					</span>
			</td>
			<td class="text-align-center" width="75">
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Acct Owner</span>
				<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="contact-acct-owner text-align-center">
					<?php app_get_component('components/profile-image-micro') ?>
				</a>
			</td>
			<td class="text-align-center" width="100">
				<div class="contact-clienttype">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
					<?php app_get_component('components/tag-clienttype') ?>
				</div>
			</td>
			<td class="outreach-table-cell-actions text-align-center" width="50">
				<div class="contact-actions position-relative">
					<?php app_get_component('components/dropdown-actions','',false,array(
						'links' => array(
							'Edit Details'
								=> 'class="tooltip-purger" href="#mb-editor-contact" data-toggle-modal-board href="#mb-editor-contact" data-modal-title="Edit Contact"',
							'Change Status'
								=> 'href="#m-contact-status-REPLACE_ID" data-toggle-modal-default ',
							'Assign to User'
								=> 'href="#m-contact-assigneduser-REPLACE_ID" data-toggle-modal-default"',
							'Delete'
								=> 'href="#"'
						)
					)) ?>

					<div class="modal modal-default" id="m-contact-status-REPLACE_ID" data-modal-width="400px" data-modal-title="Set Status to">
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Change Status To</label>
								<select name="contact-status" id="" class="input-select">
									<option value="">Select</option>
									<option value="client">Client</option>
									<option value="lead">Lead</option>
									<option value="prospect">Prospect</option>
								</select>
							</div>
							<button class="btn btn-primary btn-block">Save</button>
						</form>
					</div>

					<div class="modal modal-default" id="m-contact-assigneduser-REPLACE_ID" data-modal-width="400px" data-modal-title="Assign To User">
						<!-- @PLACELHOLDER: modify as needed -->
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Assign to User</label>
								<select name="contact-assigned" id="" class="input-select">
									<option value="">Select</option>
									<option value="1">User 1</option>
									<option value="2">User 2</option>
									<option value="3">User 3</option>
								</select>
							</div>
							<button class="btn btn-primary btn-block">Save</button>
						</form>
					</div>

					<div class="modal modal-default" id="m-contact-status-REPLACE_ID" data-modal-width="400px" data-modal-title="Set Status to">
						<!-- @PLACELHOLDER: modify as needed -->
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Assign to User</label>
								<select name="contact-status" id="" class="input-select">
									<option value="">Select</option>
									<option value="1">User 1</option>
									<option value="2">User 2</option>
									<option value="3">User 3</option>
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
						
						<td>
							<a class="color-inherit" href="<?= app_create_link(array('template'=>'contact-detail')) ?>">

								<h5 class="contact-name no-margin-y">
									<span class="REPLACE">Phoenix Wright</span>
								</h5>
								<div class="contact-domain text-wrap-ellipsis">
									<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
								</div>
							</a>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company</span>
							<a href="<?= app_create_link(array('template'=>'company-detail')) ?>" class="contact-company color-inherit text-wrap-ellipsis">
								<span class="RELPACE">Wright & Co. Law Offices</span>
							</a>
						</td>
						<td width="200">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Email</span>
							<!-- @if has email -->
								<a href="#mb-editor-email" data-toggle-modal-board class="contact-email color-inherit text-wrap-ellipsis">
									<span class="RELPACE">naruhodo@ace-attorney.com</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">
									Not Available
								</span>
						</td>
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
							<!-- @if has phone -->
								<a href="tel:REPLACEwithphone" class="contact-phone color-inherit text-nowrap">
									<span class="RELPACE">(555) 555-5555</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">
									Not Available
								</span>
						</td>
						<td class="text-align-center">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Acct Owner</span>
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="contact-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td class="text-align-center">
							<div class="contact-clienttype">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
								<?php app_get_component('components/tag-clienttype') ?>
							</div>
						</td>
						<td class="outreach-table-cell-actions text-align-center">
							<div class="contact-actions position-relative">
								<?php app_get_component('components/dropdown-actions','',false,array(
									'links' => array(
										'Edit Details'
											=> 'class="tooltip-purger" href="#mb-editor-contact" data-toggle-modal-board href="#mb-editor-contact" data-modal-title="Edit Contact"',
										'Change Status'
											=> 'href="#m-contact-status-'.$i.'" data-toggle-modal-default ',
										'Assign to User'
											=> 'href="#m-contact-assigneduser-'.$i.'" data-toggle-modal-default"',
										'Delete'
											=> 'href="#"'
									)
								)) ?>

								<div class="modal modal-default" id="m-contact-status-<?= $i ?>" data-modal-width="400px" data-modal-title="Set Status to">
									<form action="">
										<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
											<label for="" class="input-label sr-only">Change Status To</label>
											<select name="contact-status" id="" class="input-select">
												<option value="">Select</option>
												<option value="client">Client</option>
												<option value="lead">Lead</option>
												<option value="prospect">Prospect</option>
											</select>
										</div>
										<button class="btn btn-primary btn-block">Save</button>
									</form>
								</div>

								

								<div class="modal modal-default" id="m-contact-assigneduser-<?= $i ?>" data-modal-width="400px" data-modal-title="Assign To User">
									<!-- @PLACELHOLDER: modify as needed -->
									<form action="">
										<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
											<label for="" class="input-label sr-only">Assign to User</label>
											<select name="contact-assigned" id="" class="input-select">
												<option value="">Select</option>
												<option value="1">User 1</option>
												<option value="2">User 2</option>
												<option value="3">User 3</option>
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

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
</div>
