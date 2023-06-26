<!-- @import
			js
					'framework/src/js/module-grid.js'


-->

<div id="timetracker-login"  class="padding-large-y timetracker-anon-ui-wrapper align-self-center">
	<div class="container">
		<form action="<?=app_create_link(array('template' => 'login-forgot-success','app'=>'timetracker')) ?>" method="post">
			<div class="text-align-center color-background margin-large-bottom">
				<?php app_get_component('components/icon-logo'); ?>
			</div>
			<div class="module module-expanded">
				<div class="module-content padding-large-y">
					<!-- @if user error -->
						<div class="alert alert-error margin-small-bottom border-color-error no-radius color-error-dark">
							Invalid account email.
						</div>
					<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
						<label for="email" class="input-label font-weight-700 padding-small-bottom">Please enter your email</label>
						<span class="input-label no-padding-top padding-large-bottom">We will email you a link to reset your password.</span>
						<input id="email" name="" type="email" placeholder="email@domain.com" class="input input-single-line">
					</div>
					<div class="margin-large-top">
						<button class="btn btn-theme btn-block">Send</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>