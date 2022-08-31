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
			<div class="module">
				<div class="module-header">
					<div class="h1 text-align-center margin-top">Log In</div>
				</div>
				<div class="module-content">
					<div class="flex-grid flex-grid-fixed">
						<div class="flex-col-xs-12">
							<button href="#" class="btn btn-block btn-neutral-outline no-padding-x">
								<img class="margin-small-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/icon-wrike.svg" alt=""> Login with Wrike
							</button>
						</div>
						<div class="flex-col-xs-12">
							<button href="#" class="btn btn-block btn-neutral-outline no-padding-x">
								<img class="margin-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/icon-microsoft.svg" alt=""> Login with Office365
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>