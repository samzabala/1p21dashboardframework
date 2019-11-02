


	<!-- Sidebar -->
	<aside id="dashboard-block-sidebar" class="background-global">
		<?php app_get_template_part('includes/sidebar',DASHBOARD_SLUG); ?>
	</aside>

	<main id="dashboard-block-main" class="background-global-contrast">
		<!-- Navigation -->

		<?php app_get_template_part('includes/main-nav',DASHBOARD_SLUG); ?>

		<!-- App Content -->
		<div id="content-wrapper">
			<div class="container">
				<?php app_init_content(DASHBOARD_SLUG); ?>
			</div>
		</div>

	</main>