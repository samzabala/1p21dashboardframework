
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		
		<?php app_get_component('components/function-filter-date-range') ?>
	</div>
</div>

<div id="outreach-companies" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

			<hr class="hide-nonmobile">
			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>
	<div class="table-wrapper">

		<table class="outreach-table text-vertical-align-middle">
			<tr>
				<th class="outreach-table-mobile-th text-align-center" width="50">
					<label class="input-label">
						<input type="checkbox" class="input-inline">
						<span class="hide-nonmobile">Select all Profiles</span>
					</label>
				</th>
				<th class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Selected'
									=> 'href="#"',
								'Delete Selected'
									=> 'href="#"',
							)
						)) ?>
					</div>
				</th>
				<th class="text-nowrap" width="120">
					&nbsp;<span class="sr-only">Profile Image</span>
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
				<th class="text-align-center">
					Leads Given
				</th>
				<th class="text-align-center">
					Pitched
				</th>
				<th class="text-align-center">
					Deals closed
				</th>
				<th class="text-align-center">
					Deal Monthly Value
				</th>
				<th class="text-align-center">
					Lead Close %
				</th>
				<th class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Selected'
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
						<span class="hide-nonmobile">Select Profile</span>
					</label>
				</td>

				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Delete'
									=> 'href="#"',
							)
						)) ?>
					</div>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-50">
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td>
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Name</span>
					<span class="REPLACE">Phoenix Wright</span>
				</td>
				<td class="text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Leads Given</span>
					<span class="REPLACE">10</span>
					
				</td>
				<td class="text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pitched</span>
					<span class="REPLACE">10</span>
					
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deals closed</span>
					<span class="REPLACE">69</span>
					
				</td>
				<td class="text-align-center">

					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deal Monthly Value</span>
					<span class="REPLACE">$69,420</span>
					
				</td>
				<td class="text-align-center">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Lead Close %</span>
					<span class="REPLACE">56%</span>
				</td>

				<td class="outreach-table-cell-actions text-align-center" width="50">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit'
									=> 'href="#"',
								'Delete'
									=> 'href="#"',
							)
						)) ?>
					</div>
				</td>
			</tr>
	
				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($j=1; $j<=4; $j++){ ?>

						<tr>
							<td class="text-align-center">
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select Profile</span>
								</label>
							</td>

							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit'
												=> 'href="#"',
											'Delete'
												=> 'href="#"',
										)
									)) ?>
								</div>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-50">
								<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td>
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Name</span>
								<span class="REPLACE">Phoenix Wright</span>
							</td>
							<td class="text-align-center">

								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Leads Given</span>
								<span class="REPLACE">10</span>
								
							</td>
							<td class="text-align-center">

								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Pitched</span>
								<span class="REPLACE">10</span>
								
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deals closed</span>
								<span class="REPLACE">69</span>
								
							</td>
							<td class="text-align-center">

								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Deal Monthly Value</span>
								<span class="REPLACE">$69,420</span>
								
							</td>
							<td class="text-align-center">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Lead Close %</span>
								<span class="REPLACE">56%</span>
							</td>

							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="company-actions position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Edit'
												=> 'href="#"',
											'Delete'
												=> 'href="#"',
										)
									)) ?>
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