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
			<div class="module-content no-margin-y padding-large-y"">
				<div class="text-align-center padding-large-y">
					<img src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/login-clap.svg" alt="">
					<h1 class="margin-small-top">Your password has<br> been changed.</h1>
					<a href="<?= app_create_link(array('template' => 'home')) ?>" class="btn btn-theme margin-top">Close</a>
				</div>
			</div>
		</div>
	</div>
</div>