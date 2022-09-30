
<form  action="" class="flex-1-1 flex-xs flex-direction-column">
	<div class="theme-inverse padding radius-small-top position-sticky offfset-0-x offset-0-top">
		<div class="flex-grid flex-grid-compact flex-no-wrap flex-grid-no-gutter-y flex-grid-compact align-items-center justify-content-space-between">
			<div class="flex-col-xs-4 flex-col-sm-6">
				<!-- Heading -->
				<div class="font-weight-700">
					New Message
				</div>
			</div>
			<div class="flex-child flex-0-0">
				<!-- Disable tracking -->
					<span class="margin-small-right">
						<label for="email-disable-tracking"><span class="hide-mobile">Disable</span> Tracking</label>
						<input id="email-disable-tracking" type="checkbox" class="input-inline">
					</span>
				<!-- Fullscreen Modal -->
					<a href="#" data-toggle-modal-default-fullscreen class="color-inherit btn">
						<span class="sr-only">Expand Modal</span>
						<i class="symbol symbol-expand symbol-collapse-toggle"></i>
					</a>
				<!-- Close Modal -->
					<a href="#" data-toggle-modal-default class="color-inherit btn">
						<span class="sr-only">Cancel Email</span>
						<i class="symbol symbol-close"></i>
					</a>
			</div>
		</div>
	</div>
	<div class="flex-1-1 margin-auto-bottom padding">
		<!-- <div class="container"> -->

			<div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-from" class="input-label">From</label>
						</div>
						<div class="flex-col-xs-9 flex-col-sm-8">
							<select name="" id="editor-email-from" class="input input-select input-block-mobile">
								<option value="">Select Your Email Address...</option>
									<!-- @PLACEHOLDER. delete when ready -->
										<option value="">myemail@outlook.com</option>
										<option value="">myothweremailbutitisfrom@gmail.com</option>
										<option value="">somethingelse@email.com</option>
							</select>
						</div>
					</div>
				</div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact justify-content-space-between">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-to" class="input-label">To</label>
						</div>
						<div class="flex-col-xs-9 flex-col-sm-8 margin-auto-right">
							<select name="" id="editor-email-to" class="input input-select input-block-mobile">
								<option value="">Send to...</option>
									<!-- @PLACEHOLDER. delete when ready -->
										<option value="">phoenixwright@ace-attorney.com</option>
										<option value="">aceattorneyvalentina@ihatedarna.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
							</select>
						</div>
						<div class="flex-child flex-1-1 text-align-right">
							<div class="btn btn-group btn-group-horizontal">
								<a href="#m-editor-email-cc-enable" data-accordion-changehash="false" data-toggle-accordion class="btn btn-default">Cc</a>
								<a href="#m-editor-email-bcc-enable" data-accordion-changehash="false" data-toggle-accordion class="btn btn-default">Bcc</a>
							</div>
						</div>
					</div>
				</div>
				<div id="m-editor-email-cc-enable" class="accordion border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-cc" class="input-label">Cc</label>
						</div>
						<div class="flex-col-xs-9 flex-col-sm-8">
							<select name="" id="editor-email-cc" class="input input-select input-block-mobile">
								<option value="">CC to...</option>
									<!-- @PLACEHOLDER. delete when ready -->
										<option value="">phoenixwright@ace-attorney.com</option>
										<option value="">aceattorneyvalentina@ihatedarna.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
							</select>
						</div>
					</div>
				</div>
				<div id="m-editor-email-bcc-enable" class="accordion border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-bcc" class="input-label">Bcc</label>
						</div>
						<div class="flex-col-xs-9 flex-col-sm-8">
							<select name="" id="editor-email-bcc" class="input input-select input-block-mobile">
								<option value="">BCC to...</option>
									<!-- @PLACEHOLDER. delete when ready -->
										<option value="">edgelord@ace-attorney.com</option>
										<option value="">darna@excuseyouiamdarna.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
										<option value="">email@email.com</option>
							</select>
						</div>
					</div>
				</div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-" class="input-label">Template</label>
						</div>
						<div class="flex-col-xs-9 flex-col-sm-10 flex-col-md-8">
							<select name="" id="editor-email-bcc" class="input input-select input-block">
								<option value="">Select a Template...</option>
									<!-- @PLACEHOLDER. delete when ready -->
										<option value="">A Template</option>
										<option value="">Another Template</option>
										<option value="">Other Template</option>
										<option value="">Other Template that is not another one or a one. it's different</option>
							</select>
						</div>
					</div>
				</div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-3 flex-col-sm-2 text-align-right">
							<label for="editor-email-subject" class="input-label">Subject</label>
						</div>
						<div class="flex-col-xs-7 flex-col-sm-10 align-self-center">
							<input type="text" name="" id="editor-email-subject" class="input input-block input-blend no-border" placeholder="Type a subject line...">
						</div>
					</div>
				</div>

				<div class="p padding-small-y">
					<textarea name="" id="" cols="30" rows="10" class="input input-multiple-line input-block">REPLACE w/ texteditor</textarea>
				</div>
			</div>
		<!-- </div> -->
	</div>
	<div class="background-theme-contrast padding-x radius-small-bottom position-sticky offfset-0-x offset-0-bottom">
		<div class="flex-grid flex-grid-compact">
			<!-- @NOTE
				.btn[type=submit]
					classes to add

					'btn-neutral disabled' => if schedule email accordion is opened
					'btn-primary' => if schedule email accordion is closed
		
			-->
			<div class="flex-child flex-0-0 align-self-flex-end">
				<div class="flex-grid flex-grid-compact text-leading-constricted justify-content-space-between">
					<div class="flex-child flex-0-0 align-self-flex-end">

						<button type="submit" class="btn margin-small-right
							btn-primary
						">
							Send Email
						</button>
						<a title="Schedule Email" href="#editor-email-schedule-enable" data-toggle-accordion  class="btn-group btn-group-horizontal btn-group-unite margin-small-right">
							<span class="btn btn-primary btn-symbol"><i class="symbol symbol-calendar-alt text-leading-contricted font-size-large"></i></span>
							<span title="Schedule Email" data-href="#editor-email-schedule-enable" data-toggle-accordion class="btn btn-primary border-color-background no-border-y no-border-right">
								<i class="hide-nonmobile symbol symbol-caret-down symbol-caret-up-toggle"></i>
								<i class="hide-mobile symbol symbol-caret-right symbol-caret-left-toggle"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div id="editor-email-schedule-enable" class="flex-col-xs-12 flex-col-md-9 accordion">
				<div class="flex-grid flex-grid-compact text-leading-constricted justify-content-space-between align-items-center">
					<div class="flex-child flex-0-0">
						<strong>Schedule Email</strong><br>
						<span class="color-neutral font-size-small">
							<span class="REPLACE">Pacific Time (PT)</span>
						</span>
					</div>
					<div class="flex-col-xs-12 flex-col-sm-3">
						<label for="editor-email-schedule-date" class="sr-only">Schedule date</label>
						<input type="date" name="" id="editor-email-schedule-date" class="input input-single-line input-block">
					</div>
					<div class="flex-col-xs-12 flex-col-sm-3">
						<label for="editor-email-schedule-time" class="sr-only">Schedule time</label>
						<input type="time" name="" id="editor-email-schedule-time" class="input input-single-line input-block">
					</div>
					<div class="flex-child flex-1-1">

						<button type="submit" class="btn-group btn-group-horizontal btn-group-unite">
							<span class="btn btn-primary btn-symbol"><i class="symbol symbol-paperplane text-leading-contricted font-size-large"></i></span>
							<span class="btn btn-primary border-color-background no-border-y no-border-right">Schedule Email</span>
						</button>
						<a href="#editor-email-schedule-enable" data-toggle-accordion type="submit" class="flex-0-0 btn btn-link color-neutral color-primary-hover text-decoration-line-under">cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
