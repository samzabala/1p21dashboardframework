<div id="outreach-header-nav" class="nav-block background-inherit flex-1-1">
	<button class="btn btn-link only-mobile btn-symbol btn-no-shadow" data-toggle-accordion>
		<div class="symbol symbol-burger"></div>
	</button>

	<a class="margin-left hide-nonmobile nav-logo nav-block no-padding-x" href="<?=app_create_link(); ?>">
		<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo.svg" alt="" class="logo lazy">
	</a>

	<ul class="nav-list nav-list-responsive accordion accordion-mobile background-theme flex-1-1 justify-content-space-around">
		<li>
			<a href="<?= app_create_link(array('template'=>'kanban')); ?>" class="color">Prospects</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'prospects-hot')); ?>" class="color">Hot Prospects</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'leads')); ?>" class="color">Leads</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'companies')); ?>" class="color">Companies</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'contacts')); ?>" class="color">Contacts</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'clients')); ?>" class="color">Clients</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'calendar')); ?>" class="color">Calendar</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'tasks')); ?>" class="color">Tasks</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'activity')); ?>" class="color">Activity</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'analytics')); ?>" class="color">Analytics</a>
		</li>
		<li>
			<a href="<?= app_create_link(array('template'=>'campaigns')); ?>" class="color">Campaigns</a>
		</li>
	</ul>
</div>



<div id="outreach-header-search" class="nav-block flex-wrap flex-0-0 justify-content-flex-end position-static">
	<a data-toggle-modal-board href="#mb-advanced-search" class="btn btn-symbol btn-round btn-default">
		<span class="sr-only">Search</span>
		<span>
			<i class="symbol symbol-search"></i>
		</span>
	</a>
</div>

<div class="nav-block" id="header-notifications">
	<a data-toggle-dropdown href="#outreach-header-notification" class="badge-origin btn btn-symbol btn-round btn-default">
		<span class="sr-only">Notifications</span>
		<span class="">
			<i class="symbol symbol-bell"></i>
			<!-- @if has notifications -->
				<badge class="badge badge-latch badge-small badge-error"></badge>
		</span>
	</a>
	<!-- @NOTE: not sure how this will be rendered. this is a @PLACEHOLDER for now. comment out whole #nav-notification block if not needed temporarily -->
	<div id="outreach-header-notification" class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="500px">
		<div class="list-group">

				<a href="<?=app_create_link(array('template' => 'project-view')) ?>" class="list-group-item color-primary-hover">
					Task had an update
				</a>

				<a href="<?=app_create_link(array('template' => 'project-view')) ?>" class="list-group-item color-primary-hover">
					Other Task had an update
				</a>

				<a href="<?=app_create_link(array('template' => 'project-view')) ?>" class="list-group-item color-primary-hover">
					Another Task had an update
				</a>

				<a href="<?=app_create_link(array('template' => 'project-view')) ?>" class="list-group-item color-primary-hover">
					Task had an update
				</a>
		</div>
	</div>
</div>

<div id="outreach-header-account" class="nav-block flex-0-0 position-static">

	<div data-toggle-dropdown href="#nav-account-dropdown" id="nav-account-info">


		<span class="thumbnail thumbnail-micro">
			<!-- @IF has profile imahe -->
				<div class="thumbnail-image">
					<img class="profile-image" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
				</div>

			<!-- @ELSE -->
				<span class="thumbnail-text profile-name-initial">
					<span class="REPLACE">PN</span>
				</span>
		</span>
		
	</div>

	<ul data-dropdown-width="200px" id="nav-account-dropdown" class="dropdown dropdown-right dropdown-top-flush">
		
		<!-- @PLACEHOLDER: DELETE QWHEN READY-->
			<li><a href="#">Admin</a></li>
			<li><a href="<?=app_create_link(array('template' => 'sales-tracking')) ?>">Sales Tracking</a></li>
			<li><a href="#">Logout</a></li>
	</ul>

</div>
