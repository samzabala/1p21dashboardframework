<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-editor-contact" data-modal-title="Edit Contact" data-modal-width="770px">
		<form class="flex-grid flex-grid-fixed">
				<div class="flex-col-2">
					<div class="flex-grid flex-grid-fixed align-items-center justify-content-center">
						<div class="flex-child flex-0-0">
							<?php app_get_component('components/profile-image-small') ?>
						</div>
					</div>
				</div>
				<div class="flex-col-10">
					<div class="flex-grid flex-grid-fixed flex-grid-no-gutter">
						<div class="flex-col-xs-12 flex-col-sm-4">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
								<label class="input-label" for="contact-firstname">First Name</label>
								<input class="input input-single-line" type="text" name="contact-firstname" id="contact-firstname" value="Franziska">
							</div>
						</div>
						<div class="flex-col-xs-12 flex-col-sm-4">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
								<label class="input-label" for="contact-lastname">Last Name</label>
								<input class="input input-single-line" type="text" name="contact-lastname" id="contact-lastname" value="von Karma">
							</div>
						</div>
						<div class="flex-col-xs-12 flex-col-sm-4">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
								<label class="input-label" for="contact-title">Title</label>
								<input class="input input-single-line" type="text" name="contact-title" id="contact-title" value="Partner">
							</div>
						</div>
					</div>
				</div>
				<div class="flex-col-12">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
						<label class="input-label" for="contact-company">Company</label>
						<select class="input input-single-line input-select" type="text" name="contact-company" id="contact-company">

							<!-- @NOTE: options are placeholders. replace as needed -->
							<datalist id="existing-companies">
								<option value="">Select Company...</option>
								<option value="">Wright & Co Law Offices</option>
								<option value="">Fey & Co Law Offices</option>
								<option value="">Wright Talent Agency</option>
								<option value="">Wright Anything Agency</option>
								<option value="">Gavin Law Offices</option>
								<option value="">Grossberg Law Offices</option>
								<option value="">Edgeworth Law Offices</option>
								<option value="">Von Karma Law Offices</option>
							</datalist>
						</select>
					</div>
				</div>
				<div class="flex-col-12">
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
						<label class="input-label" for="contact-email">Email</label>
						<input class="input input-single-line" type="email" name="contact-email" id="contact-email" value="REPLACE@email.com">
					</div>
				</div>
				<div class="flex-col-12">
					<span class="input-label">Social</span>

					<?php app_get_component('components/input-social','',false,array(
						'type' => 'facebook'
					)) ?>
					<?php app_get_component('components/input-social','',false,array(
						'type' => 'linkedin'
					)) ?>
					<?php app_get_component('components/input-social','',false,array(
						'type' => 'twitter'
					)) ?>
					<?php app_get_component('components/input-social','',false,array(
						'type' => 'google'
					)) ?>
					<?php app_get_component('components/input-social','',false,array(
						'type' => 'other'
					)) ?>
				</div>

				<div class="flex-col-12">
					<button href="" class="btn btn-primary">Save</button>
				</div>

		</form>

</div>