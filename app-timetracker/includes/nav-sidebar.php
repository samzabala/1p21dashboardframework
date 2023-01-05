
<a class="timetracker-logo nav-block justify-content-center padding-small-x  flex-0-0" href="<?=app_create_link(); ?>">
	<?php app_get_component('components/icon-logo'); ?>
</a>
<button data-toggle-accordion class="only-mobile timetracker-nav-toggle btn background-theme-polar-active color-theme-polar-active btn-symbol btn-no-radius border-color-transparent position-relative flex-0-0">
	<i class="symbol symbol-burger symbol-close-toggle"></i>
</button>
<ul class="nav-list timetracker-nav-list nav-list-responsive accordion accordion-mobile">
	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->

	<!-- Track Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom">
			<span class="h5 no-margin font-weight-400">Track</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'home')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-timer'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Timer</span>
			</a>
		</li>

	
	<!-- Track Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom">
			<span class="h5 no-margin font-weight-400">Manage</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'projects')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-projects'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Projects</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'clients')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-clients'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Clients</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'tasks')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-tasks'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Tasks</span>
			</a>
		</li>

	<!-- Analyze Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom">
			<span class="h5 no-margin font-weight-400">Analyze</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'reports')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-reports'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Reports</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'insights')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-insights'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Insights</span>
			</a>
		</li>


	<!-- Admin Pages -->
		<li class="nav-item-label margin-large-top margin-small-bottom">
			<span class="h5 no-margin font-weight-400">Admin</span>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'settings')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-settings'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Settings</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'departments')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-departments'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Departments</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'jobs')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-jobs'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Jobs</span>
			</a>
		</li>
		<li>
			<a href="<?=app_create_link(array('template'=> 'team-members')); ?>" class="color-inherit-hover position-relative">
				<span class="nav-icon flex-0-0">
					<?php app_get_component('components/icon-team'); ?>
				</span>
				<span class="nav-item-text flex-1-1">Team</span>
			</a>
		</li>
</ul>
<div class="modal" id="edit-email">
	Wait Lang
</div>
