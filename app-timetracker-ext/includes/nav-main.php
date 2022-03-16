<ul class="nav-list flex-1-1">
	<li class="<?= FWAPPS_TEMPLATE == 'home' ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'home')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-home'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'logs' ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'logs')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-logs'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'favorites' ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'favorites')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-favorites'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'focus' ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'focus')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-focus'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?= FWAPPS_TEMPLATE == 'analytics' ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'analytics')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-analytics'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
</ul>