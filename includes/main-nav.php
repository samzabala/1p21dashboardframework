

<div id="dashboard-block-main-nav" class="nav nav-sticky">

	<a href="#"
		id="dashboard-block-main-nav-toggle"
		
		class="btn
		color-primary-hover
		color-primary-active
		color-primary-focus
		background-primary-toggle
		color-global-background-toggle
		btn-symbol
		btn-no-radius
		dashboard-sidenav-toggle
		btn-no-shadow
		btn-large
		tablet-hide
		desktop-hide
		laptop-hide
		nav-toggle">
		<i class="symbol symbol-burger"></i>
	</a>

	<form
		id="nav-search"
		action="<? app_create_link( array('template' => 'projects') ); ?>"
		method="get"
		class="input-group">

			<!-- templating/placeholder -->
			<input type="hidden" name="env" value="<?=DASHBOARD_SLUG; ?>">
			<input type="hidden" name="template" value="projects">


			<label for="search" class="btn btn-no-radius btn-no-shadow" title="Search"><i class="color-primary symbol symbol-search"></i></i></label>
			<input
				id="search"
				class="input input-single-line input-no-radius input-no-shadow font-weight-500 flex-1-1"
				type="text"
				name="search"
				placeholder="Search projects..."
				value="<?php echo ( isset($_GET['search'] )) ? $_GET['search'] : ''; ?>" />
			<input type="hidden" value="1" name="is_searching">
			
	</form>

	<div id="nav-account">

		<div id="nav-account-info">
									
			
			<?php app_get_component('components/profile-image-inline');?>

			<a href="<?=app_create_link( array('template'=>'profile') ); ?>" id="nav-account-name" class="btn btn-no-shadow btn-small color-inherit font-weight-500 mobile-hide profile-name tablet-hide no-padding-x">
				<span class="REPLACE">Place Name</span>
			</a>
			
		</div>

		<a href="#nav-account-dropdown" class="btn btn-link btn-symbol"  data-toggle="dropdown" title="More"> 
			<i class="symbol symbol-kebab-vertical"></i>
		</a>

		<ul id="nav-account-dropdown" data-dropdown-width="200px" class="dropdown dropdown-right dropdown-top-flush">
			
			<!-- @PLACEHOLDER: DELETE QWHEN READY-->
				<?php app_debug_li() ?>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Logout</a></li>
		</ul>

	</div>

</div>

