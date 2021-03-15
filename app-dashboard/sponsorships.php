<div id="sponsorship" class="module-grid">
	<!-- HEADER -->
		<div id="sponsorship-heading" class="module">
			<div class="module-header">
				<div class="flex-xs align-items-center justify-content-space-between position-relative">
					<?php app_get_component('components/module-functions-accordion-toggle'); ?>

					<div class="flex-0-0">
						<h3 class="no-margin special-secondary text-clip-background background-gradient">Sponsorship Links</h3>
					</div>

					<div class="module-functions accordion accordion-mobile">
						<?php app_get_component('components/filter-dropdown-date-span'); ?>
					</div>
				</div>
			</div>
			<div class="module-content">
				<div class="flex-grid flex-grid-compact align-items-center justify-content-space-between flex-grid-fixed">
					<div class="flex-col-12">
						<div class="input-wrapper input-wrapper-vertical">
							<label class="input-toggle">
								<!-- <%= f.check_box :all_links, checked: params[:all_links].to_i == 1, class: 'input' %> -->
								<input type="checkbox" name="notifications_enabled" class="input" />
								<span class="input-label input-toggle-label">
									Show all links
								</span>
							</label>
						</div>
						<div class="input-wrapper input-wrapper-vertical">
							<label class="input-toggle">
								<!-- <%= f.check_box :duplicate_vendors, checked: params[:duplicate_vendors].to_i == 1, class: 'input' %> -->
								<input type="checkbox" name="notifications_enabled" class="input" />
								<span class="input-label input-toggle-label">
									Show duplicate link vendors
								</span>
							</label>
						</div>
					</div>
					<div class="flex-child flex-1-1">
						<?php app_get_component('components/filter-sponsorships'); ?>
					</div>
					<div class="flex-child">
						<a href="#sponsorship-form"  data-modal-title="Add New Sponsorship Link" data-toggle="modal" class="btn btn-primary btn-symbol">
							<i class="symbol symbol-plus"></i>
						</a>
						<?php app_get_component('components/modal-sponsorship-form'); ?>
					</div>
				</div>
			</div>
		</div>
	<!-- TABLE -->
		<div id="sponsorship-table" class="module">
			<div class="module-content">
				<div class="table-wrapper">

					<table class="table text-vertical-align-middle">
						<tr>
							<th class="dashboard-table-cell-max text-nowrap" >Website</th>
							<th class="text-nowrap">DA</th>
							<th class="text-nowrap">PA</th>
							<th class="text-nowrap">Fee</th>
							<th class="text-nowrap">Period</th>
							<th class="dashboard-table-cell-max text-nowrap">Link Vendor</th>
							<th class="text-nowrap">Created By</th>
							<th class="text-nowrap">Geo Area</th>
							<th class="dashboard-table-cell-max text-nowrap">Notes</th>
							<th class="dashboard-table-cell-date text-align-center text-nowrap">Date Added</th>
							<th class="dashboard-table-cell-action text-nowrap">&nbsp;<span class="sr-only">Actions</span></th>
						</tr>
						
						<!-- @LOOP TR-->
							<tr class="">

								<td class="dashboard-table-cell-max ">
									<span class="text-leading-compact">
										<span class="row-website display-block text-wrap-ellipsis">
											<span class="REPLACE">http://website.com</span>
										</span>
										<a href="#REPLACE" target="_blank" class="row-url display-block no-margin text-wrap-ellipsis">
											<span class="REPLACE">http://website.com/something-somthing/oooeee/this-url-is-long</span>
										</a>
									</span>
								</td>

								<td class="">
									<span class="row-da">
										<span class="REPLACE">69</span>
									</span>
								</td>

								<td class="">
									<span class="row-pa">
										<span class="REPLACE">420</span>
									</span>
								</td>

								<td class="">
									<span class="row-cost">
										<span class="REPLACE">$666</span>
									</span>
								</td>

								<td class="">
									<span class="row-period">
										<span class="REPLACE">One Time</span>
									</span>
								</td>

								<td class="dashboard-table-cell-max ">
									<span class="text-leading-compact">
										<span class="row-vendor display-block text-wrap-ellipsis">
											<span class="REPLACE">Vendor with a really long name Vendor with a really long name Vendor with a really long name Vendor with a really long name Vendor with a really long name Vendor with a really long name </span>
										</span>
									</span>
								</td>

								<td class="">
									<span class="row-creator">
										<span class="REPLACE">First Name Last Name</span>
									</span>
								</td>


								<td class="">
									<span class="row-geoarea">
										<span class="REPLACE">Daet, Camarines Norte</span>
									</span>
								</td>

								<td class="dashboard-table-cell-max">
									<?php app_get_component('components/table-modal-notes') ?>
								</td>

								<td class="dashboard-table-cell-date text-align-center">
									<span class="row-date-added">
										<span class="REPLACE">4/20/69</span>
									</span>
								</td>

								<td class="dashboard-table-cell-action">
									<?php app_get_component('components/tooltip-action-sponsorhip'); ?>
								</td>

							</tr>

							<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=10; $i++){ ?>


									<?php } ?>




					</table>
				</div>
			</div>
		</div>
</div>