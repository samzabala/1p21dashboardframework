<div id="dashboard-block-sidebar-nav" class="nav nav-vertical">
	<ul class="nav-list">
			<!-- HOME -->
			<li class="nav-item current">
				<a href="<?=DASHBOARD_ROOT_URL ?>">
					<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-home.svg">
					<span class="nav-item-text tablet-hide mobile-hide">Home</span>
				</a>
			</li>
			

			<?php if(DASHBOARD_SLUG == 'scoreboard'):?>
					<!-- SEO -->
					<li class="nav-item">
						<a href="<?=DASHBOARD_ROOT_URL ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text tablet-hide mobile-hide">SEO</span>
						</a>
						ul
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