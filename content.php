


	<main class="block-main">
		<!-- Navigation -->
		<?php require_once DASHBOARD_ROOT.'/includes/nav.php'; ?>



		<!-- App Content -->
		<div id="content-wrapper">
			<?php app_init_content(); ?>
		</div>

		<?php
		echo '<pre>'; 
		print_r($_SERVER);
		print_r($_REQUEST);
		echo '</pre>';
		?>
	</main>

	<!-- Sidebar -->
	<aside class="block-sidebar">
	<?php require_once DASHBOARD_ROOT.'/includes/sidebar.php'; ?>
	</aside>