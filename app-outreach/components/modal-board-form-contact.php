<!--
Imports JS:

Modal from framework/src/js/imports/modal

-->
<div class="modal modal-board" id="mb-editor-contact" data-modal-title="Edit Contact" data-modal-width="770px">
		<form class="flex-grid flex-grid-fixed">
				<div class="flex-col-12">
					<div class="flex-grid align-items-center">
						<div class="flex-child flex-0-0">
							<?php app_get_component('components/profile-image-small') ?>
						</div>
						<div class="flex-child flex-1-1">
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
								<label class="input-label" for="contact-fullname">Full Name</label>
								<input class="input input-single-line" type="text" name="contact-fullname" id="contact-fullname" value="Franziska von Karma">
							</div>
						</div>
						<div class="flex-child flex-1-1">
							
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
								<label class="input-label" for="contact-title">Partner</label>
								<input class="input input-single-line" type="text" name="contact-title" id="contact-title" value="Partner">
							</div>
						</div>
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