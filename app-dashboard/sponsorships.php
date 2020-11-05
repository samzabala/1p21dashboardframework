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
				<div class="flex-grid align-items-center justify-content-space-between flex-grid-fixed">
					<div class="flex-child flex-1-1">
						<?php app_get_component('components/filter-sponsorships'); ?>
					</div>
					<div class="flex-child">
						<a href="#" class="btn btn-primary btn-symbol">
							<i class="symbol symbol-plus"></i>
						</a>
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
							<th class="dashboard-table-cell-max text-nowrap" >Website &amp; Url</th>
							<th class="text-nowrap">DA</th>
							<th class="text-nowrap">PA</th>
							<th class="text-nowrap">Cost</th>
							<th class="dashboard-table-cell-max text-nowrap">Client/ Linked Paged</th>
							<th class="text-nowrap">Anchor</th>
							<th class="text-nowrap">Created By</th>
							<th class="text-nowrap">Geo Area</th>
							<th class="dashboard-table-cell-date text-align-center text-nowrap">Date Added</th>
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

								<td class="dashboard-table-cell-max ">
									<span class="text-leading-compact">
										<span class="row-client-name display-block text-wrap-ellipsis">
											<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name </span>
										</span>
										<a href="#REPLACE" target="_blank" class="row-linkedpage display-block no-margin text-wrap-ellipsis">
											<span class="REPLACE">http://domain.com/something-somthing/oooeee/this-url-is-long</span>
										</a>
									</span>
								</td>

								<td class="dashboard-table-cell-max ">
									
									<span class="row-anchor display-block text-wrap-ellipsis">
										<span class="REPLACE">Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text </span>
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

								<td class="dashboard-table-cell-date text-align-center">
									<span class="row-date-added">
										<span class="REPLACE">4/20/69</span>
									</span>
								</td>

							</tr>

							<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=10; $i++){ ?>

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

											<td class="dashboard-table-cell-max ">
												<span class="text-leading-compact">
													<span class="row-client-name display-block text-wrap-ellipsis">
														<span class="REPLACE">Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name </span>
													</span>
													<a href="#REPLACE" target="_blank" class="row-linkedpage display-block no-margin text-wrap-ellipsis">
														<span class="REPLACE">http://domain.com/something-somthing/oooeee/this-url-is-long</span>
													</a>
												</span>
											</td>

											<td class="dashboard-table-cell-max ">
												
												<span class="row-anchor display-block text-wrap-ellipsis">
													<span class="REPLACE">Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text Really long anchor text </span>
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

											<td class="">
												<span class="row-date-added">
													<span class="REPLACE">4/20/69</span>
												</span>
											</td>

										</tr>
									<?php } ?>




					</table>
				</div>
			</div>
		</div>
</div>