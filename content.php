


	<!-- Sidebar -->
	<aside id="dashboard-block-sidebar">
		<?php app_get_template_part('includes/sidebar',DASHBOARD_SLUG); ?>
	</aside>

	<main id="dashboard-block-main">
		<!-- Navigation -->

		<?php app_get_template_part('includes/main-nav',DASHBOARD_SLUG); ?>

		<!-- App Content -->
		<div id="content-wrapper">
			<div class="container">
				<?php app_init_content(); ?>
			</div>
		</div>

	</main>