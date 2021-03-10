
<a class="nav-logo nav-block no-padding-x" href="<?=app_create_link(); ?>">
	<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo.svg" alt="" class="logo lazy only-mobile margin-auto">
	<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo.svg" alt="" class="logo lazy hide-hover hide-mobile margin-auto">
	<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo-expanded.svg" alt="" class="logo-expanded lazy only-hover hide-mobile margin-auto">
</a>

<ul class="nav-list outreach-nav-side">
	<!-- @NOTE : templates these link to are not finalized yet. we may comment these out for now while their not sent yet -->
	<li>
		<a href="<?=app_create_link(array('template'=> 'messages-inbox')); ?>" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0 badge-origin">
					<i class="symbol symbol-envelope-inverse"></i>
					<!-- @if has messages -->
					<span class="badge badge-small badge-error badge-latch"></span>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">Inbox</span>
			</div>
		</a>
	</li>


	<li>
		<a href="<?=app_create_link(array('template'=> 'messages-sent')); ?>" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0">
					<i class="symbol symbol-paperplane"></i>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">Sent</span>
			</div>
		</a>
	</li>


	<li>
		<a href="<?=app_create_link(array('template'=> 'messages-scheduled')); ?>" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0">
					<i class="symbol symbol-calendar"></i>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">
					Schedule Emails
				</span>
			</div>
		</a>
	</li>

	<li>
		<a href="<?=app_create_link(array('template'=> 'messages-unmatched')); ?>" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0">
					<i class="symbol symbol-error-inverse"></i>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">
					Unmatched Emails
				</span>
			</div>
		</a>
	</li>

	<li>
		<a data-toggle-modal-board data-modal="Compose Email" href="#mb-editor-email" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0">
					<i class="symbol symbol-addbox-inverse"></i>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">
					New Email Campaign
				</span>
			</div>
		</a>
	</li>

	
	<li>
		<a data-toggle-dropdown href="#" class="color-inherit-hover">
			<div class="flex-xs outreach-nav-item-container">
				<span class="nav-icon flex-0-0">
					<i class="symbol symbol-user"></i>
				</span>
				<span class="nav-item-text hide-mobile only-hover text text-wrap-ellipsis flex-1-1">
					Users +
				</span>
			</div>
		</a>
		
		<ul class="dropdown">
				<li>
					<a href="#">User Name</a>
				</li>
				<li>
					<a href="#">User Name</a>
				</li>
				<li>
					<a href="#">User Name</a>
				</li>
				<li>
					<a href="#">User Name</a>
				</li>
				<li>
					<a href="#">User Name</a>
				</li>

		</ul>
	</li>
</ul>

<div class="modal" id="edit-email">
	Wait Lang
</div>
