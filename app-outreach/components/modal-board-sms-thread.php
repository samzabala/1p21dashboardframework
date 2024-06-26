<?php 
	$defs = array(
		//@param info - string - id of instance
		'id' => 'mb-editor-sms', //reminder,error,caution,success
	);

	$args = app_parse_args($data,$defs);
?>
<div class="modal modal-board modal-constricted" id="<?= $args['id'] ?>">
	<div class="outreach-sms-conversation flex-xs flex-direction-column position-absolute offset-0">

		<div class="background-theme-contrast padding-large">
			<div class="flex-grid flex-grid-fixed">
				<div class="flex-col-xs-12 flex-col-sm-6">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
							<span class="input-label">From Number</span>
							<select name="bulk-status" id="" class="input-select">
								<option value="">Select</option>
	
								<!-- @PLACEHOLDER -->
									<option value="123 456 7890">123 456 7890</option>
									<option value="123 456 7890">123 456 7890</option>
									<option value="123 456 7890">123 456 7890</option>
									<option value="123 456 7890">123 456 7890</option>
									<option value="123 456 7890">123 456 7890</option>
							</select>
						</div>
				</div>
				<div class="flex-col-xs-12 flex-col-sm-6">
					<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
							<span class="input-label">To</span>
							<select name="bulk-status" id="" class="input-select">
								<option value="">Select</option>
	
								<!-- @PLACEHOLDER -->
									<option selected value="Uzumaki Naruto">Uzumaki Naruto</option>
									<option value="Uzumaki Naruto">Uzumaki Naruto</option>
									<option value="Uzumaki Naruto">Uzumaki Naruto</option>
									<option value="Uzumaki Naruto">Uzumaki Naruto</option>
									<option value="Uzumaki Naruto">Uzumaki Naruto</option>
							</select>
						</div>
				</div>
			</div>
		</div>
		<div class="padding-large flex-1-1 overflow-y-scroll">
			<div class="padding-y text-align-center color-neutral">
				<p>
					SMS message<br>
					<span class="REPLACE">Tue, Feb 20, 2019</span>
				</p>
			</div>
	
	
			<!-- @if it's my message -->
				<div class="flex-grid flex-grid-compact justify-content-flex-start flex-direction-row-reverse margin-large-bottom">
					<div class="flex-child flex-0-0">
						<div class="outreach-sms-bubble outreach-sms-bubble-right radius-small background-theme-contrast
 background-theme-contrast">
							<span class="REPLACE">My text</span>
						</div>
	
					</div>


					<!-- @if error -->
						<div class="flex-child flex-0-0 align-self-center text-align-right">
							<span class="color-error">This message was not delivered.</span>
						</div>
				</div>
	
			<!-- @else -->
				<div class="flex-grid flex-grid-compact justify-content-flex-start margin-large-bottom">
					<div class="flex-child flex-0-0">
						<div class="outreach-sms-bubble outreach-sms-bubble-left radius-small  background-primary color-background">
							<span class="REPLACE">Naruto's text</span>
						</div>
					</div>


					<!-- @if error -->
						<div class="flex-child flex-0-0 align-self-center">
							<span class="color-error">This message was not delivered.</span>
						</div>

				</div>



					<!-- @PLACEHOLDER. disregard -->
						<div class="flex-grid flex-grid-compact justify-content-flex-start margin-large-bottom">
							<div class="flex-child flex-0-0">
								<div class="outreach-sms-bubble outreach-sms-bubble-left radius-small  background-primary color-background">
									<span class="REPLACE">Naruto's text</span>
								</div>
			
							</div>
							

							<!-- @if error -->
								<div class="flex-child flex-0-0 align-self-center">
									<span class="color-error">This message was not delivered.</span>
								</div>

						</div>
	
		</div>
		<div class="position-sticky offset-x-0 offset-bottom-0">
			<form class="padding-large background-theme-contrast">
				<div class="input-wrapper input-wrapper-vertical input-wrapper-block">
					<span class="input-label sr-only">Message</span>
					<textarea name="" id="" rows="3" class="input input-multiple-line" placeholder="Type Message"></textarea>
				</div>
				<div class="flex-grid flex-grid-compact">
					<div class="flex-col-6">
						<label>
							<span class="btn btn-primary-glassy">
								<span class="outreach-symbol-material">
									<?php app_get_component('components/icon-sms-attachment'); ?>
								</span>
								Attach Images
							</span>
							<span class="sr-only">
								<input type="file" accept=".jpg, .jpeg, .png, .gif" multiple>
							</span>

							<!-- @if has files -->
							<span class="btn color-base-alpha-6 color-primary-hover flex-0-1" v-if="images.length">
								<span class="REPLACE">69 files attached</span>
							</span>
						</label>
					</div>
					<div class="flex-col-6 text-align-right">

						<button class="btn btn-primary" :disabled="reqInProgress">
							<i class="symbol symbol-paperplane"></i>&nbsp;Send SMS
						</button>

					</div>
				</div>
			</form>
		</div>
	</div>
	</div>