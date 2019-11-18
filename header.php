<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard</title>

	<!-- styles -->
	<?= app_inline_style( DASHBOARD_ROOT_PATH.'/assets/styles/style.min.css'); ?>


	

	<!-- SCRIPT -->
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/jquery.min.js'); ?>
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/trumbowyg.min.js'); ?>
	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/trumbowyg.upload.min.js'); ?>

	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->


	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/framework.min.js'); ?>


	<?= app_inline_script( DASHBOARD_ROOT_PATH.'/assets/scripts/dashboard.min.js'); ?>




</head>
<body id="dashboard" class="body-nav-sticky-offset cf body-loading dashboard-<?=DASHBOARD_SLUG ?>">
	<!--SVG Styles  -->
	


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