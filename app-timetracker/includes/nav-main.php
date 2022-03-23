

	<form
		id="nav-search"
		action="<?php app_create_link( array('template' => 'projects') ); ?>"
		method="get"
		class="input-group">

			<!-- templating/placeholder -->
			<input type="hidden" name="env" value="<?=FWAPPS_SLUG; ?>">
			<input type="hidden" name="template" value="projects">
			<input type="hidden" name="app" value="<?=FWAPPS_APP; ?>">


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

	<!-- @UPDATED/NEW -->
	<div id="nav-notification">
		<a href="#" class="btn btn-symbol btn-no-shadow position-relative" data-toggle="dropdown">

			<img class="nav-icon" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP;?>/assets/images/header-notification.svg">

			<!-- @NOTE
				classes to add 

				.notification-new-total
					if there are new notifications => `display-none`
			 -->
			<span class="tag tag-error notification-new-total font-size-small">
				<span class="REPLACE">69</span>
			</span>

		</a>

		<!-- @NOTE: not sure how this will be rendered. this is a @PLACEHOLDER for now. comment out whole #nav-notification block if not needed temporarily -->
		<div class="dropdown dropdown-right" data-dropdown-width="500px">
			<div class="list-group">

					<a href="<?=app_create_link(array('template' => 'project')) ?>" class="list-group-item color-primary-hover">
						Task had an update
					</a>

					<a href="<?=app_create_link(array('template' => 'project')) ?>" class="list-group-item color-primary-hover">
						Other Task had an update
					</a>

					<a href="<?=app_create_link(array('template' => 'project')) ?>" class="list-group-item color-primary-hover">
						Another Task had an update
					</a>

					<a href="<?=app_create_link(array('template' => 'project')) ?>" class="list-group-item color-primary-hover">
						Task had an update
					</a>
			</div>
		</div>
	</div>
	


	<!-- @UPDATED/NEW -->
	<div id="nav-account">

		<div id="nav-account-info">
									
		
			<?php app_get_component('components/profile-image-small');?>

			<a href="<?=app_create_link( array('template'=>'home') ); ?>" id="nav-account-name" class="btn btn-no-shadow btn-small color-inherit font-weight-500 hide-xs profile-name hide-sm no-padding-x">
				<span class="REPLACE">Place Name</span>
			</a>
			
		</div>

		<a href="#nav-account-dropdown" class="btn btn-link btn-symbol"  data-toggle="dropdown" title="More"> 
			<i class="symbol symbol-kebab-vertical"></i>
		</a>

		<ul data-dropdown-width="200px" id="nav-account-dropdown" class="dropdown dropdown-right dropdown-top-flush">
			
			<!-- @PLACEHOLDER: DELETE QWHEN READY-->
				<?php app_debug_li() ?>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Item</a></li>
				<li class="REPLACE"><a href="#">Logout</a></li>
		</ul>

	</div>
