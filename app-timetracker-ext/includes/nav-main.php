<ul class="nav-list flex-1-1">
	<li class="<?= in_array(FWAPPS_TEMPLATE,array('start','start-new','home','timer','timer-success')) ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'start')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-home'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?= in_array(FWAPPS_TEMPLATE,array('logs','log-edit')) ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'logs')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-logs'); ?>
			</div>
			<div class="sr-only">Home</div>
		</a>
	</li>
	<li class="<?=in_array(FWAPPS_TEMPLATE,array('tasks','task-edit'))  ? 'current' : '' ?> flex-1-1 flex-xs">
		<a href="<?=app_create_link(array('template'=> 'tasks')); ?>" class="flex-1-1 no-padding-y flex-xs align-items-center justify-content-center">
			<div class="nav-icon">
				<?php app_get_component('components/icon-tasks'); ?>
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
</ul>