<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>

	<!-- styles .sass has ya bois styles -->
	<?php app_inline_style(FWAPPS_ROOT_PATH.'/assets/styles/style.css'); ?>




</head>
<body class="body-nav-sticky-offset cf body-loading background-theme-contrast">

	<div id="dashboard">

		<!-- Nav -->


			<!-- appp-*/includes/main-nav -->


			<div id="dashboard-block-nav" class="nav nav-sticky">
				<?php app_get_nav(); ?>
			</div>
		<!-- Sidebar -->
		<aside id="dashboard-block-sidebar"
		class="background-theme dashboard-block-sidebar-slim">


			<div class="container container-wide">

				<div id="dashboard-block-sidebar-nav" class="nav nav-vertical">
					<!-- appp-*/includes/sidebar-nav -->
					<?php app_get_sidebar(); ?>
				</div>

			</div>

			
		</aside>

			<main id="dashboard-block-main">

				<!-- App Content -->
				<div id="content-wrapper">
					<div class="container">


	