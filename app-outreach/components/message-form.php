<!--
Imports JS:

ListGroup from framework/src/js/imports/list-group
Dropdown from framework/src/js/imports/dropdown



-->
<?php
$defs = array(
	// for when it's a new conversation or not
	'is_new' => true,
	'id' => 'new',
		
	//PLACEHOLDER
	'to' => array(),
	'cc' => array(),
	'bcc' => array(),
	'subject' => '',
);

$args = app_parse_args($data,$defs);


/* @NOTE: Needed for front end to work if this will be a reused component
	id prefix for hash locations used for accordion instances and dropdowns
*/	
$instance_id = $args['id'].'-'.substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 8);




$placeholder_emails = array(
	'phoenix-wright@ace-attorney.com',
	'miles-edgeworth@chiefprosecutor.com',
	'maya-fey@ace-attorney.com',
	'pearl-fey@ace-attorney.com',
	'mia-fey@ace-attorney.com',
	'idk-souls-of-the-dead@gmail.com'
);
?>
<form  action="" class="flex-1-1 flex-xs flex-direction-column">

	<!-- Header -->
		<div class="z-index-20 theme-inverse padding position-sticky offfset-0-x offset-0-top">
			<div class="flex-grid flex-grid-compact flex-no-wrap flex-grid-no-gutter-y flex-grid-compact align-items-center justify-content-space-between">
				<div class="flex-col-xs-4 flex-col-sm-6">
					<!-- Heading -->
					<div class="font-weight-700">
						New Message
					</div>
				</div>
				<div class="flex-child flex-0-0">
					<!-- Disable tracking -->
						<label class="margin-small-right">
							<span>Disable Tracking</span>
							<input type="checkbox" class="input-inline">
						</label>
					<!-- Fullscreen Modal -->
						<a href="#" data-toggle-modal-board-fullscreen class="color-inherit btn">
							<span class="sr-only">Expand Modal</span>
							<i class="symbol symbol-expand symbol-collapse-toggle"></i>
						</a>
					<!-- Close Modal -->
						<a href="#" data-toggle-modal-board class="color-inherit btn">
							<span class="sr-only">Cancel Email</span>
							<i class="symbol symbol-close"></i>
						</a>
				</div>
			</div>
		</div>

	<!-- Form -->
		<!-- <datalist id="email-<?= $instance_id ?>-list">
			<?php foreach($placeholder_emails as $email): ?>
				<option><?=$email ?></option>
			<?php endforeach; ?>
		</datalist> -->

		<div class="flex-1-1 margin-auto-bottom padding">

			<div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-4 flex-col-sm-2">
							<span class="input-label">From</span>
						</div>
						<div class="flex-col-xs-8 flex-col-sm-8 align-self-center">
							<?php if(!$args['is_new']): ?>
								REPLACEWithUserEmailIncludedInTheThread@gmail.com
							<?php else: ?>
								<select name="" class="input input-select input-blend input-block no-border">
									<option value="">Select Your Email Address...</option>
											<!-- @PLACEHOLDER. delete when ready -->
											<option value="">myemail@outlook.com</option>
											<option value="">myothweremailbutitisfrom@gmail.com</option>
											<option value="">somethingelse@email.com</option>
								</select>
							<?php endif; ?>
						</div>
					</label>
				</div>
				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact justify-content-space-between">
						<div class="flex-col-xs-4 flex-col-sm-2">
							<span class="input-label">To</span>
						</div>
						<div class="flex-col-xs-8 flex-col-sm-10 margin-auto-right align-self-center position-relative">
						
							<!-- @hidden to input fields here -->

							<div class=" flex-grid flex-nowrap flex-grid-no-gutter-y flex-nowrap align-items-center">

								<div class="flex-child flex-1-1">
									<input type="email" multiple class="input text-decoration-none input-select input-blend input-block no-border" data-toggle-dropdown placeholder="Send To..." 
									data-href="#email-to-dropdown-<?=$instance_id ?>"
										value="<?= implode(',', $args['to']) ?>"
									>
								</div>
								<div class="flex-child flex-0-0 align-self-flex-start">

									<div class="btn btn-group btn-group-horizontal">
										<a href="#email-<?= $instance_id ?>-cc-enable" data-accordion-changehash="false" data-toggle-accordion class="btn btn-default">Cc</a>
										<a href="#email-<?= $instance_id ?>-bcc-enable" data-accordion-changehash="false" data-toggle-accordion class="btn btn-default">Bcc</a>
									</div>

								</div>
							</div>


							<!-- @if there are email not in the input list but matches the last email in the list -->

							<div class="dropdown dropdown-top-flush" id="email-to-dropdown-<?=$instance_id ?>" data-dropdown-width="100%">
								<ul class="list-group list-group-interactive">
									<?php foreach($placeholder_emails as $email): ?>

<!-- 
	@on click, appends email to value of the field. there should be no need for + and - button to be able to freeform type
-->
<li class="list-group-item dropdown-purger">
	<?=$email ?>
</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<!-- <div class="position-relative pointer-reference"
								
							>
								<div class="only-toggle position-absolute z-index-9 offset-x-0 offset-flush-top padding-small-x input input-single-line input-block no-padding">
									
								</div>
							</div> -->
						</div>
					</label>
				</div>
				<div id="email-<?= $instance_id ?>-cc-enable" class="accordion border-width-thin-bottom border-color-neutral border-style-solid">
						<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
							<div class="flex-col-xs-4 flex-col-sm-2">
								<div class="flex-sm justify-content-space-between">
									<span class="input-label display-block">Cc</span>
								</div>
							</div>
							<div class="flex-col-xs-8 flex-col-sm-8 align-self-center position-relative">
						
								<!-- @hidden to input fields here -->

								<input type="email" multiple class="input text-decoration-none input-select input-blend input-block no-border" data-toggle-dropdown placeholder="Send To..." 
									data-href="#email-cc-dropdown-<?=$instance_id ?>"
									value="<?= implode(',', $args['cc']) ?>"
								>

								<!-- @if matches any email in the database and is not in the input list -->

								<div class="dropdown dropdown-top-flush" id="email-cc-dropdown-<?=$instance_id ?>" data-dropdown-width="100%">
									<ul class="list-group list-group-interactive">
										<?php foreach($placeholder_emails as $email): ?>

											<!-- 
												@on click, appends email to value of the field. there should be no need for + and - button to be able to freeform type
											-->
											<li class="list-group-item dropdown-purger">
												<?=$email ?>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</label>
				</div>
				<div id="email-<?= $instance_id ?>-bcc-enable" class="accordion border-width-thin-bottom border-color-neutral border-style-solid">
					<!-- @loop div -->
						<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
							<div class="flex-col-xs-4 flex-col-sm-2">
								<div class="flex-sm justify-content-space-between">
									<span class="input-label display-block">Bcc</span>
								</div>
							</div>
							<div class="flex-col-xs-8 flex-col-sm-8 align-self-center position-relative">
						
								<!-- @hidden to input fields here -->

								<input type="email" multiple class="input text-decoration-none input-select input-blend input-block no-border" data-toggle-dropdown placeholder="Send To..." 
									data-href="#email-bcc-dropdown-<?=$instance_id ?>"
									value="<?= implode(',', $args['cc']) ?>"
								>

								<!-- @if matches any email in the database and is not in the input list -->

								<div class="dropdown dropdown-top-flush" id="email-bcc-dropdown-<?=$instance_id ?>" data-dropdown-width="100%">
									<ul class="list-group list-group-interactive">
										<?php foreach($placeholder_emails as $email): ?>

<!-- 
	@on click, appends email to value of the field. there should be no need for + and - button to be able to freeform type
-->
<li class="list-group-item dropdown-purger">
	<?=$email ?>
</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</label>
				</div>
				<!-- @if new composition -->
				<?php if($args['is_new']): ?>
					<div class="border-width-thin-bottom border-color-neutral border-style-solid">
						<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
							<div class="flex-col-xs-4 flex-col-sm-2">
								<span class="input-label">Template</span>
							</div>
							<div class="flex-col-xs-8 flex-col-sm-10 flex-col-md-8 align-self-center">
								<select class="input input-select input-blend input-block no-border">
									<option value="">Select a Template...</option>
										<!-- @PLACEHOLDER. delete when ready -->
											<option value="">A Template</option>
											<option value="">Another Template</option>
											<option value="">Other Template</option>
											<option value="">Other Template that is not another one or a one. it's different</option>
								</select>
							</div>
						</label>
					</div>
				<?php endif; ?>

				<div class="border-width-thin-bottom border-color-neutral border-style-solid">
					<label class="flex-grid flex-grid-fixed flex-grid-no-gutter-x flex-grid-compact">
						<div class="flex-col-xs-4 flex-col-sm-2">
							<span class="input-label">Subject</span>
						</div>
						<div class="flex-col-xs-7 flex-col-sm-10 align-self-center">
							<!-- @notes
						
								value => 'RE: Subject line' -> if a reply
							-->
							<input type="text" name="" class="input input-block input-blend no-border" placeholder="Type a subject line..."
								value="<?= !$args['is_new'] ? 'RE: REPLACE With Email Subject' : '' ?>"
							>
						</div>
					</label>
				</div>

				<!-- Attachents warning -->
				<?php if(!$args['is_new']): ?>
					<div class="alert alert-error margin-y">
						<strong>[External Email]</strong> Do not click links or attachments unless you recognize the sender and know the content is safe.
					</div>
				<?php endif; ?>

				<div class="p padding-small-y text-leading-expanded">
					<div name="" id="" cols="30" rows="10" class="input input-multiple-line input-block" contenteditable>
						REPLACE w/ texteditor



						<!-- Thread -->
						<?php if(!$args['is_new']): ?>
						
								<!-- @if has previous thread -->

								<br><hr>


								<!-- @PLACEHOLDER: Replace when ready -->

									<!-- @note: if meta markup is drastically different and cannot be manipulated, there's no need to exactly replicate  -->
									<?php app_get_component('components/email-meta'); ?>

								<?php app_get_component('components/_DEMO-html-markup'); ?>


								<blockquote>
									<?php app_get_component('components/email-meta'); ?>
									<?php app_get_component('components/_DEMO-html-markup'); ?>
									<blockquote>
										<?php app_get_component('components/email-meta'); ?>
										<?php app_get_component('components/_DEMO-html-markup'); ?>
									</blockquote>
								</blockquote>

						<?php endif; ?>
					
					</div>
				</div>
			</div>
		</div>


	<!-- Footer  -->
		<div class="z-index-20 background-theme-contrast padding-x radius-small-bottom position-sticky offfset-0-x offset-0-bottom">
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
							<a title="Schedule Email" href="#email-<?= $instance_id ?>-schedule-enable" data-toggle-accordion  class="btn-group btn-group-horizontal btn-group-unite margin-small-right">
								<span class="btn btn-primary btn-symbol"><i class="symbol symbol-calendar-alt text-leading-contricted font-size-large"></i></span>
								<span title="Schedule Email" data-href="#email-<?= $instance_id ?>-schedule-enable" data-toggle-accordion class="btn btn-primary border-color-background no-border-y no-border-right">
									<i class="hide-nonmobile symbol symbol-caret-down symbol-caret-up-toggle"></i>
									<i class="hide-mobile symbol symbol-caret-right symbol-caret-left-toggle"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div id="email-<?= $instance_id ?>-schedule-enable" class="flex-col-xs-12 flex-col-md-9 accordion">
					<div class="flex-nowrap flex-grid flex-grid-compact text-leading-constricted justify-content-space-between align-items-center">
						<div class="flex-child flex-0-0">
							<strong>Schedule Email</strong><br>
							<span class="color-neutral font-size-small">
								<span class="REPLACE">Pacific Time (PT)</span>
							</span>
						</div>
						<div class="flex-col-xs-12 flex-col-sm-3">
							<label class="position-relative">
								<span class="sr-only">Schedule date</span>
								<a href="#" class="btn btn-group btn-group-horizontal btn-block" data-toggle-dropdown>
									<span class="btn btn-default">
										<span class="REPLACE">June 12, 1898</span>
									</span>
									<span class="btn  btn-default btn-symbol">
										<i class="symbol symbol-kebab-horizontal"></i>
									</span>
								</a>
								<div class="dropdown dropdown-bottom-flush dropdown-left no-padding" data-dropdown-width="300px">
									<input type="date" name="" id="editor-email-schedule-date" class="input input-calendar" data-calendar-disabled-dates="past">

								</div>
							</label>
						</div>
						<label class="flex-col-xs-12 flex-col-sm-3">
							<span class="sr-only">Schedule time</span>
							<input type="time" class="input input-single-line input-block">
						</label>
						<div class="flex-child flex-0-0">

							<button type="submit" class="btn-group btn-group-horizontal btn-group-unite">
								<span class="btn btn-primary btn-symbol"><i class="symbol symbol-paperplane text-leading-contricted font-size-large"></i></span>
								<span class="btn btn-primary border-color-background no-border-y no-border-right">Schedule Email</span>
							</button>
							<a href="#email-<?= $instance_id ?>-schedule-enable" data-toggle-accordion type="submit" class="flex-0-0 btn btn-link color-neutral color-primary-hover text-decoration-line-under">cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</form>