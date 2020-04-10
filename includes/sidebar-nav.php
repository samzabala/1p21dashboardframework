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
						<!-- @IF has a dropdown -->
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text">SEO</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up font-size-small"></i>
						</span>
						<?php app_get_component('components/nav-dropdown-profiles'); ?>
					</li>
			<?php else: ?>



					<!-- PROJ -->
					<li class="nav-item">
						<!-- @ELSE no dropdown -->
						<a href="<?=app_create_link( array('template'=>'projects') ); ?>">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-projects.svg">
							<span class="nav-item-text">Projects</span>
						</a>

					</li>


					<!-- DESIGNERS -->
					<li class="nav-item">

						<!-- @IF has a dropdown -->
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-designers.svg">
							<span class="nav-item-text">Designers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up font-size-small"></i>
						</span>
						<?php app_get_component('components/nav-dropdown-profiles'); ?>
					</li>

					<!-- DEVELOPERS -->
					<li class="nav-item">

						<!-- @IF has a dropdown -->
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-devs.svg">
							<span class="nav-item-text">Developers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up font-size-small"></i>
						</span>
						<?php app_get_component('components/nav-dropdown-profiles'); ?>
					</li>



					<!-- MANAGERS -->
					<li class="nav-item">

						<!-- @IF has a dropdown -->
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-managers.svg">
							<span class="nav-item-text">Managers</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up font-size-small"></i>
						</span>
						<?php app_get_component('components/nav-dropdown-profiles'); ?>
					</li>



					<!-- DALES -->
					<li class="nav-item">

						<!-- @IF has a dropdown -->
						<span data-toggle="dropdown">
							<img class="nav-icon" data-src="<?=DASHBOARD_ROOT_URL ?>/assets/images/icon-sales.svg">
							<span class="nav-item-text">Sales</span>
							<i class="symbol symbol-arrow-down symbol-arrow-toggle-up font-size-small"></i>
						</span>
						<?php app_get_component('components/nav-dropdown-profiles'); ?>
					</li>
			<?php endif; ?>
		</ul>
	</div>