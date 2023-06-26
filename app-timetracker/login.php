<!-- @import
			js
					'framework/src/js/module-grid.js'


-->

<div id="timetracker-login"  class="padding-large-y timetracker-anon-ui-wrapper align-self-center">
	<div class="container">
		<form action="<?=app_create_link(array('template' => 'home','app'=>'timetracker')) ?>" method="post">
			<div class="text-align-center color-background margin-large-bottom">
				<?php app_get_component('components/icon-logo'); ?>
			</div>
			<div class="module module-expanded">
				<div class="module-content padding-large-y">
					<div class="flex-grid flex-grid-fixed flex-grid-compact">
						<div class="flex-col-xs-12">
							<div class="input-label font-weight-700 no-padding-y">Log In Using</div>
						</div>
						<div class="flex-col-xs-12">
							<button href="#" class="btn btn-block btn-neutral-outline no-padding-x">
								<img class="margin-small-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-wrike.svg" alt="">
								<span class="sr-only">Login with Wrike</span>
							</button>
						</div>
						<div class="flex-col-xs-12">
							<button href="#" class="btn btn-block btn-neutral-outline no-padding-x">
								<img class="margin-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-microsoft.svg" alt="">
								<span class="sr-only">Login with Office365</span>
							</button>
						</div>
					</div>
					<div class="margin-large-top">
						<!-- @if user error -->
							<div class="alert alert-error margin-bottom border-color-error no-radius color-error-dark">
								Invalid account or password. Please try again.
							</div>

						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label for="user" class="input-label font-weight-700">Email or Username</label>
							<input id="user" name="" type="text" placeholder="email@domain.com" class="input input-single-line">
						</div>
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label for="password" class="input-label font-weight-700">Password</label>
							<input id="password" name="" type="password" placeholder="email@domain.com" class="input input-single-line">
						</div>
						<div class="flex-grid flex-grid-compact flex-grid-no-gutter-y margin-top">
							<div class="flex-col-6">
								<label class="p">
									<input name="" type="checkbox" />
									Remember Me
								</label>
							</div>
							<div class="flex-col-6">
								<div class="p text-align-right">
									<a class="color-inherit" href="<?= app_create_link(array('template' => 'login-forgot')); ?> ">Forgot Password</a>
								</div>
							</div>
						</div>
						<div class="margin-large-top">
							<button class="btn btn-theme btn-block">Login</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>