<div id="timetracker-login" class="padding">
	<main id="timetracker-main" class=" flex-xs flex-wrap justify-content-center align-items-center timetracker-body-login">
		<div class="module flex-1-1">
			<div class="module-content padding-y">
				<div class="flex-grid flex-grid-fixed flex-grid-compact">
					<div class="flex-col-xs-12">
						<div class="input-label font-weight-700 no-padding-y">Log In Using</div>
					</div>
					<div class="flex-col-xs-12">
						<button href="#" class="btn btn-block btn-neutral-outline no-padding-x" data-DEMO-replicate-login>
							<img class="margin-small-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/icon-wrike.svg" alt=""> Wrike
						</button>
					</div>
					<div class="flex-col-xs-12">
						<button href="#" class="btn btn-block btn-neutral-outline no-padding-x" data-DEMO-replicate-login>
							<img class="margin-right" src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/icon-microsoft.svg" alt=""> Office365
						</button>
					</div>
				</div>
				<div class="margin-large-top">
					<!-- @if user error -->
						<div class="alert alert-error border-color-error no-radius color-error-dark">
							Invalid account or password. Please try again.
						</div>

					<form action="">

						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label for="user" class="input-label font-weight-700">Email or Username</label>
							<input id="user" name="" type="text" placeholder="email@domain.com" class="input input-single-line">
						</div>
						<div class="input-wrapper input-wrapper-block input-wrapper-vertical">
							<label for="password" class="input-label font-weight-700">Password</label>
							<input id="password" name="" type="password" placeholder="email@domain.com" class="input input-single-line">
						</div>
						<div class="p margin-small-top">
							<a class="color-inherit" href="<?= app_create_link(array('template' => 'login-forgot')); ?> ">Forgot Password</a>
						</div>
						<div class="margin-large-top">
	
							<!-- @DEMO only because front end demo will be ugly. use markup after instead -->
								<a data-DEMO-replicate-login href="<?= app_create_link(array('template' => 'start')) ?>" class="btn btn-accent btn-large btn-block">Login</a>
								
							<!-- <button class="btn btn-accent btn-large btn-block">Login</button> -->
						</div>
					</form>

				</div>
			</div>
		</div>
	</main>
</div>


<?php app_get_component('components/loading');?>