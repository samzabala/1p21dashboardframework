<div id="dashboard-block-sidebar-nav" class="nav nav-vertical">

	<ul class="nav-list">
			<!-- HOME -->
			<li class="nav-item">
				<a href="<?=app_create_link(); ?>">
					<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-home.svg">
					<span class="nav-item-text">Home</span>
				</a>
			</li>
			

			<?php if(DASHBOARD_SLUG == 'scoreboard'):?>
					<!-- SEO -->
					<!-- 
					@NOTE:
						menu items with dropdowns will have
							-a tags replaced with span[data-toggle="dropdown"];
								i.symbol.symbol-arrow-down.symbol-arrow-toggle-up as last child
							ul will have... the .dropdown :O

					 -->
					<li class="nav-item">
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text">SEO</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up"></i>
						</span>
						<ul class="dropdown">
							
							<!-- 
								@dynamic 
									content li .profile-name
								@loop li
							 -->
							<li>
								<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name">Profile Name</span></a>
							</li>



							<li>
								<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
							</li>
						</ul>
					</li>
			<?php else: ?>



					<!-- PROJ -->
					<li class="nav-item">

						<a href="<?=app_create_link( array('template'=>'projects') ); ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-projects.svg">
							<span class="nav-item-text">Projects</span>
						</a>

					</li>


					<!-- DESIGNERS -->
					<li class="nav-item">

						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-designers.svg">
							<span class="nav-item-text">Designers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up"></i>
						</span>

						<ul class="dropdown">
							
							<!-- 
								@dynamic 
									content li .profile-name
								@loop li
							 -->
							<li>
								<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name">Profile Name</span></a>
							</li>



							<li>
								<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
							</li>
						</ul>
					</li>

					<!-- DEVELOPERS -->
					<li class="nav-item">
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text">Developers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up"></i>
						</span>

						<ul class="dropdown">

							<!-- 
								@dynamic 
									content li .profile-name
								@loop li
							 -->
							<li>
								<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name">Profile Name</span></a>
							</li>



							<li>
								<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
							</li>
						</ul>
					</li>



					<!-- MANAGERS -->
					<li class="nav-item">
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-managers.svg">
							<span class="nav-item-text">Managers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up"></i>
						</span>

						<ul class="dropdown">

							<!-- 
								@dynamic 
									content li .profile-name
								@loop li
							 -->
							<li>
								<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name">Profile Name</span></a>
							</li>



							<li>
								<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
							</li>
						</ul>
					</li>



					<!-- DALES -->
					<li class="nav-item">
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-sales.svg">
							<span class="nav-item-text">Sales</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up"></i>
						</span>

						<ul class="dropdown">

							<!-- 
								@dynamic 
									content li .profile-name
								@loop li
							 -->
							<li>
								<a href="<?=app_create_link( array('template'=>'profile') ); ?>"><span class="profile-name">Profile Name</span></a>
							</li>



							<li>
								<a href="<?=app_create_link( array('template'=>'profiles') ); ?>">View All+</a>
							</li>
						</ul>
					</li>
			<?php endif; ?>
		</ul>
	</div>