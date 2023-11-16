
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		<div class="module-functions">

			
				<?php app_get_component('components/function-input-search') ?>

			<div class="module-function function-add">
				<a href="<?= app_create_link(array('template' => 'prospect-list-new')) ?>" class="btn btn-primary btn-block-mobile">
					Add New&nbsp;<i class="symbol symbol-plus"></i>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="outreach-prospect-lists" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<table class="table-fixed outreach-table">
		<tr>
			<th class="text-align-center" width="50">
				<label class="input-label">
					<input type="checkbox" class="input-inline" name="allCompaniesSelected">
					<span class="hide-nonmobile">Select all prospect lists</span>
				</label>
            </th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk Remove from Prospect List'
								 => 'href="#"',
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
			<th class="text-nowrap">
				Date
			</th>
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
			<th class="text-nowrap text-align-center">
				List Size
			</th>
			<th class="text-nowrap text-align-center" width="120">
				Created By
			</th>
			<th class="text-nowrap text-align-center" width="200">
				Shared with
			</th>
			<th class="text-nowrap text-align-center">
				Pitched
			</th>
			<th class="text-nowrap text-align-center">
				Deals
			</th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				<div class="bulk-actions position-relative">
					<?php app_get_component('components/modal-actions','',false,array(
						'links' => array(
							'Bulk Remove from Prospect List'
								 => 'href="#"',
							'Delete Selected'
								=> 'href="#"',
						)
					)) ?>
				</div>
			</th>
		</tr>

		<!-- @LOOP row -->
			<tr>
				<td class="text-align-center">
					<label class="input-label">
						<input type="checkbox" class="input-inline" name="allCompaniesSelected">
						<span class="hide-nonmobile">Select company</span>
					</label>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
				<td>
					<p class="no-margin-bottom">
						<span class="REPLACE">06/12/1898</span>
					</p>
				</td>
				<td>
					<div class="text-wrap-ellipsis">

						<a class="color-inherit" href="<?= app_create_link(array('template'=>'prospect-list-items')) ?>">
							<span class="REPLACE">List name</span>
						</a>

					</div>
				</td>
				<td class="text-align-center" >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">List Size</span>
					<span class="REPLACE">420</span>
				</td>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created By</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center" width="120">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Shared With</span>
					<!-- @if has user assigned -->
						<div class="thumbnail-cluster">
								<!-- @query limit to 3 user results -->

									<!-- @if theres 3 or less assignees -->
											<!-- @loop <component> -->
											<?php app_get_component('components/profile-image-micro','',false,array(
													'image' => FWAPPS_ROOT_URL.'/placeholder/profiles/team-des-jenn.jpg',
												)); ?>

									<!-- @else if theres more than 3 assignees -->
										<!-- @NOTE first 2 users only -->
											<?php app_get_component('components/profile-image-micro'); ?>
											<?php app_get_component('components/profile-image-micro'); ?>
										<!-- @NOTE: the rest of the assignees -->
										<span class="thumbnail thumbnail-micro">
											<span class="thumbnail-text profile-name-initial">
												
												+<span class="REPLACE">20</span>
											</span>
										
										</span>
						</div>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pitched</span>
					<span class="REPLACE">2</span>
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deals</span>
					<span class="REPLACE">2</span>
				</td>
				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Delete'
									=> 'href="#"'
							)
						)) ?>
					</div>
				</td>
			</tr>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=4; $i++){ ?>
					<tr>
						<td class="text-align-center">
							<label class="input-label">
								<input type="checkbox" class="input-inline" name="allCompaniesSelected">
								<span class="hide-nonmobile">Select company</span>
							</label>
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="company-actions position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Edit'
											=> 'href="#"',
										'Delete'
											=> 'href="#"'
									)
								)) ?>
							</div>
						</td>
						<td>
							<p class="no-margin-bottom">
								<span class="REPLACE">06/12/1898</span>
							</p>
						</td>
						<td>
							<div class="text-wrap-ellipsis">

								<a class="color-inherit" href="<?= app_create_link(array('template'=>'prospect-list-items')) ?>">
									<span class="REPLACE">List name</span>
								</a>

							</div>
						</td>
						<td class="text-align-center" >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">List Size</span>
							<span class="REPLACE">420</span>
						</td>
						<td class="text-align-center" width="120">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Created By</span>
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td class="text-align-center" width="120">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Shared With</span>
							<!-- @if has user assigned -->
								<div class="thumbnail-cluster">
										<!-- @query limit to 3 user results -->
												<!-- @NOTE first 2 users only -->
													<?php app_get_component('components/profile-image-micro'); ?>
													<?php app_get_component('components/profile-image-micro'); ?>
												<!-- @NOTE: the rest of the assignees -->
												<span class="thumbnail thumbnail-micro">
													<span class="thumbnail-text profile-name-initial">
														
														+<span class="REPLACE">20</span>
													</span>
												
												</span>
								</div>
						</td>
						<td class="text-align-center">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pitched</span>
							<span class="REPLACE">2</span>
						</td>
						<td class="text-align-center">
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deals</span>
							<span class="REPLACE">2</span>
						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="company-actions position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Edit'
											=> 'href="#"',
										'Delete'
											=> 'href="#"'
									)
								)) ?>
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