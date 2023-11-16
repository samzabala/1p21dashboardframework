
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		
		<?php app_get_component('components/function-input-search') ?>
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
				<th class="text-nowrap" width="120">
					&nbsp;<span class="sr-only">Account Owner</span>
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
				<th class="text-nowrap">
					Progression
				</th>
				<th class="text-align-center text-nowrap">
					Total Time
				</th>
			</tr>
	
			<!-- @LOOP row -->
			<tr>
				<td class="text-align-center outreach-table-cell-columnwidth-50">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="outreach-table-cell-columnwidth-200">
					<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
	
						<h5 class="company-name no-margin-y">
							<span class="REPLACE">Wright & Co. Law</span>
						</h5>
						<div class="company-domain text-wrap-ellipsis">
							<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
						</div>
					</a>
				</td>
				<td class="">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Progress</span>
					
					<div class="inline-flex-xs outreach-mobile-scroll-x padding-small-y">

						<!-- @loop .flex-xs -->
							<div class="flex-xs align-items-center padding-right">
								<!-- @if not the first item -->
									<!-- @NOTE: commented out only for front demo to not look ugly -->
									<!-- <div class="font-size-large margin-right"><i class="symbol symbol-arrow-right"></i></div> -->

								<div>
									<!-- @NOTE
										.tag
										classes to add => task status tag
										replicate as is in app:  https://sales-outreach.1p21.io/crm/companies/
								
									-->
									<span class="tag tag-small tag-primary">
										<span class="REPLACE">Status</span>
									</span>
									<div class="REPLACE">06/12/1898</div>
								</div>
							</div>

							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<?php for($i=1; $i<=5; $i++){ ?>

									<!-- @loop .flex-xs -->
										<div class="flex-xs align-items-center padding-right">
											<!-- @if not the first item -->
												<div class="font-size-large margin-right"><i class="symbol symbol-arrow-right"></i></div>

											<div>
												<span class="tag tag-small tag-primary">
													<span class="REPLACE">Status</span>
												</span>
												<div class="REPLACE">06/12/1898</div>
											</div>
										</div>
								
								<?php } ?>
					</div>
				</td>
				<td class="text-align-center outreach-table-cell-columnwidth-100">
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Total Time</span>
					<span class="REPLACE">69 Days</span>
				</td>
			</tr>
	
				<!-- @PLACEHOLDER: DELETE WHEN READY -->
					<?php for($j=1; $j<=4; $j++){ ?>

						<tr>
							<td class="text-align-center outreach-table-cell-columnwidth-50">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Account Owner</span>
								<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
									<?php app_get_component('components/profile-image-micro') ?>
								</a>
							</td>
							<td class="outreach-table-cell-columnwidth-200">
								<a class="color-inherit" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
				
									<h5 class="company-name no-margin-y">
										<span class="REPLACE">Wright & Co. Law</span>
									</h5>
									<div class="company-domain text-wrap-ellipsis">
										<span class="REPLACE">ace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.comace-attorney.com</span>
									</div>
								</a>
							</td>
							<td class="">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Progress</span>
								
								<div class="inline-flex-xs outreach-mobile-scroll-x padding-small-y">

									<!-- @loop .flex-xs -->
										<div class="flex-xs align-items-center padding-right">
											<!-- @if not the first item -->
												<!-- @NOTE: commented out only for front demo to not look ugly -->
												<!-- <div class="font-size-large margin-right"><i class="symbol symbol-arrow-right"></i></div> -->

											<div>
												<!-- @NOTE
													.tag
													classes to add => task status tag
													replicate as is in app:  https://sales-outreach.1p21.io/crm/companies/
											
												-->
												<span class="tag tag-small tag-primary">
													<span class="REPLACE">Status</span>
												</span>
												<div class="REPLACE">06/12/1898</div>
											</div>
										</div>

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<= rand(4, 8); $i++){ ?>

												<!-- @loop .flex-xs -->
													<div class="flex-xs align-items-center padding-right">
														<!-- @if not the first item -->
															<div class="font-size-large margin-right"><i class="symbol symbol-arrow-right"></i></div>

														<div>
															<span class="tag tag-small tag-primary">
																<span class="REPLACE">Status</span>
															</span>
															<div class="REPLACE">06/12/1898</div>
														</div>
													</div>
											
											<?php } ?>
								</div>
							</td>
							<td class="text-align-center outreach-table-cell-columnwidth-100">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Total Time</span>
								<span class="REPLACE">69 Days</span>
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