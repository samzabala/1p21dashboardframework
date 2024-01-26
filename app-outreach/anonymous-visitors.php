
<div id="outreach-anonymous-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12 flex-col-sm-4">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
	</div>
	<div class="flex-col-xs-12 flex-col-sm-4 text-align-right">
		<?php app_get_component('components/function-input-search') ?>
	</div>
</div>

<div id="outreach-anonymous" class="module">

	<div class="module-header">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-flex-end">

			<hr class="hide-nonmobile">


			<div class="module-function margin-auto-right">
				<div class="input-wrapper input-wrapper-horizontal input-wrapper-responsive input-wrapper-block-mobile position-relative">
					<span class="input-label">Time Period</span>
					<a href="#" data-toggle-dropdown class="input input-select input-block-mobile text-decoration-none">
						<span class="REPLACE">Dec 1</span>
						-
						<span class="REPLACE">Dec 15</span>
					</a>
					<div class="dropdown dropdown-top-flush dropdown-left">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="" class="input-label">From</label>
							<input type="date" class="input input-single-line">
						</div>
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="" class="input-label">To</label>
							<input type="date" class="input input-single-line">
						</div>
						<div class="text-align-right">
							<button class="btn btn-primary">Apply </button>
						</div>
					</div>
				</div>
			</div>

			
			<?php app_get_component('components/pagination-view-per-page') ?>

			<?php app_get_component('components/pagination') ?>
		</div>
	</div>

	<div class="module-content no-padding-x border-width-thin-bottom border-style-solid-bottom border-color-neutral-alpha-2">

			<div class="table-wrapper">

				<table class="outreach-table text-vertical-align-middle">
					<tr>
						<th class="text-align-center padding-left" width="50">
							<label class="input-label">
								<input type="checkbox" class="input-inline" name="allCompaniesSelected">
								<span class="hide-nonmobile">Select all rows</span>
							</label>
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
							Website
						</th>
						<th class="text-nowrap">
							Last Seen
						</th>
						<th class="text-nowrap">
							Entry Page URL
						</th>
						<th class="text-nowrap">
							Company Size
						</th>
						<th class="text-nowrap">
							Info
						</th>
						<th class="text-nowrap text-align-center" width="120">
							&nbsp; <span class="sr-only">Details</span>
						</th>
						<th class="outreach-table-cell-actions text-align-center" width="50">
							<div class="bulk-actions position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Bulk add Prospect'
											=> 'href="#"',
										'Bulk add new Company'
											=> 'href="#"'
									)
								)) ?>
							</div>
						</th>
					</tr>

					<!-- @LOOP tbody -->
					<tbody>
						<tr>
							<td class="text-align-center padding-left" >
								<label class="input-label">
									<input type="checkbox" class="input-inline" name="allCompaniesSelected">
									<span class="hide-nonmobile">Select row</span>
								</label>
							</td>
							<td class="outreach-table-cell-columnwidth-200">
								<a class="color-inherit flex-grid flex-nowrap align-items-center flex-grid-no-gutter-y" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
								<div class="flex-child flex-0-0">
									<div class="ratio ratio-1-by-1 radius-small outreach-favicon-size-32">
										<!-- @if has image -->
											<!-- @REPLACE url with image file's url -->
											<img src="/placeholder/files/shrek.jpg" alt="" class="ratio-child-cover">
										<!-- @else -->
											<img src="<?= app_get_uri() ?>/assets/images/icon-favicon-fallback.svg" alt="" class="ratio-child-cover">
									</div>

								</div>
								<div class="flex-child flex-1-1">
									<h5 class="no-margin-y text-leading-whole">
										<span class="REPLACE">Wright & Co. Law</span>
									</h5>
									<div>
										<span class="REPLACE">San Diego, CA</span>
									</div>
								</div>
								</a>
							</td>
							<td class="outreach-table-cell-columnwidth-200">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Seen</span>
								<a href="#" class="no-margin-bottom text-wrap-ellipsis">
									<span class="REPLACE">ace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorney.com</span>
								</a>
							</td>
							<td width="80">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Seen</span>
								
								<div>
									<strong>
										<span class="REPLACE">06/12/1898</span>
									</strong>
									<div>
										<span class="REPLACE">6:09 AM</span>
									</div>
								</div>
							</td>
							<td class="outreach-table-cell-columnwidth-200">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Entry Page URL</span>
								<a href="#" class="text-wrap-ellipsis">
									<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
								</a>
							</td>
							<td width="80">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company Size</span>
								<p class="no-margin">
									<span class="REPLACE">11-50 Employees</span>
								</p>
							</td>
							<td class="outreach-table-cell-columnwidth-200">
								<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Info</span>
								<div class="inline-flex-xs">
									<!-- @if has google -->
										<a href="#REPLACE" class="color-neutral">
											<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-google-currentColor.svg" alt="" />
										</a>
									<!-- @if has facebook -->
										<a href="#REPLACE" class="color-neutral  margin-left">
											<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-facebook-currentColor.svg" alt="" />
										</a>
									<!-- @if has linkedin -->
										<a href="#REPLACE" class="color-neutral margin-left">
											<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-linkedin-currentColor.svg" alt="" />
										</a>
									<!-- @if has twitter -->
										<a href="#REPLACE" class="color-neutral margin-left">
											<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-twitter-currentColor.svg" alt="" />
										</a>
								</div>
							</td>
							<td width="80" class="text-align-right">
								<a href="#anonymous-row-REPLACEID" data-toggle-accordion class="color-inherit text-decoration-none display-inline-block">
									<span class="btn btn-symbol btn-neutral-glassy btn-round">
										<i class="symbol symbol-arrow-down symbol-toggle-arrow-up"></i>
									</span>
									<span class="hide-nonmobile">&nbsp;More info</span>
								</a>
							</td>
							<td class="outreach-table-cell-actions text-align-center" width="50">
								<div class="position-relative">
									<?php app_get_component('components/modal-actions','',false,array(
										'links' => array(
											'Add Prospect'
												=> 'href="#"',
											'Add new Company'
												=> 'href="#"'
										)
									)) ?>
								</div>
							</td>
						</tr>
						<tr id="anonymous-row-REPLACEID" class="accordion background-neutral-alpha-1">
							<td colspan="9" class="padding-x padding-large-top padding-small-bottom">
								<!-- @if has pages visited rows -->


									<!-- @loop div -->
										<div class="p">
											<div class="module margin-micro-bottom">
												<div class="module-content">
													<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-center">
														<div class="flex-child flex-0-0">
															<!-- @NOTE
																classes to add:
																	btn-secondary => if from adword ads
																	btn-success => another option if any
																	btn-primary => another option if any
																	btn-accent => another option if any
																	btn-warning => another option if any
																	btn-error => another option if any
																	btn-neutral => another option if any
																	
															-->
															<span class="btn btn-no-interaction btn-round btn-secondary btn-symbol">
																<?php app_get_component('components/icon-av-visitor'); ?>
															</span>
														</div>
														<div class="flex-child flex-1-1">
															<h4 class="no-margin-y">
																Person <span class="REPLACE">#1</span> viewed <span class="REPLACE">69</span> pages via <span class="REPLACE">adword ads</span>
															</h4>

															<strong>Location:</strong>
															<span class="REPLACE">San Diego, CA</span>
															|
															<strong>Started:</strong>
															<span class="REPLACE">03:00am</span>
															|
															<strong>Total Visit Time:</strong>
															<span class="REPLACE">200m 6s</span>

														</div>
													</div>
												</div>
											</div>
											<div class="module margin-micro-bottom">
												<div class="module-content">
													<strong>Source:</strong>
													<span class="REPLACE">Google</span>
													|
													<strong>Medium:</strong>
													<span class="REPLACE">cpc</span>
													|
													<strong>Referring URL:</strong>
													<span class="REPLACE">unknown</span>
												</div>
											</div>
											<div class="module">
												<div class="module-content no-padding-x">
													

													<table class="table-fixed outreach-table text-vertical-align-middle">
														<tr>
															<th>
																Pages Visited
															</th>
															<th width="100">
																Visit Time
															</th>
														</tr>

														<!-- @loop tr -->
															<tr>
																<td>
																	<a href="#REPLACE" class="text-wrap-ellipsis">
																		<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																	</a>
																</td>
																<td>
																	<span class="REPLACE">1000m 2s</span>
																</td>
															</tr>



															<!-- @PLACEHOLDER: DELETE WHEN READY -->
																<?php for($k=1; $k<=12; $k++){ ?>
																	<tr>
																		<td>
																			<a href="#REPLACE" class="text-wrap-ellipsis">
																				<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																			</a>
																		</td>
																		<td>
																			<span class="REPLACE">1000m 2s</span>
																		</td>
																	</tr>
																
																<?php } ?>

													</table>
												</div>
											</div>
										</div>

									<!-- @PLACEHOLDER: DELETE WHEN READY -->
										<?php for($j=1; $j<=2; $j++){ ?>
											
											<div class="p">
												<div class="module margin-micro-bottom">
													<div class="module-content">
														<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-center">
															<div class="flex-child flex-0-0">
																<!-- @NOTE
																	classes to add:
																		btn-secondary => if from adword ads
																		btn-success => another option if any
																		btn-primary => another option if any
																		btn-accent => another option if any
																		btn-warning => another option if any
																		btn-error => another option if any
																		btn-neutral => another option if any
																		
																-->
																<span class="btn btn-no-interaction btn-round btn-secondary btn-symbol">
																	<?php app_get_component('components/icon-av-visitor'); ?>
																</span>
															</div>
															<div class="flex-child flex-1-1">
																<h4 class="no-margin-y">
																	Person <span class="REPLACE">#<?= $j + 1 ?></span> viewed <span class="REPLACE">69</span> pages via <span class="REPLACE">adword ads</span>
																</h4>

																<strong>Location:</strong>
																<span class="REPLACE">San Diego, CA</span>
																|
																<strong>Started:</strong>
																<span class="REPLACE">03:00am</span>
																|
																<strong>Total Visit Time:</strong>
																<span class="REPLACE">200m 6s</span>

															</div>
														</div>
													</div>
												</div>
												<div class="module margin-micro-bottom">
													<div class="module-content">
														<strong>Source:</strong>
														<span class="REPLACE">Google</span>
														|
														<strong>Medium:</strong>
														<span class="REPLACE">cpc</span>
														|
														<strong>Referring URL:</strong>
														<span class="REPLACE">unknown</span>
													</div>
												</div>
												<div class="module">
													<div class="module-content no-padding-x">
														

														<table class="table-fixed outreach-table text-vertical-align-middle">
															<tr>
																<th>
																	Pages Visited
																</th>
																<th width="100">
																	Visit Time
																</th>
															</tr>

															<!-- @loop tr -->
																<tr>
																	<td>
																		<a href="#REPLACE" class="text-wrap-ellipsis">
																			<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																		</a>
																	</td>
																	<td>
																		<span class="REPLACE">1000m 2s</span>
																	</td>
																</tr>



																<!-- @PLACEHOLDER: DELETE WHEN READY -->
																	<?php for($k=1; $k<=12; $k++){ ?>
																		<tr>
																			<td>
																				<a href="#REPLACE" class="text-wrap-ellipsis">
																					<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																				</a>
																			</td>
																			<td>
																				<span class="REPLACE">1000m 2s</span>
																			</td>
																		</tr>
																	
																	<?php } ?>

														</table>
													</div>
												</div>
											</div>
										<?php } ?>
							</td>
						</tr>
					</tbody>

						<!-- @PLACEHOLDER: DELETE WHEN READY -->
							<?php for($i=1; $i<=12; $i++){ ?>
								<tbody>
									<tr>
										<td class="text-align-center padding-left" >
											<label class="input-label">
												<input type="checkbox" class="input-inline" name="allCompaniesSelected">
												<span class="hide-nonmobile">Select row</span>
											</label>
										</td>
										<td>
											<a class="color-inherit flex-grid flex-nowrap align-items-center flex-grid-no-gutter-y" href="<?= app_create_link(array('template'=>'company-detail')) ?>">
											<div class="flex-child flex-0-0">
												<div class="ratio ratio-1-by-1 radius-small outreach-favicon-size-32">
													<?php if($i % 2 > 0 ): ?>
														<img src="/placeholder/files/shrek.jpg" alt="" class="ratio-child-cover">
													<?php else: ?>
														<img src="<?= app_get_uri() ?>/assets/images/icon-favicon-fallback.svg" alt="" class="ratio-child-cover">
													<?php endif; ?>

												</div>

											</div>
											<div class="flex-child flex-1-1">
												<h5 class="no-margin-y text-leading-whole">
													<span class="REPLACE">Wright & Co. Law</span>
												</h5>
												<div>
													<span class="REPLACE">San Diego, CA</span>
												</div>
											</div>
											</a>
										</td>
										<td width="150">
											<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Seen</span>
											<a href="#" class="no-margin-bottom text-wrap-ellipsis">
												<span class="REPLACE">ace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorneyace-attorney.com</span>
											</a>
										</td>
										<td width="80">
											<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Seen</span>
											
											<div>
												<strong>
													<span class="REPLACE">06/12/1898</span>
												</strong>
												<div>
													<span class="REPLACE">6:09 AM</span>
												</div>
											</div>
										</td>
										<td width="150">
											<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Entry Page URL</span>
											<a href="#" class="text-wrap-ellipsis">
												<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
											</a>
										</td>
										<td width="80">
											<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Company Size</span>
											<p class="no-margin">
												<span class="REPLACE">11-50 Employees</span>
											</p>
										</td>
										<td>
											<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Info</span>
											<div class="inline-flex-xs">
												<!-- @if has google -->
													<a href="#REPLACE" class="color-neutral">
														<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-google-currentColor.svg" alt="" />
													</a>
												<!-- @if has facebook -->
													<a href="#REPLACE" class="color-neutral margin-left">
														<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-facebook-currentColor.svg" alt="" />
													</a>
												<!-- @if has linkedin -->
													<a href="#REPLACE" class="color-neutral margin-left">
														<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-linkedin-currentColor.svg" alt="" />
													</a>
												<!-- @if has twitter -->
													<a href="#REPLACE" class="color-neutral margin-left">
														<img class="lazy lazy-svg only-hover" data-src="<?=app_get_uri(); ?>/assets/images/icon-twitter-currentColor.svg" alt="" />
													</a>
											</div>
										</td>
										<td width="80" class="text-align-right">
											<a href="#anonymous-row-<?= $i ?>" data-toggle-accordion class="color-inherit text-decoration-none display-inline-block">
												<span class="btn btn-symbol btn-neutral-glassy btn-round">
													<i class="symbol symbol-arrow-down symbol-toggle-arrow-up"></i>
												</span>
												<span class="hide-nonmobile">&nbsp;More info</span>
											</a>
										</td>
										<td class="outreach-table-cell-actions text-align-center" width="50">
											<div class="position-relative">
												<?php app_get_component('components/modal-actions','',false,array(
													'links' => array(
														'Add Prospect'
															=> 'href="#"',
														'Add new Company'
															=> 'href="#"'
													)
												)) ?>
											</div>
										</td>
									</tr>
									<tr id="anonymous-row-<?= $i ?>" class="accordion background-neutral-alpha-1">
										<td colspan="9" class="padding-x padding-large-top padding-small-bottom">
											<!-- @if has pages visited rows -->


												<!-- @loop div -->
													<div class="p">
														<div class="module margin-micro-bottom">
															<div class="module-content">
																<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-center">
																	<div class="flex-child flex-0-0">
																		<!-- @NOTE
																			classes to add:
																				btn-secondary => if from adword ads
																				btn-success => another option if any
																				btn-primary => another option if any
																				btn-accent => another option if any
																				btn-warning => another option if any
																				btn-error => another option if any
																				btn-neutral => another option if any
																				
																		-->
																		<span class="btn btn-no-interaction btn-round btn-secondary btn-symbol">
																			<?php app_get_component('components/icon-av-visitor'); ?>
																		</span>
																	</div>
																	<div class="flex-child flex-1-1">
																		<h4 class="no-margin-y">
																			Person <span class="REPLACE">#1</span> viewed <span class="REPLACE">69</span> pages via <span class="REPLACE">adword ads</span>
																		</h4>

																		<strong>Location:</strong>
																		<span class="REPLACE">San Diego, CA</span>
																		|
																		<strong>Started:</strong>
																		<span class="REPLACE">03:00am</span>
																		|
																		<strong>Total Visit Time:</strong>
																		<span class="REPLACE">200m 6s</span>

																	</div>
																</div>
															</div>
														</div>
														<div class="module margin-micro-bottom">
															<div class="module-content">
																<strong>Source:</strong>
																<span class="REPLACE">Google</span>
																|
																<strong>Medium:</strong>
																<span class="REPLACE">cpc</span>
																|
																<strong>Referring URL:</strong>
																<span class="REPLACE">unknown</span>
															</div>
														</div>
														<div class="module">
															<div class="module-content no-padding-x">
																

																<table class="table-fixed outreach-table text-vertical-align-middle">
																	<tr>
																		<th>
																			Pages Visited
																		</th>
																		<th width="100">
																			Visit Time
																		</th>
																	</tr>

																	<!-- @loop tr -->
																		<tr>
																			<td>
																				<a href="#REPLACE" class="text-wrap-ellipsis">
																					<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																				</a>
																			</td>
																			<td>
																				<span class="REPLACE">1000m 2s</span>
																			</td>
																		</tr>



																		<!-- @PLACEHOLDER: DELETE WHEN READY -->
																			<?php for($k=1; $k<=12; $k++){ ?>
																				<tr>
																					<td>
																						<a href="#REPLACE" class="text-wrap-ellipsis">
																							<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																						</a>
																					</td>
																					<td>
																						<span class="REPLACE">1000m 2s</span>
																					</td>
																				</tr>
																			
																			<?php } ?>

																</table>
															</div>
														</div>
													</div>

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($j=1; $j<=2; $j++){ ?>
														
														<div class="p">
															<div class="module margin-micro-bottom">
																<div class="module-content">
																	<div class="flex-grid flex-grid-fixed flex-grid-compact align-items-center">
																		<div class="flex-child flex-0-0">
																			<!-- @NOTE
																				classes to add:
																					btn-secondary => if from adword ads
																					btn-success => another option if any
																					btn-primary => another option if any
																					btn-accent => another option if any
																					btn-warning => another option if any
																					btn-error => another option if any
																					btn-neutral => another option if any
																					
																			-->
																			<span class="btn btn-no-interaction btn-round btn-secondary btn-symbol">
																				<?php app_get_component('components/icon-av-visitor'); ?>
																			</span>
																		</div>
																		<div class="flex-child flex-1-1">
																			<h4 class="no-margin-y">
																				Person <span class="REPLACE">#<?= $j + 1 ?></span> viewed <span class="REPLACE">69</span> pages via <span class="REPLACE">adword ads</span>
																			</h4>

																			<strong>Location:</strong>
																			<span class="REPLACE">San Diego, CA</span>
																			|
																			<strong>Started:</strong>
																			<span class="REPLACE">03:00am</span>
																			|
																			<strong>Total Visit Time:</strong>
																			<span class="REPLACE">200m 6s</span>

																		</div>
																	</div>
																</div>
															</div>
															<div class="module margin-micro-bottom">
																<div class="module-content">
																	<strong>Source:</strong>
																	<span class="REPLACE">Google</span>
																	|
																	<strong>Medium:</strong>
																	<span class="REPLACE">cpc</span>
																	|
																	<strong>Referring URL:</strong>
																	<span class="REPLACE">unknown</span>
																</div>
															</div>
															<div class="module">
																<div class="module-content no-padding-x">
																	

																	<table class="table-fixed outreach-table text-vertical-align-middle">
																		<tr>
																			<th>
																				Pages Visited
																			</th>
																			<th width="100">
																				Visit Time
																			</th>
																		</tr>

																		<!-- @loop tr -->
																			<tr>
																				<td>
																					<a href="#REPLACE" class="text-wrap-ellipsis">
																						<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																					</a>
																				</td>
																				<td>
																					<span class="REPLACE">1000m 2s</span>
																				</td>
																			</tr>



																			<!-- @PLACEHOLDER: DELETE WHEN READY -->
																				<?php for($k=1; $k<=12; $k++){ ?>
																					<tr>
																						<td>
																							<a href="#REPLACE" class="text-wrap-ellipsis">
																								<span class="REPLACE">www.ilawyermarketing.com/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long/this-is-a-long-permalink-so-long-waow-wowee-gee-golly-yes-much-long</span>
																							</a>
																						</td>
																						<td>
																							<span class="REPLACE">1000m 2s</span>
																						</td>
																					</tr>
																				
																				<?php } ?>

																	</table>
																</div>
															</div>
														</div>
													<?php } ?>
										</td>
									</tr>
								</tbody>
								
							<?php } ?>
				</table>
			</div>
	</div>

	<div class="module-footer">
		<div class="module-functions no-margin no-padding flex-xs flex-wrap justify-content-space-between">

							
			
			<div class="module-function margin-auto-right">
				<span>
					<span class="REPLACE">100</span>
					/
					<span class="REPLACE">1256</span>
					Anyonymous Visitors | <a href="#">View All</a>
				</span>
			</div>	
			
			<div class="module-function no-margin-y">
				<?php app_get_component('components/pagination-view-per-page') ?>
			</div>

			<div class="module-function no-margin-y">
				<?php app_get_component('components/pagination') ?>
			</div>
		</div>
	</div>

</div>