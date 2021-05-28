
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h1 class="no-margin">Companies</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function">
			<a  href="#mb-editor-company" data-modal-title="Add company" data-toggle-modal-board class="btn btn-primary">
				Add New <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-contacts" class="module module-no-gutter">

	<table class="table-fixed">
		<tr>
			<th class="text-nowrap">Name</th>
			<th class="text-nowrap">Description</th>
			<th class="text-nowrap">Phone</th>
			<th class="text-nowrap text-align-center" width="120">Acct Owner</th>
			<th class="text-nowrap text-align-center" width="120">Last Activity</th>
			<th class="text-nowrap text-align-center" width="100">Type</th>
			<th class="text-nowrap text-align-center" width="50">&nbsp;<span class="sr-only">Actions</span></th>
		</tr>

		<!-- @LOOP row -->
		<tr>
			<td>
				<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

					<h5 class="company-name no-margin-y">
						<span class="REPLACE">Wright & Co. Law</span>
					</h5>
					<div class="company-domain text-wrap-ellipsis">
						<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
					</div>
				</a>
			</td>
			<td>
				<p class="company-description no-margin-bottom">
					<span class="REPLACE">Anything Agency</span>
				</p>
			</td>
			<td>
				<!-- @if has phone -->
					<a tel="#REPLACEwithPhoneNumber">
						<span class="RELPACE">(555) 555 - 5555</span>
					</a>
				<!-- @else -->
					<span class="color-neutral">
						Not Available
					</span>
			</td>
			<td class="text-align-center" width="120">
				<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
					<?php app_get_component('components/profile-image-micro') ?>
				</a>
			</td>
			<td class="text-align-center" width="120">
				<p class="company-last-activity">
					<span class="REPLACE">04/20/69</span>
				</p>
			</td>
			<td class="text-align-center" width="100">
				<div class="company-clienttype text-align-center">
					<?php app_get_component('components/tag-clienttype') ?>
				</div>
			</td>
			<td class="text-align-center" width="50">
				<div class="company-actions position-relative">
					<?php app_get_component('components/dropdown-actions','',false,array(
						'links' => array(
							'Edit Details'
								=> 'class="dropdown-purger" href="#mb-editor-company" data-toggle-modal-board href="#mb-editor-company" data-modal-title="Edit company"',
							'Change Status'
								=> 'href="#m-company-status-REPLACE_ID" data-toggle-modal-default ',
							'Assign to User'
								=> 'href="#m-company-assigneduser-REPLACE_ID" data-toggle-modal-default"',
							'Delete'
								=> 'href="#"'
						)
					)) ?>

					<div class="modal modal-default" id="m-company-status-REPLACE_ID" data-modal-width="400px" data-modal-title="Set Status to">
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Change Status To</label>
								<select name="company-status" id="" class="input-select">
									<option value="">Select</option>
									<option value="client">Client</option>
									<option value="lead">Lead</option>
									<option value="prospect">Prospect</option>
								</select>
							</div>
							<button class="btn btn-primary btn-block">Save</button>
						</form>
					</div>

					<div class="modal modal-default" id="m-company-assigneduser-REPLACE_ID" data-modal-width="400px" data-modal-title="Assign To User">
						<!-- @PLACELHOLDER: modify as needed -->
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Assign to User</label>
								<select name="company-assigned" id="" class="input-select">
									<option value="">Select</option>
									<option value="1">User 1</option>
									<option value="2">User 2</option>
									<option value="3">User 3</option>
								</select>
							</div>
							<button class="btn btn-primary btn-block">Save</button>
						</form>
					</div>

					<div class="modal modal-default" id="m-company-status-REPLACE_ID" data-modal-width="400px" data-modal-title="Set Status to">
						<!-- @PLACELHOLDER: modify as needed -->
						<form action="">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="" class="input-label sr-only">Assign to User</label>
								<select name="company-status" id="" class="input-select">
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
							<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">

								<h5 class="company-name no-margin-y">
									<span class="REPLACE">Wright & Co. Law</span>
								</h5>
								<div class="company-domain text-wrap-ellipsis">
									<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
								</div>
							</a>
						</td>
						<td>
							<p class="company-description no-margin-bottom">
								<span class="REPLACE">Anything Agency</span>
							</p>
						</td>
						<td>
							<!-- @if has phone -->
								<a tel="#REPLACEwithPhoneNumber">
									<span class="RELPACE">(555) 555 - 5555</span>
								</a>
							<!-- @else -->
								<span class="color-neutral">
									Not Available
								</span>
						</td>
						<td class="text-align-center" width="120">
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td class="text-align-center" width="120">
							<p class="company-last-activity">
								<span class="REPLACE">04/20/69</span>
							</p>
						</td>
						<td class="text-align-center" width="100">
							<div class="company-clienttype text-align-center">
								<?php app_get_component('components/tag-clienttype') ?>
							</div>
						</td>
						<td class="text-align-center" width="50">
							<div class="company-actions position-relative">
								<?php app_get_component('components/dropdown-actions','',false,array(
									'links' => array(
										'Edit Details'
											=> 'class="dropdown-purger" href="#mb-editor-company" data-toggle-modal-board href="#mb-editor-company" data-modal-title="Edit company"',
										'Change Status'
											=> 'href="#m-company-status-'.$i.'" data-toggle-modal-default ',
										'Assign to User'
											=> 'href="#m-company-assigneduser-'.$i.'" data-toggle-modal-default"',
										'Delete'
											=> 'href="#"'
									)
								)) ?>

								<div class="modal modal-default" id="m-company-status-'.$i.'" data-modal-width="400px" data-modal-title="Set Status to">
									<form action="">
										<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
											<label for="" class="input-label sr-only">Change Status To</label>
											<select name="company-status" id="" class="input-select">
												<option value="">Select</option>
												<option value="client">Client</option>
												<option value="lead">Lead</option>
												<option value="prospect">Prospect</option>
											</select>
										</div>
										<button class="btn btn-primary btn-block">Save</button>
									</form>
								</div>

								<div class="modal modal-default" id="m-company-assigneduser-'.$i.'" data-modal-width="400px" data-modal-title="Assign To User">
									<!-- @PLACELHOLDER: modify as needed -->
									<form action="">
										<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
											<label for="" class="input-label sr-only">Assign to User</label>
											<select name="company-assigned" id="" class="input-select">
												<option value="">Select</option>
												<option value="1">User 1</option>
												<option value="2">User 2</option>
												<option value="3">User 3</option>
											</select>
										</div>
										<button class="btn btn-primary btn-block">Save</button>
									</form>
								</div>

								<div class="modal modal-default" id="m-company-status-'.$i.'" data-modal-width="400px" data-modal-title="Set Status to">
									<!-- @PLACELHOLDER: modify as needed -->
									<form action="">
										<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
											<label for="" class="input-label sr-only">Assign to User</label>
											<select name="company-status" id="" class="input-select">
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

</div>