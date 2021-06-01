<!-- Main -->
<div
	class="module module-no-gutter"
	data-grid-column-md="main"
	data-grid-row-md="1 / span 6"
>
	<div class="module-content">

		<!-- main -->
			<div class="module module-large border-color-transparent">
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
						</div>
						<div class="flex-col-xs-12 flex-col-md-4 align-self-flex-end">
							<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y align-items-center">
								<div class="flex-child flex-0-0">
									<span class="btn btn-light btn-no-interaction btn-round btn-symbol btn-success-glassy">
										<i class="symbol symbol-calendar"></i>
									</span>
								</div>
								<div class="flex-child flex-1-1">
									<small class="color-neutral">Last Completed</small>
									<h4 class="no-margin">
										<span class="REPLACE">April 4th, 2020</span>
									</h4>
								</div>
							</div>
						</div>

                        <div class="position-absolute btn-symbol position-absolute offset-right-0 offset-top-0">
                            <a data-toggle-dropdown class="btn btn-neutral-glassy">
                                <span class="sr-only">Edit</span>
                                <i class="symbol symbol-kebab-horizontal"></i>
                            </a>
                            <div class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="200px">
                                <ul class="list-group">
                                    <li><a href="#mb-editor-company" data-toggle-modal-board>Edit</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
					</div>

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
										<table class="margin-small-bottom">
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Social</th>
												<th>&nbsp;<span class="sr-only">Actions</span></th>
											</tr>
											
											<!-- @LOOP tr -->
											<?app_get_component('components/company-contact-row') ?>

											<!-- @PLACEHOLDER: DELETE WHEN READY -->
											<?php for($i=1; $i<=4; $i++){ ?>
												<?app_get_component('components/company-contact-row') ?>
											<?php } ?>
										</table>
									<!-- @else -->
										<p class="color-neutral font-style-italic">No contacts available</p>

									

									
									<?app_get_component('components/link-add-row','',false,array(
										'href' => '#mb-editor-contact',
										'attrs' => 'data-toggle-modal-board data-toggle="Add Contact"'
									)) ?>
								</div>
							</div>

						<!-- additional sites -->
							<div class="flex-col-xs-12 flex-col-md-6">
								<div class="position-relative background-theme-contrast flex-grid flex-grid-no-gutter justify-content-space-between align-items-center padding-small">
									<div class="flex-child flex-1-1">
										<span class="module-title" >Additional Websites</span>
									</div>
									<div class="flex-child flex-0-0">
										<?app_get_component('components/tooltip-actions','',false,array(
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

								
								<?app_get_component('components/link-add-row','',false,array(
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

										<?app_get_component('components/tooltip-actions','',false,array(
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

								
								<?app_get_component('components/link-add-row','',false,array(
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

										<?app_get_component('components/tooltip-actions','',false,array(
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

								
								<?app_get_component('components/link-add-row','',false,array(
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
										<?app_get_component('components/tooltip-actions','',false,array(
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

								
								<?app_get_component('components/link-add-row','',false,array(
									'href' => '#company-main-competitors-add',
									'attrs' => 'data-toggle-accordion'
								)) ?>
							</div>
						
					</div>
			</div>


		<!-- notes -->
			<?php app_get_component('components/module-notes','',false,array(
				'has_add_note' => true
			)) ?>
	</div>

	
</div>