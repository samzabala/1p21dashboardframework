<!-- @import
			js
					'framework/src/js/module-grid.js'


-->

<div id="timetracker-login"  class="padding-large-y timetracker-anon-ui-wrapper align-self-center">
	<div class="container">
		<form action="<?=app_create_link(array('template' => 'login-reset-success','app'=>'timetracker')) ?>" method="post">
			<div class="text-align-center color-background margin-large-bottom">
				<?php app_get_component('components/icon-logo'); ?>
			</div>
			<div class="module module-expanded">
				<div class="module-content padding-large-y">
					<!-- @if user error -->
						<div class="alert alert-error margin-small-bottom border-color-error no-radius color-error-dark">
							Invalid password. or something.
						</div>
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-password" class="input-label font-weight-700">New Password</label>
						<input id="profile-password" name="" type="password" placeholder="********" class="input input-single-line">
					</div>
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
						<label for="profile-password-again" class="input-label font-weight-700">New Password Confirmation</label>
						<input id="profile-password-again" name="" type="password" placeholder="********" class="input input-single-line">
					</div>
					<div class="margin-large-top">
						<button class="btn btn-theme btn-block">Change Password</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>