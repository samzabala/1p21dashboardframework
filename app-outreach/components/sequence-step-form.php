<form action="">
	<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
		<label class="input-label">Sequence Type</label>
		<select class="input-select input-block">
			<option value="scheduled_email">Scheduled Email (Emails Automatically Delivered)</option>
			<option value="manual_email">Manual Email (Task &amp; Reminder to send email)</option>
			<option value="phone_call">Phone Call (Task &amp; Reminder to call prospect)</option>
			<option value="gen_task">General Task (Task &amp; Reminder for specific activity)</option>
			<option value="manual_task">Linkedin (Task & Reminder to connect on LI)</option>
		</select>
	</div>
	
	<!-- @if can set up a task type -->
		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label class="input-label">Task Title <span class="color-error">*</span></label>
			<div class="input-group input-block input-group-horizontal input-responsive">
				<span class="input-label color-neutral-dark font-weight-400">
					<span class="REPLACE">Wright & Co. Law</span>
				</span>
				<!-- @NOTE
					attrs to change

						value -> will prefill the following:
							`Send Manual Email` => Manual Email
							`Call The Firm` => Phone Call
							`Connect on Linkedin` => Linkedin

				-->
				<input type="text" class=" input input-single-line" placeholder="Enter Task Name here" />
			</div>
		</div>


		<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
			<label class="input-label">Description</label>
			<textarea class="input input-multiple-line"  cols="30" rows="10">REPLACE with tinymce</textarea>
		</div>

	<!-- @if can require schedule -->
		<label class="input-label">Schedule<span class="color-error">*</span></label>
		<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
			<div class="flex-child flex-0-1">
				<div class="input-group input-block input-group-horizontal p">
					<input type="number" class="outreach-input-small-number input input-single-line flex-1-1" step="1" size="4" />
					<label class="input input-single-line background-transparent flex-0-0 color-neutral">Days</label>
				</div>
			</div>
			<div class="flex-child flex-0-1">
				<div class="input-group input-block input-group-horizontal p">
					<input type="number" class="outreach-input-small-number input input-single-line flex-1-1" step="1" size="4" />
					<label class="input input-single-line background-transparent flex-0-0 color-neutral">Hours</label>
				</div>
			</div>
			<div class="flex-child flex-0-1">
				<div class="input-group input-block input-group-horizontal p">
					<input type="number" class="outreach-input-small-number input input-single-line flex-1-1" step="1" size="4" />
					<label class="input input-single-line background-transparent flex-0-0 color-neutral">Minutes</label>
				</div>
			</div>
		</div>

		<div class="padding background-theme-contrast p">
			<h6 class="no-margin-top">Notes:</h6>
			<span class="REPLACE">Something is going to happen after a few days after that one thing</span>
		</div>

		<!-- If an email type -->

			<!-- @if can require email template -->

				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label class="input-label">Template</label>
					<select class="input-select input-block">
						<option value="">Select Template</option>
							<!-- @PLACEHOLDER: DELETE WHEN READY -->
								<option value="manual_email">A template</option>
								<option value="phone_call">Another template</option>
								<option value="gen_task">Other template</option>
								<option value="manual_task">Another other template</option>
					</select>
				</div>

				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label class="input-label">Subject</label>
					<input type="text" class=" input input-single-line" placeholder="Enter a name for the template" />
				</div>

				<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
					<label class="input-label">Message</label>
					<textarea class="input input-multiple-line"  cols="30" rows="10">REPLACE with tinymce</textarea>
				</div>

				<div class="flex-grid flex-grid-no-gutter-y align-items-center">
					<div class="flex-0-0 flex-child">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label>
								<input type="checkbox" class=" input input-inline" />
								<span>Save as a new template</span>
							</label>
						</div>
					</div>
					<!-- @if save as new template is enabled -->
					<div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-8 flex-1-1">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label class="input-label sr-only">New Template Name</label>
							<input type="text" class=" input input-single-line" placeholder="Enter a name for the template" />
						</div>
					</div>
				</div>





	<div class="text-align-right padding-small-y">

		<a href="#" data-toggle-switch class="btn btn-link">Cancel</a>
		<button class="btn btn-primary">Save</button>
	</div>
</form>