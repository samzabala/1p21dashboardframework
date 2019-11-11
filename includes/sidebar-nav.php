<div id="dashboard-block-sidebar-nav" class="nav nav-vertical">
	<ul class="nav-list">
			<!-- HOME -->
			<li class="nav-item">
				<a href="<?=DASHBOARD_ROOT_URL ?>">
					<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-home.svg">
					<span class="nav-item-text tablet-hide mobile-hide">Home</span>
				</a>
			</li>
			

			<?php if(DASHBOARD_SLUG == 'scoreboard'):?>
					<!-- SEO -->
					<li class="nav-item">
						<a href="#sidebar-dropdown" data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text tablet-hide mobile-hide">SEO</span>
							<i class="symbol symbol-arrow symbol-arrow-down symbol-arrow-toggle-up"></i>
						</a>
						<ul id="sidebar-dropdown" class="dropdown">
							<?php
							
							
		
								app_render_handlebars_module(
									'sidebar-dropdown',
									app_get_file_content_as_string(DASHBOARD_ROOT_PATH.'/placeholder/data/profiles.json'),
									"
										{{#each profiles}}
										<li><a href=\"\"> {{ this.name }} </a></li>
										{{/each}}
									"
								);
							?>
						</ul>
					</li>
			<?php else: ?>



					<!-- PROJ -->
					<li class="nav-item">
						<a href="<?=DASHBOARD_ROOT_URL ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-projects.svg">
							<span class="nav-item-text tablet-hide mobile-hide">Projects</span>
						</a>
					</li>


					<!-- DESIGNERS -->
					<li class="nav-item">
						<a href="<?=DASHBOARD_ROOT_URL ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-designers.svg">
							<span class="nav-item-text tablet-hide mobile-hide">Designers</span>
						</a>
					</li>

					<!-- DEVELOPERS -->
					<li class="nav-item">
						<a href="<?=DASHBOARD_ROOT_URL ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text tablet-hide mobile-hide">Developers</span>
						</a>
					</li>
			<?php endif; ?>
		</ul>
	</div>