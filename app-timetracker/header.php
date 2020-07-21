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
		<!-- Sidebar -->
		<aside id="dashboard-block-sidebar"
		class="background-theme">


			<div class="container container-wide">
				<a href="<?=app_create_link(); ?>" class="sidebar-logo">
					<img data-src="<?=FWAPPS_ROOT_URL ?>/app-<?=FWAPPS_APP?>/assets/images/logo.svg" alt="Logo">
				</a>

				<div id="dashboard-block-sidebar-nav" class="nav nav-vertical">
					<!-- appp-*/includes/sidebar-nav -->
					<?php app_get_sidebar(); ?>
				</div>

			</div>

			
		</aside>

			<main id="dashboard-block-main">

			<!-- appp-*/includes/main-nav -->


			<div id="dashboard-block-main-nav" class="nav nav-sticky">

				<a href="#"
					id="dashboard-block-main-nav-toggle"
					class="btn
					color-primary-hover 
					color-primary-active 
					color-primary-focus
					background-primary-toggle
					color-background-toggle btn-symbol 
					btn-no-radius dashboard-sidenav-toggle btn-no-shadow btn-large only-xs nav-toggle">
					<i class="symbol symbol-burger"></i>
				</a>
				<?php app_get_nav(); ?>
			</div>

				<!-- App Content -->
				<div id="content-wrapper">
					<div class="container">


	