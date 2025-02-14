
<div id="outreach-contacts-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-12  flex-col-md-8">
		<h1 class="no-margin">
			<?= ucwords(str_replace('-',' ',FWAPPS_TEMPLATE)) ?>
		</h1>
		<h3 class="color-primary no-margin-y">
			<span class="REPLACE">Google Organics</span>
			:
			<span class="REPLACE">New Clients</span>
		</h3>
	</div>
	<div class="flex-col-xs-12 flex-col-md-4 text-align-right">
		<div class="module-functions">
			<div class="module-function">
				<?php app_get_component('components/function-filter-date-range') ?>
			</div>

			<div class="module-function">
				<?php app_get_component('components/module-function-dropdown','',false,array(
					'label' => 'Filter By',
					'title' => 'Sales Rep',
					'count' => 1,
					'items' => array(
						'Yanni Yogi',
						'El Tigre',
						'Matt Engarde',
						'Frank Sahwit',
						'Dee Vasquez',
					),
				)) ?>
			</div>
		</div>
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
	<table class="table-fixed outreach-table">
		<tr>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				&nbsp;
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
			<th class="filter-sortable text-nowrap" width="200">
				<a href="#" class="color-inherit text-decoration-none">
					Name <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>

			<th class="text-nowrap text-align-center" width="120">
				Sales Rep
			</th>
			<th class="filter-sortable text-nowrap text-align-center" width="150">
				<a href="#" class="color-inherit text-decoration-none">
					Deal Closed Date <i class="symbol symbol-caret-down symbol-caret-up-toggle"></i>
				</a>
			</th>
			<th class="text-nowrap  text-align-center">
				MRR
			</th>
			<th class="text-nowrap">
				Lead Source
			</th>
			<th class="text-nowrap">
				Tags
			</th>
			<th class="outreach-table-cell-actions text-align-center" width="50">
				&nbsp;
			</th>
		</tr>

		<!-- @LOOP row -->
			<tr>
				<td class="outreach-table-cell-actions text-align-center">
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Status'
									=> 'class="dropdown-purger" href="#m-status-REPLACE_ID" data-toggle-modal-default',
								'Revoke Status'
									=> 'href="#"',
							)
						)) ?>


						<!--
						Imports JS:
						Modal from framework/src/js/imports/modal
						-->
						<div class="modal modal-expanded modal-default" id="m-status-REPLACE_ID" data-modal-width="960px"  data-modal-title="REPLACE With Client Name">
							<p>
								To edit status date, click date displayed and update
							</p>
							<form action="">
								<table class="table-expanded border-width-thin border-style-solid border-color-neutral-dark border-width-thin">
									<tr>
										<th class="border-color-neutral-dark">
											<span class="color-dark font-weight-700 h5 no-margin-y">Status</span>
										</th>
										<th class="border-color-neutral-dark">
											<span class="color-dark font-weight-700 h5 no-margin-y">Date</span>
										</th>
										<th class="border-color-neutral-dark">
											<span class="color-dark font-weight-700 h5 no-margin-y">Lead Source</span>
										</th>
										<th class="border-color-neutral-dark">
											<span class="color-dark font-weight-700 h5 no-margin-y">Delete Status</span>
										</th>
									</tr>
		
		
									<!-- @loop tr -->
										<tr>
											<td class="border-color-neutral-dark">
												<span class="REPLACE">Prospect</span>
											</td>
											<td class="border-color-neutral-dark">
												<input type="datetime-local" class="input input-blend">
											</td>
											<td class="border-color-neutral-dark">
												<select name="" id="" class="input input-blend font-weight-700">
													<option value="">Select a source...</option>
													<!-- @PLACEHOLDER: Deltete when ready -->
														<option value="">Alert</option>
														<option value="">Andrew Lemperle</option>
														<option value="">Bing</option>
														<option value="">Bing Paid Ads</option>
														<option value="">chatGPT</option>
														<option value="">Client Referral</option>
														<option value="">Clutch</option>
														<option value="">Cold call</option>
														<option value="">Competitor Referral</option>
														<option value="">Facebook Ads</option>
														<option value="">Facebook Organic</option>
														<option value="">Facebook Paid Ads</option>
														<option value="">Instagram Organic</option>
														<option value="">Instagram Paid</option>
														<option value="">Joel Dubois</option>
														<option value="">LawRank</option>
														<option value="">Lawyerist</option>
														<option value="">Leedfeeder</option>
														<option value="">Linkedin Organic</option>
														<option value="">Linkedin Paid</option>
														<option value="">Other stuff I can't remember at the moment</option>
												</select>
											</td>
											<td class="border-color-neutral-dark">
												<a href="#" class="color-error">Delete Status</a>
											</td>
										</tr>

										<!-- @PLACEHOLDER: DELETE WHEN READY -->
												<?php for($j=1; $j<=4; $j++){ ?>
														<tr>
															<td class="border-color-neutral-dark">
																<span class="REPLACE">Prospect</span>
															</td>
															<td class="border-color-neutral-dark">
																<input type="datetime-local" class="input input-blend">
															</td>
															<td class="border-color-neutral-dark">
															
																<select name="" id="" class="input input-blend font-weight-700">
																	<option value="">Select a source...</option>
																	<!-- @PLACEHOLDER: Deltete when ready -->
																		<option value="">Alert</option>
																		<option value="">Andrew Lemperle</option>
																		<option value="">Bing</option>
																		<option value="">Bing Paid Ads</option>
																		<option value="">chatGPT</option>
																		<option value="">Client Referral</option>
																		<option value="">Clutch</option>
																		<option value="">Cold call</option>
																		<option value="">Competitor Referral</option>
																		<option value="">Facebook Ads</option>
																		<option value="">Facebook Organic</option>
																		<option value="">Facebook Paid Ads</option>
																		<option value="">Instagram Organic</option>
																		<option value="">Instagram Paid</option>
																		<option value="">Joel Dubois</option>
																		<option value="">LawRank</option>
																		<option value="">Lawyerist</option>
																		<option value="">Leedfeeder</option>
																		<option value="">Linkedin Organic</option>
																		<option value="">Linkedin Paid</option>
																		<option value="">Other stuff I can't remember at the moment</option>
																</select>
															</td>
															<td class="border-color-neutral-dark">
																<a href="#" class="color-error">Delete Status</a>
															</td>
														</tr>
												
												<?php } ?>
								</table>
							</form>
							
						</div>
					</div>
				</td>
				
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

				<td class="text-align-center" >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
					<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
						<?php app_get_component('components/profile-image-micro') ?>
					</a>
				</td>
				<td class="text-align-center" >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
					<p class="company-last-activity">
						<span class="REPLACE">04/20/69</span>
					</p>
				</td>
				<td class="text-align-center" >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
					<p class="company-last-activity">
						<!-- @if there's something -->
							<span class="REPLACE">5%</span>
						<!-- @else -->
							&nbsp;
					</p>
				</td>
				<td>
					<p class="company-description no-margin-bottom" >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Lead Source</span>
						<span class="REPLACE">Google</span>
					</p>
				</td>
				<td >
					<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tags</span>
					<div class="company-clienttype">
						<?php app_get_component('components/tags-lead') ?>
					</div>
				</td>
				<td class="outreach-table-cell-actions text-align-center" >
					<div class="company-actions position-relative">
						<?php app_get_component('components/modal-actions','',false,array(
							'links' => array(
								'Edit Status'
									=> 'class="dropdown-purger" href="#m-status-REPLACE_ID" data-toggle-modal-default data-modal-title="REPLACE With Client Name"',
								'Revoke Status'
									=> 'href="#"',
							)
						)) ?>
					</div>
				</td>
			</tr>

			<!-- @PLACEHOLDER: DELETE WHEN READY -->
				<?php for($i=1; $i<=4; $i++){ ?>
					<tr>
						<td class="outreach-table-cell-actions text-align-center">
							<div class="company-actions position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Edit Status'
											=> 'class="dropdown-purger" href="#m-status-'.$i.'" data-toggle-modal-default',
										'Revoke Status'
											=> 'href="#"',
									)
								)) ?>


								<!--
								Imports JS:
								Modal from framework/src/js/imports/modal
								-->
								<div class="modal modal-expanded modal-default" id="m-status-<?= $i ?>" data-modal-width="960px"  data-modal-title="REPLACE With Client Name">
									<p>
										To edit status date, click date displayed and update
									</p>
									<form action="">
										<table class="table-expanded border-width-thin border-style-solid border-color-neutral-dark border-width-thin">
											<tr>
												<th class="border-color-neutral-dark">
													<span class="color-dark font-weight-700 h5 no-margin-y">Status</span>
												</th>
												<th class="border-color-neutral-dark">
													<span class="color-dark font-weight-700 h5 no-margin-y">Date</span>
												</th>
												<th class="border-color-neutral-dark">
													<span class="color-dark font-weight-700 h5 no-margin-y">Lead Source</span>
												</th>
												<th class="border-color-neutral-dark">
													<span class="color-dark font-weight-700 h5 no-margin-y">Delete Status</span>
												</th>
											</tr>
				
				
											<!-- @loop tr -->
												<tr>
													<td class="border-color-neutral-dark">
														<span class="REPLACE">Prospect</span>
													</td>
													<td class="border-color-neutral-dark">
														<input type="datetime-local" class="input input-blend">
													</td>
													<td class="border-color-neutral-dark">
														<select name="" id="" class="input input-blend font-weight-700">
															<option value="">Select a source...</option>
															<!-- @PLACEHOLDER: Deltete when ready -->
																<option value="">Alert</option>
																<option value="">Andrew Lemperle</option>
																<option value="">Bing</option>
																<option value="">Bing Paid Ads</option>
																<option value="">chatGPT</option>
																<option value="">Client Referral</option>
																<option value="">Clutch</option>
																<option value="">Cold call</option>
																<option value="">Competitor Referral</option>
																<option value="">Facebook Ads</option>
																<option value="">Facebook Organic</option>
																<option value="">Facebook Paid Ads</option>
																<option value="">Instagram Organic</option>
																<option value="">Instagram Paid</option>
																<option value="">Joel Dubois</option>
																<option value="">LawRank</option>
																<option value="">Lawyerist</option>
																<option value="">Leedfeeder</option>
																<option value="">Linkedin Organic</option>
																<option value="">Linkedin Paid</option>
																<option value="">Other stuff I can't remember at the moment</option>
														</select>
													</td>
													<td class="border-color-neutral-dark">
														<a href="#" class="color-error">Delete Status</a>
													</td>
												</tr>

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($j=1; $j<=4; $j++){ ?>
																<tr>
																	<td class="border-color-neutral-dark">
																		<span class="REPLACE">Prospect</span>
																	</td>
																	<td class="border-color-neutral-dark">
																		<input type="datetime-local" class="input input-blend">
																	</td>
																	<td class="border-color-neutral-dark">
																		<select name="" id="" class="input input-blend font-weight-700">
																			<option value="">Select a source...</option>
																			<!-- @PLACEHOLDER: Deltete when ready -->
																				<option value="">Alert</option>
																				<option value="">Andrew Lemperle</option>
																				<option value="">Bing</option>
																				<option value="">Bing Paid Ads</option>
																				<option value="">chatGPT</option>
																				<option value="">Client Referral</option>
																				<option value="">Clutch</option>
																				<option value="">Cold call</option>
																				<option value="">Competitor Referral</option>
																				<option value="">Facebook Ads</option>
																				<option value="">Facebook Organic</option>
																				<option value="">Facebook Paid Ads</option>
																				<option value="">Instagram Organic</option>
																				<option value="">Instagram Paid</option>
																				<option value="">Joel Dubois</option>
																				<option value="">LawRank</option>
																				<option value="">Lawyerist</option>
																				<option value="">Leedfeeder</option>
																				<option value="">Linkedin Organic</option>
																				<option value="">Linkedin Paid</option>
																				<option value="">Other stuff I can't remember at the moment</option>
																		</select>
																	</td>
																	<td class="border-color-neutral-dark">
																		<a href="#" class="color-error">Delete Status</a>
																	</td>
																</tr>
														
														<?php } ?>
										</table>
									</form>
									
								</div>
							</div>
						</td>
						
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

						<td class="text-align-center" >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
							<a href="<?=app_create_link(array('template' => 'profile')); ?>" class="company-acct-owner text-align-center">
								<?php app_get_component('components/profile-image-micro') ?>
							</a>
						</td>
						<td class="text-align-center" >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
							<p class="company-last-activity">
								<span class="REPLACE">04/20/69</span>
							</p>
						</td>
						<td class="text-align-center" >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Last Activity</span>
							<p class="company-last-activity">
								<!-- @if there's something -->
									<span class="REPLACE">5%</span>
								<!-- @else -->
									&nbsp;
							</p>
						</td>
						<td>
							<p class="company-description no-margin-bottom" >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Lead Source</span>
								<span class="REPLACE">Google</span>
							</p>
						</td>
						<td >
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Tags</span>
							<div class="company-clienttype">
								<?php app_get_component('components/tags-lead') ?>
							</div>
						</td>
						<td class="outreach-table-cell-actions text-align-center" >
							<div class="company-actions position-relative">
								<?php app_get_component('components/modal-actions','',false,array(
									'links' => array(
										'Edit Status'
											=> 'class="dropdown-purger" href="#m-status-'.$i.'" data-toggle-modal-default data-modal-title="REPLACE With Client Name"',
										'Revoke Status'
											=> 'href="#"',
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