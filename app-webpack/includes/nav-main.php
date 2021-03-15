

<a id="nav-logo" href="<?=app_create_link(); ?>" class="nav-logo nav-block nav-block flex-0-0">
	<img class="lazy" data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo.svg" alt="Logo">
</a>


	


	<!-- @UPDATED/NEW -->
	<div id="nav-account" class="nav-block flex-0-0 position-static">

		<div id="nav-account-info">


			<a class="thumbnail thumbnail-small" href="#nav-notification-dropdown"
				data-toggle-dropdown>
				<!-- @IF has profile imahe -->
					<div class="thumbnail-image">
						<img class="profile-image lazy" data-src="<?=FWAPPS_ROOT_URL ?>/placeholder/profiles/team-des-jenn.jpg" alt="">
					</div>

				<!-- @ELSE -->
					<span class="thumbnail-text profile-name-initial">
						<span class="REPLACE">PN</span>
					</span>

				<!-- @NOTE
					classes to add 

					.notification-new-total
						if there are new notifications => `display-none`
				-->
				<span class="tag tag-error notification-new-total tag-small">
					<span class="REPLACE">69</span>
				</span>
			</a>

			<a href="<?=app_create_link( array('template'=>'home') ); ?>" id="nav-account-name" class="btn btn-small btn-no-shadow color-inherit font-weight-500 hide-xs profile-name hide-sm no-padding-x">
				<span class="REPLACE">Place Name</span>
			</a>



			<!-- @NOTE: not sure how this will be rendered. this is a @PLACEHOLDER for now. comment out whole #nav-notification block if not needed temporarily -->
			<div id="nav-notification-dropdown" class="dropdown dropdown-right dropdown-top-flush" data-dropdown-width="500px">
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

		<a href="#nav-account-dropdown" class="btn btn-link btn-symbol btn-no-shadow"  data-toggle-dropdown title="More"> 
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
