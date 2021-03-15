
<div id="workflow-dash-clients-heading" class="position-relative">
	<div class="flex-grid flex-grid-compact justify-content-space-between">
		<div class="flex-child">
			<p class="no-margin special-secondary text-clip-background background-gradient">
				Clients
			</p>
		</div>
		<div class="flex-child align-items-center position-relative  flex-md flex-direction-row-reverse">

			<a href="<?=app_create_link(array('template'=>'client-edit')) ?>" class="btn btn-primary btn-block-mobile " title="Add Project">
				Add Client&nbsp;<i class="symbol symbol-plus"></i>
			</a>
			<span class="hide-mobile spacer">&nbsp;&nbsp;</span>
			<?php app_get_component('components/filter-dropdown-clients-workflow'); ?>
		</div>
	</div>
</div>

<div id="workflow-clients" class="module-grid">
	<div
		id="workflow-dash-clients"
		class="module">
		<div class="module-content overlow-hidden">
			<!-- @if there are entries -->
				<div class="table-wrapper dashboard-table-wrapper-gutterless">
					<table class="text-vertical-align-middle dashboard-table-cells-match-height accordion-group">
						<tr>
							<th class="dashboard-table-cell-max-larger text-nowrap">Name</th>
							<th class="dashboard-table-cell-max-larger text-nowrap">Contact</th>
							<th class="dashboard-table-cell-max-larger text-nowrap">Phone</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">REP</th>
							<th class="dashboard-table-cell-thumbnail text-nowrap text-align-center">AM</th>
						</tr>

						<!-- @loop TBODY -->
							<tbody class="table-client-row">
								<tr class="table-client-header">
									<td class="dashboard-table-cell-max-larger">
										<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed">
											<div class="flex-col-1 align-self-center">
												<a data-toggle="accordion" href="#client-details-REPLACEWithClientId">
													<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
												</a>
											</div>
											<div class="flex-col-11">
												<a href="<?= app_create_link(array('template'=>'client-view')) ?>" class="client-name text-wrap-ellipsis font-weight-700 color-inherit color-primary-hover color-primary-focus">
													Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name 
												</a>
												<a target="_blank" href="http://REPLACEWithClientURL.com"class="client-name text-wrap-ellipsis">
													REPLACEWithClientDomain.com
												</a>
											</div>
										</div>
									</td>
									<td class="dashboard-table-cell-max-larger">
										<!-- @if has contact information -->
											<span class="client-contact-name text-wrap-ellipsis">
												<span class="REPLACE">Dayman A. Fighter of The Nightman aka Champion of The Sun</span>
											</span>
											<a class="client-contact-email text-wrap-ellipsis" href="#mb-editor-email" data-toggle-modal-board>
												<span class="REPLACE">
													scarKillsMufasa@lionKingSpoilers.com
												</span>
											</a>
										<!-- @else no contact information -->
											<span class="color-neutral font-style-italic">Not Available</span>
									</td>
									<td class="dashboard-table-cell-max-larger">
										<!-- @if has contact information -->
											<a class="client-contact-email text-wrap-ellipsis color-inherit color-primary-hover" href="tel:REPLACEWithValidPhoneNumber">
												<span class="REPLACE">
													(619) 555-6669
												</span>
											</a>
										<!-- @else no contact information -->
											<span class="color-neutral font-style-italic">Not Available</span>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center">
										<!-- @if has sales rep -->
											<?php app_get_component('components/profile-image-small') ?>
										<!-- @else -->
											<span class="color-neutral font-style-italic">Not set</span>
									</td>
									<td class="dashboard-table-cell-thumbnail text-align-center">
										<!-- @if has account manager -->
											<?php app_get_component('components/profile-image-small') ?>
										<!-- @else -->
											<span class="color-neutral font-style-italic">Not set</span>
										
									</td>
								</tr>
								<tr id="client-details-REPLACEWithClientId" class="table-client-details accordion background-theme-contrast">
									<td class="dashboard-table-cell-max-larger text-vertical-align-top">
										<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed justify-content-flex-end">
											<div class="flex-col-11">
												<div class="client-address">
													<h5 class="no-margin-y">Address</h5>
													<!-- @TODO update based on client edit template input -->
													<!-- @if address -->
														<span class="REPLACE">
															Address Line 1<br>
															Address Line 2<br>
															Bikini Bottom PU, 42069<br>
														</span>
													<!-- @else no address  -->
														<span class="color-neutral font-style-italic">Not Available</span>
												</div>
											</div>
										</div>
									</td>
									<td colspan="4" class="dashboard-table-cell-max-larger text-vertical-align-top">
										<h5 class="no-margin-y">Additional Notes</h5>
										<!-- @if address -->
											<div class="client-additional-notes text-wrap-break">
												<span class="REPLACE">
													We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give, never gonna give (Give you up) (Ooh) Never gonna give, never gonna give (Give you up)<br><br> We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry
												</span>
											</div>
										<!-- @else no address  -->
											<span class="color-neutral font-style-italic">Not Available</span>

									</td>
								</tr>
							</tbody>


								<!-- @PLACEHOLDER: DELETE WHEN READY -->
									<?php for($i=1; $i<=20; $i++){ ?>
										<tbody class="table-client-row">
											<tr class="table-client-header">
												<td class="dashboard-table-cell-max-larger">
													<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed">
														<div class="flex-col-1 align-self-center">
															<a data-toggle="accordion" href="#client-details-<?= $i; ?>">
																<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
															</a>
														</div>
														<div class="flex-col-11">
															<a href="<?= app_create_link(array('template'=>'client-view')) ?>" class="client-name text-wrap-ellipsis font-weight-700 color-inherit color-primary-hover color-primary-focus">
																Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name 
															</a>
															<a target="_blank" href="http://REPLACEWithClientURL.com"class="client-name text-wrap-ellipsis">
																REPLACEWithClientDomain.com
															</a>
														</div>
													</div>
												</td>
												<td class="dashboard-table-cell-max-larger">
													<!-- @if has contact information -->
														<span class="client-contact-name text-wrap-ellipsis">
															<span class="REPLACE">Dayman A. Fighter of The Nightman aka Champion of The Sun</span>
														</span>
														<a class="client-contact-email text-wrap-ellipsis" href="#mb-editor-email" data-toggle-modal-board>
															<span class="REPLACE">
																scarKillsMufasa@lionKingSpoilers.com
															</span>
														</a>
												</td>
												<td class="dashboard-table-cell-max-larger">
													<!-- @else no contact information -->
														<span class="color-neutral font-style-italic">Not Available</span>
												</td>
												<td class="dashboard-table-cell-thumbnail text-align-center">
													<!-- @if has sales rep -->
														<?php app_get_component('components/profile-image-small') ?>
												</td>
												<td class="dashboard-table-cell-thumbnail text-align-center">
													<!-- @else -->
														<span class="color-neutral font-style-italic">Not set</span>
													
												</td>
											</tr>
											<tr id="client-details-<?= $i; ?>" class="table-client-details accordion background-theme-contrast">
												<td class="dashboard-table-cell-max-larger text-vertical-align-top">
													<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed justify-content-flex-end">
														<div class="flex-col-11">
															<div class="client-address">
																<h5 class="no-margin-y">Address</h5>
																<!-- @TODO update based on client edit template input -->
																<!-- @if address -->
																	<span class="REPLACE">
																		Address Line 1<br>
																		Address Line 2<br>
																		Bikini Bottom PU, 42069<br>
																	</span>
																<!-- @else no address  -->
																	<span class="color-neutral font-style-italic">Not Available</span>
															</div>
														</div>
													</div>
												</td>
												<td colspan="4" class="dashboard-table-cell-max-larger text-vertical-align-top">
													<h5 class="no-margin-y">Additional Notes</h5>
													<!-- @if address -->
														<div class="client-additional-notes text-wrap-break">
															<span class="REPLACE">
																We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give, never gonna give (Give you up) (Ooh) Never gonna give, never gonna give (Give you up)<br><br> We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry
															</span>
														</div>
													<!-- @else no address  -->
														<span class="color-neutral font-style-italic">Not Available</span>

												</td>
											</tr>
										</tbody>


										<tbody class="table-client-row">
											<tr class="table-client-header">
												<td class="dashboard-table-cell-max-larger">
													<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed">
														<div class="flex-col-1 align-self-center">
															<a data-toggle="accordion" href="#client-details-<?= $i*2+20; ?>">
																<i class="symbol symbol-arrow-down symbol-arrow-up-toggle"></i>
															</a>
														</div>
														<div class="flex-col-11">
															<a href="<?= app_create_link(array('template'=>'client-view')) ?>" class="client-name text-wrap-ellipsis font-weight-700 color-inherit color-primary-hover color-primary-focus">
																Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name Client with a really long name 
															</a>
															<a target="_blank" href="http://REPLACEWithClientURL.com"class="client-name text-wrap-ellipsis">
																REPLACEWithClientDomain.com
															</a>
														</div>
													</div>
												</td>
												<td class="dashboard-table-cell-max-larger">
													<!-- @else no contact information -->
														<span class="color-neutral font-style-italic">Not Available</span>
												</td>
												<td class="dashboard-table-cell-max-larger">
													<!-- @if has contact information -->
														<a class="client-contact-email text-wrap-ellipsis color-inherit color-primary-hover" href="tel:REPLACEWithValidPhoneNumber">
															<span class="REPLACE">
																(619) 555-6669
															</span>
														</a>
												</td>
												<td class="dashboard-table-cell-thumbnail text-align-center">
													<!-- @else -->
														<span class="color-neutral font-style-italic">Not set</span>
												</td>
												<td class="dashboard-table-cell-thumbnail text-align-center">
													<!-- @if has account manager -->
														<?php app_get_component('components/profile-image-small') ?>
													
												</td>
											</tr>
											<tr id="client-details-<?= $i*2+20; ?>" class="table-client-details accordion background-theme-contrast">
												<td class="dashboard-table-cell-max-larger text-vertical-align-top">
													<div class="flex-grid flex-grid-no-gutter-y flex-grid-compact flex-grid-fixed justify-content-flex-end">
														<div class="flex-col-11">
															<div class="client-address">
																<h5 class="no-margin-y">Address</h5>
																<!-- @TODO update based on client edit template input -->
																<!-- @if address -->
																	<span class="REPLACE">
																		Address Line 1<br>
																		Address Line 2<br>
																		Bikini Bottom PU, 42069<br>
																	</span>
																<!-- @else no address  -->
																	<span class="color-neutral font-style-italic">Not Available</span>
															</div>
														</div>
													</div>
												</td>
												<td colspan="4" class="dashboard-table-cell-max-larger text-vertical-align-top">
													<h5 class="no-margin-y">Additional Notes</h5>
													<!-- @if address -->
														<div class="client-additional-notes text-wrap-break">
															<span class="REPLACE">
																We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it And if you ask me how I'm feeling Don't tell me you're too blind to see Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give, never gonna give (Give you up) (Ooh) Never gonna give, never gonna give (Give you up)<br><br> We've known each other for so long Your heart's been aching but you're too shy to say it Inside we both know what's been going on We know the game and we're gonna play it I just wanna tell you how I'm feeling Gotta make you understand Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry Never gonna say goodbye Never gonna tell a lie and hurt you Never gonna give you up Never gonna let you down Never gonna run around and desert you Never gonna make you cry
															</span>
														</div>
													<!-- @else no address  -->
														<span class="color-neutral font-style-italic">Not Available</span>

												</td>
											</tr>
										</tbody>


									<?php } ?>
					</table>
				</div>
			<!-- @else no entries -->
				<p class="p color-neutral font-style-italic">No clients available yet.</p>
		</div>
	</div>
</div>