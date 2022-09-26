
<div id="outreach-settings-heading" class="flex-grid justify-content-space-between align-items-center">
	<div class="flex-col-xs-12">
		<h1 class="no-margin">Settings</h1>
	</div>
</div>
<div class="module module-expanded">
	<div class="module-content">
		<!-- General Information -->
			<form action="">
				<h4 class="color-primary no-margin-y">General Information</h4>
	
				<div class="flex-grid flex-grid-fixed">
					<div class="flex-col-xs-12 flex-col-sm-6">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="first_name">First Name</label>
							<input type="text"  name="first_name" id="first_name" class=" input input-single-line" placeholder="First Name">
						</div>
					</div>
					<div class="flex-col-xs-12 flex-col-sm-6">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="last_name">Last Name</label>
							<input type="text"  name="last_name" id="last_name" class=" input input-single-line" placeholder="Last Name">
						</div>
					</div>
					<div class="flex-col-xs-12">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="email">Email</label>
							<input type="text"  name="email" id="email" class="input-single-line input" placeholder="email@domain.com">
						</div>
					</div>
					<div class="flex-col-xs-12">
						<button class="btn btn-large btn-primary-gradient font-size-normalize">Save</button>
					</div>
				</div>
			</form>

		<!-- Password -->

			<form action="">
				<h4 class="color-primary no-margin-bottom margin-large-top">Change Password</h4>
	
				<div class="flex-grid flex-grid-fixed">
					<div class="flex-col-xs-12 flex-col-sm-6">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="first_name">New Password</label>
							<div class="input-group input-group-horizontal input-block">
								<!-- @NOTE
									input
										dynamic attributes:
											type => toggles to either text or password
								-->
								<input type="password"  name="first_name" id="first_name" class=" input input-single-line" placeholder="First Name">
								<!--
									@NOTE:
									classes to add:
										.btn
										 `active` => `if input type is text`
								-->
								<button class="btn color-inherit border-color-neutral-alpha-3"><i class="symbol symbol-visible symbol-invisible-toggle"></i></button>
							</div>
						</div>
					</div>
					<div class="flex-col-xs-12 flex-col-sm-6">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label class="input-label" for="last_name">Repeat Password</label>
							<div class="input-group input-group-horizontal input-block">
								<!-- @NOTE
									input
										dynamic attributes:
											type => toggles to either text or password
								-->
								<input type="password"  name="last_name" id="last_name" class=" input input-single-line" placeholder="Last Name">
								<!--
									@NOTE:
									classes to add:
										.btn
										 `active` => `if input type is text`
								-->
								<button class="btn color-inherit border-color-neutral-alpha-3"><i class="symbol symbol-visible symbol-invisible-toggle"></i></button>
							</div>
						</div>
					</div>
					<div class="flex-col-xs-12">
						<button class="btn btn-large btn-primary-gradient font-size-normalize">Save</button>
					</div>
				</div>
			</form>
		
		<!-- Mailbox -->

			<div class="flex-grid flex-grid-compact justify-content-space-between flex-grid-no-gutter-y align-items-flex-end">
				<div class="flex-col-xs-12 flex-col-sm-6">
					<h4 class="color-primary no-margin-bottom margin-large-top">Mailboxes</h4>
				</div>
				<div class="flex-child flex-0-0">
					<a href="#m-settings-mailbox-add" class="btn btn-primary-outline" data-toggle-modal-default>Add mailbox <i class="symbol symbol-plus"></i></a>
					<div id="m-settings-mailbox-add" class="modal modal-default" data-modal-width="360px">
						<div class="text-align-center">
							<h1 class="no-margin-top">Add Mailbox</h1>
							<ul class="list-group list-group-small no-margin-y">
								<li><a href="#REPLACE" target="_blank"><span class="REPLACE">Send source name</span></a></li>
								<!-- @PLACEHOLDER. delete when ready -->
									<li><a href="#" target="_blank">Office365</a></li>
									<li><a href="#" target="_blank">Gmail</a></li>
									<li><a href="#" target="_blank">Mailgun</a></li>
									<li><a href="#m-settings-mailbox-add" data-toggle-modal-default-close>Cancel</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<table class="table-fixed outreach-table margin-top">
				<tr>
					<th class="background-theme-contrast module-title text-nowrap">
						Email Address
					</th>
					<th class="background-theme-contrast module-title text-nowrap" width="100">
						&nbsp;<span class="sr-only">Send</span>
					</th>
					<th class="background-theme-contrast module-title text-nowrap">
						&nbsp;<span class="sr-only">Sync</span>
					</th>
					<th class="background-theme-contrast module-title text-nowrap" width="185">
						&nbsp;<span class="sr-only">Track Opens</span>
					</th>
					<th class="background-theme-contrast module-title text-nowrap" width="180">
						&nbsp;<span class="sr-only">Track Clicks</span>
					</th>
					<th class="background-theme-contrast module-title text-nowrap">
						Sent By
					</th>
					<th class="background-theme-contrast module-title text-nowrap" width="50">&nbsp;<span class="sr-only">Actions</span></th>
				</tr>

				<!-- @LOOP row -->
					<tr>
						<td>
							<form action="">
								<input type="email" class="input input-blend" size="24" value="hello@ace-attorney.com">
	
								<!-- @if is the default -->
									<span class="tag tag-primary">Default</span>
							</form>
						</td>
						<td width="100">
							<div class="inline-flex-xs align-items-center">
								<label for="email-send" class=" margin-small-top margin-small-right">Send</label>
								<div id="email-send" name="email-send" class="input-toggle input-large">
									<input type="checkbox" class="input">
									<label for="email-send" class="input-label input-toggle-label">
										<div class="sr-only">Toggle send enabled</div>
									</label>
								</div>
							</div>
						</td>
						<td width="250">
							
							<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between align-items-center flex-grid-no-gutter-y">
								<div class="flex-child flex-0-0">
									<div class="inline-flex-xs align-items-center">
										<label for="email-sync" class=" margin-small-top margin-small-right">Sync</label>
										<div id="email-sync" name="email-sync" class="input-toggle input-large">
											<input type="checkbox" class="input">
											<label for="email-send" class="input-label input-toggle-label">
												<div class="sr-only">Toggle sync enabled</div>
											</label>
										</div>
									</div>
								</div>
								<div class="flex-child flex-1-1">
									<div class="font-size-small color-neutral margin-small-top">
										synced <span class="REPLACE">a year</span> ago
									</div>
								</div>
							</div>
						</td>
						<td width="185">
							<div class="inline-flex-xs align-items-center">
								<label for="email-open-tracking-enabled" class="margin-small-top margin-small-right">
									Track opens
								</label>
								<div id="email-send" name="email-send" class="input-toggle input-large">
									<input type="checkbox" class="input">
									<label for="email-send" class="input-label input-toggle-label">
										<div class="sr-only">Toggle track opens</div>
									</label>
								</div>
							</div>
						</td>
						
						<td width="180">
							<div class="inline-flex-xs align-items-center">
								<label for="email-open-tracking-enabled" class="margin-small-top margin-small-right">
									Track clicks
								</label>
								<div id="email-send" name="email-send" class="input-toggle input-large">
									<input type="checkbox" class="input">
									<label for="email-send" class="input-label input-toggle-label">
									<div class="sr-only">Toggle track clicks</div>
									</label>
								</div>
							</div>
						</td>
						
						<td>
							<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sent by</span>
							<div data-toggle-modal-default>
								<span class="REPLACE">Gmail</span>
							</div>
							<div class="modal modal-default" data-modal-width="360px" data-modal-title="Edit Source">
									<form action="">
										<ul class="list-group list-group-small no-margin-y">
											<li><label><input name="email-source" type="radio"> <span class="REPLACE">Send source name</span></label></li>
												<!-- @PLACEHOLDER. delete when ready -->
													<li><label><input name="email-source" type="radio"> Office365</label></li>
													<li><label><input name="email-source" type="radio"> Gmail</label></li>
													<li><label><input name="email-source" type="radio"> Mailgun</label></li>
										</ul>
										<div class="text-align-right margin-top">
											<button class="btn btn-link" href="#" data-toggle-modal-default-close>Cancel</button>
											<button class="btn btn-primary">Save</button>
										</div>
									</form>
							</div>

						</td>
						<td class="outreach-table-cell-actions text-align-center" width="50">
							<div class="company-actions position-relative">
								<?php app_get_component('components/dropdown-actions','',false,array(
									'links' => array(
										'Set As Default'
											=> 'href ="#"',
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
									<form action="">
										<?php if( $i % 2 == 0): ?>
											<input type="email" class="input input-blend" size="24" value="twilight@spy-family.net">
										<?php else: ?>
											<input type="email" class="input input-blend" size="24" value="miles.edgelord@ace-attorney.com">
										<?php endif; ?>
									</form>
								</td>
								<td width="100">
									<div class="inline-flex-xs align-items-center">
										<label for="email-send" class=" margin-small-top margin-small-right">Send</label>
										<div id="email-send" name="email-send" class="input-toggle input-large ">
											<input type="checkbox" class="input"  <?= ( $i % 2 == 0) ? 'checked' : '' ?>>
											<label for="email-send" class="input-label input-toggle-label">
												<div class="sr-only">
													Toggle Send
												</div>
											</label>
										</div>
									</div>
								</td>
								<td>
									
									<div class="task-toggle-reminder-wrapper flex-grid flex-grid-compact flex-grid-fixed justify-content-space-between align-items-center flex-grid-no-gutter-y">
										<div class="flex-child flex-0-0">
											<div class="inline-flex-xs align-items-center">
												<label for="email-sync" class=" margin-small-top margin-small-right">Sync</label>
												<div id="email-sync" name="email-sync" class="input-toggle input-large">
													<input type="checkbox" class="input" <?= ( $i % 3 == 0) ? 'checked' : '' ?>>
													<label for="email-send" class="input-label input-toggle-label">
														<div class="sr-only">
															Toggle Sync
														</div>
													</label>
												</div>
											</div>
										</div>
										<div class="flex-child flex-1-1">
											<div class="font-size-small color-neutral margin-small-top">
												synced <span class="REPLACE">69 seconds</span> ago
											</div>
										</div>
									</div>
								</td>
								<td width="185">
									<div class="inline-flex-xs align-items-center">
										<label for="email-open-tracking-enabled" class="margin-small-top margin-small-right">
											Track opens
										</label>
										<div id="email-send" name="email-send" class="input-toggle input-large">
											<input type="checkbox" class="input">
											<label for="email-send" class="input-label input-toggle-label">
												<div class="sr-only">Toggle track opens</div>
											</label>
										</div>
									</div>
								</td>
								
								<td width="180">
									<div class="inline-flex-xs align-items-center">
										<label for="email-open-tracking-enabled" class="margin-small-top margin-small-right">
											Track clicks
										</label>
										<div id="email-send" name="email-send" class="input-toggle input-large">
											<input type="checkbox" class="input">
											<label for="email-send" class="input-label input-toggle-label">
											<div class="sr-only">Toggle track clicks</div>
											</label>
										</div>
									</div>
								</td>
								<td>
									<span class="hide-nonmobile no-margin outreach-table-mobile-label h6 color-neutral">Sent by</span>
									<div data-toggle-modal-default>
										<span class="REPLACE">Office365</span>
									</div>
									<div class="modal modal-default" data-modal-width="360px" data-modal-title="Edit Source">
											<form action="">
												<ul class="list-group list-group-small no-margin-y">
													<li><label><input name="email-source" type="radio"> <span class="REPLACE">Send source name</span></label></li>
														<!-- @PLACEHOLDER. delete when ready -->
															<li><label><input name="email-source" type="radio"> Office365</label></li>
															<li><label><input name="email-source" type="radio"> Gmail</label></li>
															<li><label><input name="email-source" type="radio"> Mailgun</label></li>
												</ul>
												<div class="text-align-right margin-top">
													<button class="btn btn-link" href="#" data-toggle-modal-default-close>Cancel</button>
													<button class="btn btn-primary">Save</button>
												</div>
											</form>
									</div>
								</td>
								<td class="outreach-table-cell-actions text-align-center" width="50">
									<div class="company-actions position-relative">
										<?php app_get_component('components/dropdown-actions','',false,array(
											'links' => array(
												'Set As Default'
													=> 'href ="#"',
												'Delete'
													=> 'href="#"'
											)
										)) ?>
									</div>
								</td>
							</tr>
						<?php } ?>
			</table>

		<!-- Notifications -->

			<h4 class="color-primary no-margin-bottom margin-large-top">Notifications</h4>

			<form action="">
				
				<ul class="list-group margin-top">
					<li>
						<label>
							<input name="notification_desktop" type="checkbox" class="input input-inline">
							Enable desktop notifications
						</label>
					</li>
					<li>
						<label>
							<input name="notification_open" type="checkbox" class="input input-inline">
							Enable email notification on email opens
						</label>
					</li>
					<li>
						<label>
							<input name="notification_replies" type="checkbox" class="input input-inline">
							Enable email notification on replies
						</label>
					</li>
					<li>
						<label>
							<input name="notification_replies_nonrecipient" type="checkbox" class="input input-inline">
							Notify if we detect a reply from a non-recipient
						</label>
					</li>
				</ul>

				<button class="btn btn-large btn-primary-gradient font-size-normalize">Save</button>
			</form>
	</div>
</div>