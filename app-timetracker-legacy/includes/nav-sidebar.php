
<ul class="nav-list">
	<!-- MY TIME -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> 'my-time')); ?>">
			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-my-time.svg">
			<span class="nav-item-text">My Time</span>
		</a>
	</li>


	<!-- Team -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> 'team')); ?>">
			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-team.svg">
			<span class="nav-item-text">Team</span>
		</a>
	</li>



	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> 'tasks')); ?>">
			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-tasks.svg">
			<span class="nav-item-text">Tasks</span>
		</a>
	</li>


	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> 'notes')); ?>">
			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-notes.svg">
			<span class="nav-item-text">Notes</span>
		</a>
	</li>

	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->
	<li class="nav-item">
		<a href="<?=app_create_link(array('template'=> 'analytics')); ?>">
			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/icon-analytics.svg">
			<span class="nav-item-text">Analytics</span>
		</a>
	</li>
</ul>
