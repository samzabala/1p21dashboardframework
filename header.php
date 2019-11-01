<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard</title>

	<!-- styles -->
	
	<link rel="stylesheet" type="text/css" href="<?=DASHBOARD_ROOT_URL;?>/assets/style.min.css">

		<script src="<?=DASHBOARD_ROOT_URL;?>/assets/scripts/jquery.min.js"></script>
		<script src="<?=DASHBOARD_ROOT_URL;?>/assets/scripts/handlebars.min.js"></script>
		<script src="<?=DASHBOARD_ROOT_URL;?>/assets/scripts/trumbowyg.min.js"></script>
</head>
<body id="dashboard" class="cf dashboard-<?=DASHBOARD_SLUG ?>">
	<!--SVG Styles  -->
	<?php app_get_template_part('includes/svg-globals'); ?>
	