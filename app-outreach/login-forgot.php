<div class="padding-y outreach-anon-ui-wrapper">
	<div class="container">
		<form id="outreach-forgot" action="<?=app_create_link(array('template' => 'login-reset','app'=>'outreach')) ?>" method="post">
			<div class="container">
				<div class="text-align-center">
					<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-expanded-alt.svg" alt="">
				</div>

				<div class="module-grid justify-content-center margin-auto-x" data-grid-template-columns-sm="minmax(100%,420px)">
					<div class="module module-large" data-grid-row-sm="2" >
						<div class="module-content">

						<!-- @if successful reset password send -->
							<div class="alert alert-success p">
								<i class="symbol symbol-success"></i> Success! please check your email for instructions
							</div>

						
							<!-- @elseif email does not exist -->
								<div class="alert alert-caution p">
									<i class="symbol symbol-caution"></i> Sorry, the account does not exist.
								</div>
								
							<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
								<label for="forgot-user" class="input-label">Enter Email to reset password</label>
								<input id="forgot-user" name="forgot-user" type="text" placeholder="email@domain.com" class="input input-single-line input-large">
							</div>
							<br>
							<button class="btn btn-block btn-primary btn-large" type="submit">Reset Password</button>
						</div>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>