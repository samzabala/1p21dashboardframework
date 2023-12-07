<!-- Main -->
<div
	class="module module-no-gutter"
	data-grid-column-md="main"
	data-grid-row-md="1 / span 6"
>
	<div class="module-content">

		<!-- main -->
			<div class="module module-expanded border-color-transparent">
				<!-- Heading -->
					<div class="company-heading flex-grid flex-grid-compact position-relative">
						<div class="flex-col-xs-12 flex-col-md-8">
							<div>
								<h1 class="no-margin display-inline">
									<span class="REPLACE">Company Name</span>
								</h1>
								
								<?php app_get_component('components/tag-clienttype') ?>
							</div>

							<div>
								Account Owner: <span class="REPLACE">Profile Name</span>
								|
								Business Type: <span class="REPLACE">Company Business Type</span>
							</div>

							<div class="margin-top">
								<span class="color-neutral">Last Activity:</span> <strong>
									<span class="REPLACE">June 12, 1898</span>
								</strong>
							</div>
						</div>
						<div class="flex-col-xs-12 flex-col-md-4 align-self-flex-start flex-xs justify-content-flex-end align-items-center">
							<span class="inline-flex-xs align-items-center position-relative">
								<!-- hidden input fields here -->
								<span class="margin-small-right">Stage:</span>
									<!-- @NOTE
										.tag
										classes to add => task status tag
											`tag-error` => Lead 
											`tag-primary` => Client
											`tag-accent` => Pitched
											`tag-outreach-s-proposalsent` => Proposal Sent
											`tag-outreach-s-contractsent` => Contract Sent
											`tag-success` => Closed and Won
											`tag-outreach-s-closedandlost` => Closed and Lost
								
									-->
									<a data-toggle-dropdown href="#" class="tag tag-accent text-align-center no-border no-bottom padding-x">
										<!-- @if has stage -->
										<span class="REPLACE">Pitched</span>
										<!-- @else -->
										<!-- Select Stage -->
									</a>
									<div class="dropdown dropdown-right dropdown-top-flush">
										<ul class="list-group list-group-interactive">

										<!-- 
											@LOOP li
											@NOTE
											li 
												classes to add
													`active` => when selected
										-->
										<li><a href="#">
											<span class="REPLACE">Stage</span>
										</a></li>

										<!-- @placeholder -->
										<li><a href="#">Stage</a></li>
										<li class="active"><a href="#">Pitched</a></li>
										<li><a href="#">Proposal Sent</a></li>
										<li><a href="#">Contract Sent</a></li>
										<li><a href="#">Closed and Won</a></li>
										<li><a href="#">Closed and Lost</a></li>
										</ul>
									</div>
							</span>

							<div class="position-relative inline-flex-xs ">
								<a data-toggle-dropdown class="btn btn-neutral-glassy btn-symbol margin-left ">
									<span class="sr-only">Edit</span>
									<i class="symbol symbol-kebab-horizontal"></i>
								</a>
								<div class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="200px">
									<ul class="list-group">
										<li><a href="#mb-editor-company-details" data-toggle-modal-board>Edit</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<?php app_get_component('components/modal-board-form-company-details') ?>

				<!-- tables -->
					<div class="flex-grid flex-grid-fixed">

						<!-- contact table -->
							<div class="flex-col-xs-12">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span data-toggle-accordion class="module-title" href="#company-contact">Contacts <i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i></span>
									</div>
								</div>
								<div id="company-contact" class="accordion">
									<!-- @if has rows -->
										<table class="outreach-table margin-small-bottom">
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Social</th>
												<th>&nbsp;<span class="sr-only">Actions</span></th>
											</tr>
											
											<!-- @LOOP tr -->
											<?php app_get_component('components/company-contact-row') ?>

											<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=4; $i++){ ?>
												<?php app_get_component('components/company-contact-row') ?>
											<?php } ?>
										</table>
									<!-- @else -->
										<p class="color-neutral font-style-italic">No contacts available</p>

									

									
									
									<div class="flex-grid flex-grid-fixed flex-grid-compact justify-content-space-between align-items-center">
										<div class="flex-col-xs-12 flex-col-md-4 flex-col-lg-5  flex-col-xl-6">
											<?app_get_component('components/link-add-row','',false,array(
												'href' => '#mb-editor-contact',
												'attrs' => 'data-toggle-modal-board data-toggle="Add Contact"'
											)) ?>
										</div>
										<div class="flex-child flex-1-1 text-align-right position-relative">
											<a href="#" data-toggle-dropdown class="btn-group btn-group-horizontal btn-block-mobile">
												<span class="btn btn-small text-leading-whole no-padding-y btn-symbol btn-success font-size-large">
													<i class="symbol symbol-user-add"></i>
												</span>
											</a>
											<div class="dropdown no-padding dropdown-top-flush dropdown-right" data-dropdown-width="100%" data-dropdown-max-height="20em">
												<!-- @if has results -->
													<h4 class="no-margin padding-large-x padding-small-y position-sticky offset-0-top z-index-1 background-theme border-width-thin-bottom border-style-solid border-color-theme-polar-contrast">Emails found</h4>
													<div class="padding-large no-padding-top">
														<ul class="list-group">
															<!--@loop li  -->
																<li class="no-padding-x">
																	<div class="flex-xs justify-content-space-between align-items-center">
																		<div>
																			<h5 class="no-margin">
																				<span class="REPLACE">Phoenix Wright</span>
																			</h5>
																			<p class="color-neutral no-margin">naruhodo@ace-attorney.com</p>
																		</div>
																		<div>
																			<!-- @if added  -->
																			<span class="color-success">added <i class="symbol symbol-check"></i></span>
																			<!-- @else -->
																				<a href="#" class="text-decoration-none">add <i class="symbol symbol-plus"></i></a>
																		</div>
																	</div>
																</li>

																	<!-- @PLACEHOLDER : delete when ready -->
																	<?php for($i=1; $i<=4; $i++){ ?>
																		<li class="no-padding-x">
																			<div class="flex-xs justify-content-space-between align-items-center">
																				<div>
																					<h5 class="no-margin">
																						<span class="REPLACE">Miles Edgeworth</span>
																					</h5>
																					<p class="color-neutral no-margin">mitsurugi@ace-attorney.com</p>
																				</div>
																				<div>
																					<!-- @if added  -->
																					<span class="color-success">added <i class="symbol symbol-check"></i></span>
																				</div>
																			</div>
																		</li>

																		<li class="no-padding-x">
																			<div class="flex-xs justify-content-space-between align-items-center">
																				<div>
																					<h5 class="no-margin">
																						<span class="REPLACE">Dick Gumshoe</span>
																					</h5>
																					<p class="color-neutral no-margin">itonokogiri@ace-attorney.com</p>
																				</div>
																				<div>
																					<!-- @else -->
																						<a href="#" class="text-decoration-none">add <i class="symbol symbol-plus"></i></a>
																				</div>
																			</div>
																		</li>
																	<?php } ?>
														</ul>
													</div>
												<!-- @else -->
													
													<p class="no-margin color-neutral font-style-italic text-align-center padding-large">No email addresses found for <span class="REPLACE">www.domain.com</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>

						<!-- additional sites -->
							<div class="flex-col-xs-12 flex-col-md-6">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span class="module-title" >Additional Websites</span>
									</div>
									<div class="flex-child flex-0-0">
										<?php app_get_component('components/dropdown-actions','',false,array(
											'links' => array(
												'Edit name or description' => ' class="tooltip-purger" href="#company-addtl-sites" data-toggle-switch-on',
												'Copy Link' => 'href="#"',
												'Share' => 'href="#"'
											)
										)) ?>
									</div>
								</div>
								<!-- 
									@NOTE
									if by the time im still in progressw of documenting the events api, use `off.fw.switch` to initiate saving changes

									SWITCH_ELEM.addEventListener('off.sf.switch',handler);
								-->
								<div class="switch" id="company-addtl-sites">
									<div class="switch-off">
										<!-- @if has rows -->
											<table class="margin-small-bottom table-fixed">
												
												<!-- @LOOP tr -->
													<tr>
														<td>
															<a target="_blank" href="#REPLACEwithurl" class="color-inherit contact-addtl-sites-name text-wrap-ellipsis">
																<span class="REPLACE">domain.com</span>
															</a>
														</td>
													</tr>

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=4; $i++){ ?>
														<tr>
															<td>
																<a target="_blank" href="#REPLACEwithurl" class="color-inherit contact-addtl-sites-name text-wrap-ellipsis">
																	<span class="REPLACE">domain.com</span>
																</a>
															</td>
														</tr>
													<?php } ?>
											</table>
										<!-- @else -->
											<p class="color-neutral font-style-italic">No contacts available</p>
									</div>
									<form class="switch-on">
										<table class="margin-small-bottom">
												
											<!-- @if has rows -->


												<!-- @LOOP tr -->

													<tr>
														<td>
															
															<?php app_get_component('components/input-company-addtl-sites');?>
														</td>
													</tr>

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=4; $i++){ ?>
															<tr>
																<td>
																	<?php app_get_component('components/input-company-addtl-sites');?>
																</td>
															</tr>
														<?php } ?>
										</table>
									</form>
								</div>

								<div class="accordion" id="company-addtl-sites-add">
									<form class="padding-small-y padding-micro-x" action="">
										<div class="input-group input-group-horizontal input-block">
											<input
												type="text" class="input input-single-line"
												placeholder="domain.com"
												id="company-addtl-sites-add-name"
												name="company-addtl-sites-add-name"
												value="" />

												<button data-toggle-accordion class="btn btn-primary">Add</button>
										</div>
									</form>
								</div>

								
								<?php app_get_component('components/link-add-row','',false,array(
									'href' => '#company-addtl-sites-add',
									'attrs' => 'data-toggle-accordion'
								)) ?>
							</div>

						<!-- vendor history  -->
							<div class="flex-col-xs-12 flex-col-md-6">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span class="module-title" >Vendor History</span>
									</div>
									<div class="flex-child flex-0-0">

										<?php app_get_component('components/dropdown-actions','',false,array(
											'links' => array(
												'Edit name or description' => ' class="tooltip-purger" href="#company-vendor-history" data-toggle-switch-on',
												'Copy Link' => 'href="#"',
												'Share' => 'href="#"'
											)
										)) ?>
									</div>
								</div>
								<!-- 
									@NOTE
									if by the time im still in progressw of documenting the events api, use `off.fw.switch` to initiate saving changes

									SWITCH_ELEM.addEventListener('off.sf.switch',handler);
								-->
								<div class="switch" id="company-vendor-history">
									<div class="switch-off">
										<!-- @if has rows -->
											<table class="margin-small-bottom table-fixed">
												
												<!-- @LOOP tr -->
													<tr>
														<td>
															<div class="contact-vendor-history-name">
																<span class="REPLACE">Vendor</span>
															</div>
														</td>
														<td>
															<div class="contact-vendor-history-date color-neutral text-align-right">
																<span class="REPLACE">1969 - Present</span>
															</div>
														</td>
													</tr>

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=4; $i++){ ?>
														<tr>
															<td>
																<div class="contact-vendor-history-name">
																	<span class="REPLACE">Vendor</span>
																</div>
															</td>
															<td>
																<div class="contact-vendor-history-date color-neutral text-align-right">
																	<span class="REPLACE">2010 - 3000</span>
																</div>
															</td>
														</tr>
													<?php } ?>
											</table>
										<!-- @else -->
											<p class="color-neutral font-style-italic">No contacts available</p>
									</div>
									<form class="switch-on">
										<table class="margin-small-bottom table-fixed">
												
											<!-- @if has rows -->


												<!-- @LOOP tr -->

													<tr>
														<td>
															
															<?php app_get_component('components/input-company-vendor-history');?>
														</td>
													</tr>

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=4; $i++){ ?>
															<tr>
																<td>
																	<?php app_get_component('components/input-company-vendor-history');?>
																</td>
															</tr>
														<?php } ?>
										</table>
									</form>
								</div>

								<div class="accordion" id="company-vendor-history-add">
									<form class="padding-small-y padding-micro-x" action="">
										<div class="position-relative">
											<div class="input-group input-group-horizontal input-block">
												<input
													type="text" size="12" class="input input-single-line"
													placeholder="Vendor Name"
													id="company-vendor-history-add-name"
													name="company-vendor-history-add-name"
													value="REPLACEwithrowvalue" />
												<a href="#" class="btn btn-default" data-toggle-dropdown>
													<span class="REPLACE">2010 - Present</span>
												</a>
												<button data-toggle-accordion class="btn btn-primary">Add</button>
											</div>
	
											<div class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="100%">
												<div class="">
													<div class="input-wrapper input-wrapper-vertical input-wrapper-block p">
														<label for="" class="input-label">Start Date</label>
														<input
															type="text" size="12" class="input input-calendar input-block no-radius-bottom"
															placeholder="1990 - Present"
															id="company-vendor-history-add-date-start"
															name="company-vendor-history-add-date-start"
															value="2069-04-20" />
													</div>

													<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
													
														<label for="company-vendor-history-add-date-end" class="input-label">End Date</label>

														<!-- @NOTE
															.input-wrapper
																classes to add:
																`#company-vendor-history-add-date-end` => if input#company-vendor-history-add-date-present is checked
														-->
														<input
															type="text" size="12" class="input input-calendar input-block no-radius-bottom"
															placeholder="1990 - Present"
															id="company-vendor-history-add-date-end"
															name="company-vendor-history-add-date-end"
															value="2069-04-20" />
														<br>
													</div>
												</div>
												<a href="#" data-toggle-dropdown class="btn btn-primary btn-block">Set</a>
											</div>
										</div>
									</form>
								</div>

								
								<?php app_get_component('components/link-add-row','',false,array(
									'href' => '#company-vendor-history-add',
									'attrs' => 'data-toggle-accordion'
								)) ?>
							</div>

						<!-- additional info  -->
							<div class="flex-col-xs-12 flex-col-md-6">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span class="module-title" >Additional Info</span>
									</div>
									<div class="flex-child flex-0-0">

										<?php app_get_component('components/dropdown-actions','',false,array(
											'links' => array(
												'Edit Info' => 'class="tooltip-purger" href="#company-addtl-info" data-toggle-switch-on',
												'Copy Link' => 'href="#"',
												'Share' => 'href="#"'
											)
										)) ?>
									</div>
								</div>
								<!-- 
									@NOTE
									if by the time im still in progressw of documenting the events api, use `off.fw.switch` to initiate saving changes

									SWITCH_ELEM.addEventListener('off.sf.switch',handler);
								-->
								<div class="switch" id="company-addtl-info">
									<div class="switch-off">
											<table class="margin-small-bottom table-fixed">

												<tr class="contact-addtl-info-arc">
													<td>
														<span class="color-neutral font-weight-700 font-size-small">
															<span class="REPLACE">ARC Score</span>
														</span>
													</td>
													<td colspan="2">
														<!-- @if has arc score -->
															<div class="flex-grid flex-grid-no-gutter justify-content-space-between font-weight-700 align-items-center">
																<div class="flex-child">
																	<span class="REPLACE">4.20</span>
																</div>
																<div class="flex-child color-neutral font-size-small">
																	Checked <span class="REPLACE">4/2/.69</span>
																</div>
															</div>
														<!-- @else -->
															Unknown
													</td>
												</tr>

												<tr class="contact-addtl-info-seo-analysis">
													<td>
														<span class="color-neutral font-weight-700 font-size-small">
															<span class="REPLACE">SEO Analysis Link</span>
														</span>
													</td>
													<td colspan="2">
														<!-- @if has lead source -->
															<a href="REPLACEWITHURI" class="text-wrap-ellipsis">
																ilawyermarketing.net/REPLACEWITHURL
															</a>
														<!-- @else -->
															Unknown
													</td>
												</tr>

												<tr class="contact-addtl-info-lead-source">
													<td>
														<span class="color-neutral font-weight-700 font-size-small">
															<span class="REPLACE">Lead Source</span>
														</span>
													</td>
													<td colspan="2">
														<!-- @if has lead source -->
															<span class="REPLACE">Lead Source Name</span>
														<!-- @else -->
															Unknown
													</td>
												</tr>

												<tr class="contact-addtl-info-marketing-budget">
													<td>
														<span class="color-neutral font-weight-700 font-size-small">
															<span class="REPLACE">Marketing Budget</span>
														</span>
													</td>
													<td colspan="2">
														<!--  if has budget-min or budget-max -->
															<!-- @if has budget-min -->
																<span class="marketing-budget-min">
																		<span class="REPLACE">$10</span>
																</span>

															<!-- @if has budget-min and budget-max -->
																<span>-</span>
															<!-- @else if has budget-min and no budget-max -->
																<span>&lt;</span>
															<!-- @else if has budget-max and no budget-min -->
																<span>&gt;</span>
															
															<!-- @if has budget-min -->
																<span class="marketing-budget-max">
																		<span class="REPLACE">$20</span>
																</span>
														<!-- @else -->
															Unknown
													</td>
												</tr>

												
												<!-- @if has custom info -->
													<!-- @LOOP tr -->
														<tr>
															<td>
																<span class="color-neutral font-weight-700 font-size-small">
																	<span class="REPLACE">Custom Info Name</span>
																</span>
															</td>
															<td colspan="2">
																<!-- @if has custom info description -->
																	<span class="REPLACE">Custom Info Description</span>
																<!-- @else -->
																	Unknown
															</td>
														</tr>

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=2; $i++){ ?>
															<tr>
																<td>
																	<span class="color-neutral font-weight-700 font-size-small">
																		<span class="REPLACE">Custom Info Name</span>
																	</span>
																</td>
																<td colspan="2">
																	<!-- @if has custom info description -->
																		<span class="REPLACE">Custom Info Description</span>
																	<!-- @else -->
																		Unknown
																</td>
															</tr>
														<?php } ?>
											</table>
										<!-- @else -->
											<p class="color-neutral font-style-italic">No additional info</p>
									</div>
									<form class="switch-on">
										<table class="margin-small-bottom table-fixed">

											<tr class="contact-addtl-info-arc">
												<td>
													<label class="color-neutral font-weight-700 font-size-small">
														<span class="REPLACE">ARC Score</span>
													</label>
												</td>
												<td colspan="2">
													<div class="flex-grid flex-grid-compact flex-grid-fixed">
														<div class="flex-col-xs-4">
															<input
																type="number" size="3" class="input input-single-line input-block"
																placeholder="0.00"
																id="company-addtl-info-arc-score"
																name="company-addtl-info-arc-score"
																value="REPLACEwithrowvalue" />
														</div>
														<div class="flex-col-xs-8">
															<input
																type="date" size="3" class="input input-single-line input-block"
																placeholder="mm/dd/yyyy"
																id="company-addtl-info-arc-last-check"
																name="company-addtl-info-arc-last-check"
																value="REPLACEwithrowvalue" />
														</div>
													</div>
												</td>
											</tr>

											<tr class="contact-addtl-info-seo-analysis">
												<td>
													<label class="color-neutral font-weight-700 font-size-small">
														<span class="REPLACE">SEO Analysis Link</span>
													</label>
												</td>
												<td colspan="2">
													<div class="input-group input-group-horizontal input-block">
														<input
															type="url" size="12" class="input input-single-line"
															placeholder="http://domain.com/path"
															id="company-addtl-info-seo-analysis"
															name="company-addtl-info-seo-analysis"
															value="REPLACEwithrowvalue" />
													</div>
												</td>
											</tr>

											<tr class="contact-addtl-info-lead-source">
												<td>
													<label class="color-neutral font-weight-700 font-size-small">
														<span class="REPLACE">Lead Source</span>
													</label>
												</td>
												<td colspan="2">
													<div class="input-group input-group-horizontal input-block">
														<select 
															id="company-addtl-info-lead-source"
															name="company-addtl-info-lead-source"
															class="input input-select">
															<option value="">Select</option>
															<option value="">Lead Source Name</option>
															<option value="">Lead Source Name</option>
															<option value="">Lead Source Name</option>
															<option value="">Lead Source Name</option>
														</select>
													</div>
												</td>
											</tr>

											<tr class="contact-addtl-info-marketing-budget">
												<td>
													<label class="color-neutral font-weight-700 font-size-small">
														<span class="REPLACE">Marketing Budget</span>
													</label>
												</td>
												<td colspan="2">
													<div class="input-group input-group-horizontal input-block">
														<span class="btn btn-no-interaction btn-neutral btn-symbol">$</span>
														<input
															type="number" step="1"size="3" class="input input-single-line"
															placeholder="Minimum"
															id="company-addtl-info-marketing-budget-min"
															name="company-addtl-info-marketing-budget-min"
															value="REPLACEwithrowvalue" style="width:50%" />
														<input
															type="number" step="1"size="3" class="input input-single-line"
															placeholder="Maximum"
															id="company-addtl-info-marketing-budget-max"
															name="company-addtl-info-marketing-budget-max"
															value="REPLACEwithrowvalue" style="width:50%" />
													</div>
												</td>
											</tr>

											
											<!-- @if has custom info -->
												<!-- @LOOP tr -->

													<tr>
														<td colspan="3">
															
															<?php app_get_component('components/input-company-addtl-info');?>
														</td>
													</tr>

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=2; $i++){ ?>
															<tr>
																<td colspan="3">
																	<?php app_get_component('components/input-company-addtl-info');?>
																</td>
															</tr>
														<?php } ?>
										</table>
									</form>
								</div>

								<div class="accordion" id="company-addtl-info-add">
									<form class="padding-small-y padding-micro-x" action="">
										<div class="input-group input-group-horizontal input-block">
											<input
												type="text" size="12" class="input input-single-line"
												placeholder="Info Name"
												id="company-addtl-info-add-name"
												name="company-addtl-info-add-name"
												value="" />
											<input
												type="text" size="12" class="input input-single-line"
												placeholder="Info Description"
												id="company-addtl-info-add-date"
												name="company-addtl-info-add-date"
												value="" />

											<button data-toggle-accordion class="btn btn-primary">Add</button>
										</div>
									</form>
								</div>

								
								<?php app_get_component('components/link-add-row','',false,array(
									'href' => '#company-addtl-info-add',
									'attrs' => 'data-toggle-accordion'
								)) ?>
							</div>
						
						

						<!-- additional sites -->
							<div class="flex-col-xs-12 flex-col-md-6">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span class="module-title" >Main Competitors</span>
									</div>
									<div class="flex-child flex-0-0">
										<?php app_get_component('components/dropdown-actions','',false,array(
											'links' => array(
												'Edit name or description' => ' class="tooltip-purger" href="#company-main-competitors" data-toggle-switch-on',
												'Copy Link' => 'href="#"',
												'Share' => 'href="#"'
											)
										)) ?>
									</div>
								</div>
								<!-- @NOTE: options are placeholders. replace as needed -->
								<datalist id="company-competitors-available">
									<option value="Wright & Co Law Offices">
									<option value="Fey & Co Law Offices">
									<option value="Wright Talent Agency">
									<option value="Wright Anything Agency">
									<option value="Gavin Law Offices">
									<option value="Grossberg Law Offices">
									<option value="Edgeworth Law Offices">
									<option value="Von Karma Law Offices">
								</datalist>

								<!-- 
									@NOTE
									if by the time im still in progressw of documenting the events api, use `off.fw.switch` to initiate saving changes

									SWITCH_ELEM.addEventListener('off.sf.switch',handler);
								-->
								<div class="switch" id="company-main-competitors">
									<div class="switch-off">
										<!-- @if has rows -->
											<table class="margin-small-bottom table-fixed">
												
												<!-- @LOOP tr -->
													<tr>
														<td>
															<a target="_blank" href="#REPLACEwithurl" class="color-inherit contact-addtl-sites-name text-wrap-ellipsis">
																<span class="REPLACE">domain.com</span>
															</a>
														</td>
													</tr>

												<!-- @PLACEHOLDER: DELETE WHEN READY -->
													<?php for($i=1; $i<=4; $i++){ ?>
														<tr>
															<td>
																<a target="_blank" href="#REPLACEwithurl" class="color-inherit contact-addtl-sites-name text-wrap-ellipsis">
																	<span class="REPLACE">domain.com</span>
																</a>
															</td>
														</tr>
													<?php } ?>
											</table>
										<!-- @else -->
											<p class="color-neutral font-style-italic">No contacts available</p>
									</div>
									<form class="switch-on">
										<table class="margin-small-bottom">
												
											<!-- @if has rows -->


												<!-- @LOOP tr -->

													<tr>
														<td>
															
															<?php app_get_component('components/input-company-competitors');?>
														</td>
													</tr>

													<!-- @PLACEHOLDER: DELETE WHEN READY -->
														<?php for($i=1; $i<=4; $i++){ ?>
															<tr>
																<td>
																	<?php app_get_component('components/input-company-competitors');?>
																</td>
															</tr>
														<?php } ?>
										</table>
									</form>
								</div>

								<div class="accordion" id="company-main-competitors-add">
									<form class="padding-small-y padding-micro-x" action="">
										<div class="input-group input-group-horizontal input-block">
											<input
												list="company-competitors-available"
												type="text" class="input input-single-line"
												placeholder="domain.com"
												id="company-competitors-add-name"
												name="company-competitors-add-name"
												value="" />

												<button data-toggle-accordion class="btn btn-primary">Add</button>
										</div>
									</form>
								</div>

								
								<?php app_get_component('components/link-add-row','',false,array(
									'href' => '#company-main-competitors-add',
									'attrs' => 'data-toggle-accordion'
								)) ?>
							</div>

						<!-- sales -->
							<div class="flex-col-xs-12">
								<table class="outreach-table margin-small-bottom table-fixed">
									<tr>
										<th width="165" class="background-theme-contrast module-title text-align-center outreach-table-mobile-th">Products Sold</th>
										<th class="background-theme-contrast module-title">Date Sold</th>
										<th class="background-theme-contrast module-title">Launch Date</th>
										<th class="background-theme-contrast module-title">Sale Amount</th>
										<th class="background-theme-contrast module-title">Sales Rep</th>
										<th class="background-theme-contrast module-title">Status</th>
										<th class="background-theme-contrast" width="50">
											<span class="sr-only">Notes</span>
										</th>
									</tr>

									<!-- @LOOP tr -->
										<tr>
											<td>
												<a href="#m-editor-sales" data-toggle-modal-default class="company-product-sold color-neutral text-transform-uppercase font-weight-700 pointer-reference text-decoration-none">
													<span>
														<span class="REPLACE">SEO</span>
													</span>
													<span class="only-hover">
														<i class="symbol symbol-pencil"></i>
													</span>
												</a>
											</td>
											<td>
												<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Sold</span>
												<div class="company-product-sold color-neutral">
														<span class="REPLACE">06-12-1898</span>
												</div>
											</td>
											<td>
												<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Launch Date</span>
												<div class="company-product-launch color-neutral">
														<span class="REPLACE">04-20-2069</span>
												</div>
											</td>
											<td>
												<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sale Amount</span>
												<div class="company-product-amount color-neutral">
														<span class="company-product-amount-usd">
															<span class="REPLACE">$42069</span>
														</span>
														/
														<span class="company-product-amount-recurrence">
															(<span class="REPLACE">Monthly</span>)
														</span>
														
												</div>
											</td>
											<td>
												<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
												<div class="company-product-salesrep color-neutral">
														<span class="REPLACE">Dahlia Hawthorne</span>
												</div>
											</td>
											<td>
												<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
												<!-- @if active -->
													<div class="tag tag-success">Active</div>
												<!-- @else  -->
													<div class="tag tag-neutral">Inactive</div>
											</td>
											<td class="outreach-table-cell-actions" width="50">
												<div class="company-product-notes color-neutral">
													<a href="#" data-toggle-modal-default class="btn btn-primary btn-symbol">
														<i class="symbol symbol-file"></i>
													</a>
													<div class="modal modal-default" data-modal-width="700px">
														<span class="REPLACE">
															<?php app_get_component('components/_DEMO-html-markup') ?>
														</span>
													</div>
												</div>
											</td>
										</tr>

											<!-- @PLACEHOLDER: DELETE WHEN READY -->
												<?php for($i=1; $i<=4; $i++){ ?>
													<tr>
														<td>
															<a href="#m-editor-sales" data-toggle-modal-default class="company-product-sold color-neutral text-transform-uppercase font-weight-700 pointer-reference text-decoration-none">
																<span>
																	<span class="REPLACE">SEO</span>
																</span>
																<span class="only-hover">
																	<i class="symbol symbol-pencil"></i>
																</span>
															</a>
														</td>
														<td>
															<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Date Sold</span>
															<div class="company-product-sold color-neutral">
																	<span class="REPLACE">06-12-1898</span>
															</div>
														</td>
														<td>
															<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Launch Date</span>
															<div class="company-product-launch color-neutral">
																	<span class="REPLACE">04-20-2069</span>
															</div>
														</td>
														<td>
															<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sale Amount</span>
															<div class="company-product-amount color-neutral">
																	<span class="company-product-amount-usd">
																		<span class="REPLACE">$42069</span>
																	</span>
																	/
																	<span class="company-product-amount-recurrence">
																		(<span class="REPLACE">Monthly</span>)
																	</span>
																	
															</div>
														</td>
														<td>
															<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sales Rep</span>
															<div class="company-product-salesrep color-neutral">
																	<span class="REPLACE">Dahlia Hawthorne</span>
															</div>
														</td>
														<td>
															<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Status</span>
															<?php if( $i % 2 == 0): ?>
															<!-- @if active -->
																<div class="tag tag-success">Active</div>
															<?php else: ?>
															<!-- @else  -->
																<div class="tag tag-neutral">Inactive</div>
															<?PHP endif; ?>
														</td>
														<td class="outreach-table-cell-actions" width="50">
															<div class="company-product-notes color-neutral">
																<a href="#" data-toggle-modal-default class="btn btn-primary btn-symbol">
																	<i class="symbol symbol-file"></i>
																</a>
																<div class="modal modal-default" data-modal-width="700px">
																	<span class="REPLACE">
																		<?php app_get_component('components/_DEMO-html-markup') ?>
																	</span>
																</div>
															</div>
														</td>
													</tr>
												<?php } ?>
								</table>

								<a
									href="#m-editor-sales"
									data-toggle-modal-default
									data-modal-title="Add Sale"
									class="display-inline-block text-decoration-none">
										<span class="btn btn-symbol btn-primary-glassy btn-round">
											<i class="symbol symbol-plus"></i>
										</span>
										<span class="color-neutral text-transform-uppercase">Add</span>
								</a>
								<?php app_get_component('components/modal-form-sales') ?>
							</div>
						
						<!-- hot prospects -->
							<div class="flex-col-xs-12">
									<div class="padding-small background-error color-background radius-top">
										<h5 class="no-margin color-inherit leading-compact">
											Proposed Products
										</h5>
									</div>
									<table class="outreach-table margin-small-bottom outreach-table-proposed-products">
										<tr>
											<th width="165" class="background-theme-contrast module-title">Product</th>
											<th class="background-theme-contrast module-title">Price</th>
											<th class="background-theme-contrast module-title">Monthly Value</th>
											<th class="background-theme-contrast module-title">Annual Value</th>
											<th class="background-theme-contrast module-title">Est Close %</th>
											<th class="background-theme-contrast module-title">PMV</th>
											<th class="background-theme-contrast module-title">
												<a href="#m-editor-proposed-products" class="btn btn-link" data-modal-title="Add Proposed Products" data-toggle-modal-default>
													<i class="symbol symbol-plus"></i>
												</a>
											</th>
											
										</tr>

										<!-- @LOOP tr -->
											<tr>
												<td>
													<div class="company-proposed-product-name color-neutral font-weight-700 pointer-reference text-decoration-none">
														<span>
															<span class="REPLACE">Lawsite 360</span>
														</span>
													</div>
												</td>
												<td>
													<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Price</span>
													<div class="company-proposed-product-price color-neutral">
														<span class="REPLACE">$12,345</span>
													</div>
												</td>
												<td>
													<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
													<div class="company-proposed-product-monthlyvalue color-neutral">
														<span class="REPLACE">$54,321</span>
													</div>
												</td>
												<td>
													<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Annual Value</span>
													<div class="company-proposed-product-annualvalue color-neutral">
														<span class="REPLACE">$666,420</span>
													</div>
												</td>
												<td>
													<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Estimated Close %</span>
													<div class="company-proposed-product-estclose color-neutral">
														<span class="REPLACE">69%</span>
													</div>
												</td>
												<td>
													<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">PMV</span>
													<div class="company-proposed-product-pmv font-weight-700 color-neutral">
														<span class="REPLACE">$12,345</span>
													</div>
												</td>
												<td class="outreach-table-cell-actions text-align-center" width="50">
													<div class="company-actions position-relative">
														<?php app_get_component('components/dropdown-actions','',false,array(
															'links' => array(
																'Edit Product'
																	=> 'class="dropdown-purger" href="#m-editor-proposed-products" data-toggle-modal-default href="#m-editor-proposed-products" data-modal-title="Edit product"',
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
															<td>
																<div class="company-proposed-product-name color-neutral font-weight-700 pointer-reference text-decoration-none">
																	<span>
																		<span class="REPLACE">Lawsite 360</span>
																	</span>
																</div>
															</td>
															<td>
																<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Price</span>
																<div class="company-proposed-product-price color-neutral">
																	<span class="REPLACE">$12,345</span>
																</div>
															</td>
															<td>
																<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Monthly Value</span>
																<div class="company-proposed-product-monthlyvalue color-neutral">
																	<span class="REPLACE">$54,321</span>
																</div>
															</td>
															<td>
																<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Annual Value</span>
																<div class="company-proposed-product-annualvalue color-neutral">
																	<span class="REPLACE">$666,420</span>
																</div>
															</td>
															<td>
																<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Estimated Close %</span>
																<div class="company-proposed-product-estclose color-neutral">
																	<span class="REPLACE">69%</span>
																</div>
															</td>
															<td>
																<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">PMV</span>
																<div class="company-proposed-product-pmv font-weight-700 color-neutral">
																	<span class="REPLACE">$12,345</span>
																</div>
															</td>
															<td class="outreach-table-cell-actions text-align-center" width="50">
																<div class="company-actions position-relative">
																	<?php app_get_component('components/dropdown-actions','',false,array(
																		'links' => array(
																			'Edit Product'
																				=> 'class="dropdown-purger" href="#m-editor-proposed-products" data-toggle-modal-default href="#m-editor-proposed-products" data-modal-title="Edit company"',
																			'Delete'
																				=> 'href="#"'
																		)
																	)) ?>
																</div>
															</td>
														</tr>
													<?php } ?>
									</table>

									<?php app_get_component('components/modal-form-proposed-products') ?>
								</div>
					</div>
			</div>


		<!-- notes -->
			<?php app_get_component('components/module-notes','',false,array(
				'has_add_note' => true,
			)) ?>
	</div>

	
</div>