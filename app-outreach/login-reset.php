<div class="padding-y outreach-anon-ui-wrapper">
	<div class="container">
		<form id="outreach-reset" action="<?=app_create_link(array('template' => 'home','app'=>'outreach')) ?>" method="post">
			<div class="text-align-center">
				<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-expanded-alt.svg" alt="">
			</div>

			<div class="module-grid justify-content-center margin-auto-x" data-grid-template-columns-sm="minmax(100%,420px)">
				<div class="module module-expanded" data-grid-row-sm="2" >
					<div class="module-content">
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="reset-password" class="input-label">Password</label>
							<input id="reset-password" name="reset-password" type="passworc" placeholder="********" class="input input-single-line input-large">
						</div>
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical p">
							<label for="reset-password-confirm" class="input-label">Password</label>
							<input id="reset-password-confirm" name="reset-password-confirm" type="passworc" placeholder="********" class="input input-single-line input-large">
						</div>
						<br>
						<button class="btn btn-block btn-primary btn-large" type="submit">Update Password</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>