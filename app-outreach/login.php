<div class="padding-y outreach-anon-ui-wrapper">
	<div class="container">
		<form id="outreach-login" action="<?=app_create_link(array('template' => 'home','app'=>'outreach')) ?>" method="post">
			<div class="text-align-center">
				<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-expanded-alt.svg" alt="">
			</div>

			<div class="module-grid justify-content-center margin-auto-x" data-grid-template-columns-sm="minmax(100%,420px)">
				<div class="module module-large" data-grid-row-sm="2" >
					<div class="module-content">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="login-user" class="input-label">Email or Username</label>
							<input id="login-user" name="login-user" type="text" placeholder="email@domain.com" class="input input-single-line input-large">
						</div>
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label for="login-password" class="input-label">Password</label>
							<input id="login-password" name="login-password" type="passworc" placeholder="********" class="input input-single-line input-large">
						</div>
						<div class="flex-grid flex-grid-compact flex-grid-fixed">
							<div class="flex-col-xs-6 text-align-left">
								<div class="input-wrapper input-wrapper-horizontal">
								<label for="login-remember" class="input-label font-weight-inherit">
									<input id="login-remember" name="login-remember" type="checkbox" class="input-inline">
									Remember Me
								</label>
								</div>
							</div>
							<div class="flex-col-xs-6 text-align-right">
								<a href="<?=app_create_link(array('template' => 'login-forgot')) ?>">Forgot Password?</a>
							</div>
						</div>
						<br>
						<button class="btn btn-block btn-primary btn-large" type="submit">Log In</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>