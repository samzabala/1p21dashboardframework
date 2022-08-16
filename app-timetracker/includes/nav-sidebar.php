
<a class="timetracker-logo nav-block justify-content-center padding-small-x margin-auto-x flex-0-0" href="<?=app_create_link(); ?>">
	<?php app_get_component('components/icon-logo'); ?>
</a>

<ul class="nav-list timetracker-nav-list">
	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->

	<!-- Track Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom hide-mobile">
			<span class="h5 no-margin font-weight-400">Track</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'home')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-timer'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Timer</span>
			</a>
		</li>

	
	<!-- Track Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom hide-mobile">
			<span class="h5 no-margin font-weight-400">Manage</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'projects')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-projects'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Projects</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'clients')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-clients'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Clients</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'tasks')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-tasks'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Tasks</span>
			</a>
		</li>

	<!-- Analyze Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom hide-mobile">
			<span class="h5 no-margin font-weight-400">Analyze</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'reports')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-reports'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Reports</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'insights')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-insights'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Insights</span>
			</a>
		</li>


	<!-- Admin Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom hide-mobile">
			<span class="h5 no-margin font-weight-400">Admin</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'reports')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-settings'); ?>
				</span>
				<span class="nav-item-text flex-1-1 hide-mobile">Settings</span>
			</a>
		</li>
</ul>

<div class="modal" id="edit-email">
	Wait Lang
</div>
