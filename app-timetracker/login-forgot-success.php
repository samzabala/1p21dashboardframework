<!-- @import
			js
					'framework/src/js/module-grid.js'


-->

<div id="timetracker-login"  class="padding-large-y timetracker-anon-ui-wrapper align-self-center">
	<div class="container">
		<div class="text-align-center color-background margin-large-bottom">
			<?php app_get_component('components/icon-logo'); ?>
		</div>
		<div class="module module-expanded">
			<div class="module-content no-margin-y padding-large-y">
				<div class="text-align-center padding-large-y">
					<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/login-lock.svg" alt="">
					<h1 class="margin-small-top">Email has been sent!</h1>
					<p>Follow the instructions in order to reset your password.</p>
					<a href="<?= app_create_link(array('template' => 'login-reset')) ?>" class="btn btn-theme margin-top">Close</a>
				</div>
			</div>
		</div>
	</div>
</div>