
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-md-4">
		<h1 class="no-margin">Companies</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
		<div class="module-function">
			<a  href="#mb-editor-company" data-modal-title="Add company" data-toggle-modal-board class="btn btn-primary btn-block-mobile">
				Add New <i class="symbol symbol-plus"></i>
			</a>
		</div>
	</div>
</div>

<div id="outreach-companies" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/function-filter-companies') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<!--
				th a
					@NOTE: for sortable column headers
					classes to add

					`` => if column is sorted descending
					`active` => if column is sorted ascending

				th a i
					classes to add
					`display-none` => if column is not set to sort
			-->
			<th class="filter-sortable text-nowrap">
				<a href="#" class="color-inherit text-decoration-none">
					Name <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="text-nowrap">
				Description
			</th>
			<th class="text-nowrap">
				Phone
			</th>
			<th class="text-nowrap text-align-center" width="120">
				Acct Owner
			</th>
			<th class="filter-sortable text-nowrap text-align-center" width="120">
				<a href="#" class="color-inherit text-decoration-none">
					Last Activity <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="text-nowrap text-align-center" width="100">
				Type
			</th>
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
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
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
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
				<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
					<?php app_get_component('components/profile-image-micro') ?>
				</a>
			</td>
			<td class="text-align-center" width="120">
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
				<p class="company-last-activity">
					<span class="REPLACE">04/20/69</span>
				</p>
			</td>
			<td class="text-align-center" width="100">
				<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
				<div class="company-clienttype">
					<?php app_get_component('components/tag-clienttype') ?>
				</div>
			</td>
			<td class="outreach-table-cell-actions text-align-center" width="50">
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
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Phone</span>
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
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td class="text-align-center" width="120">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
							<p class="company-last-activity">
								<span class="REPLACE">04/20/69</span>
							</p>
						</td>
						<td class="text-align-center" width="100">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Type</span>
							<div class="company-clienttype">
								<?php app_get_component('components/tag-clienttype') ?>
							</div>
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
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

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">
			<?php app_get_component('components/pagination-view-per-page') ?>
			<?php app_get_component('components/pagination') ?>
		</div>
	</div>

</div>