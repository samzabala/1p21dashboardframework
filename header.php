<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard</title>

	<!-- styles -->
	<?php app_inline_style(DASHBOARD_ROOT_PATH.'/assets/styles/style.css'); ?>




</head>
<body class="body-nav-sticky-offset cf body-loading background-theme-contrast">

	<div id="dashboard">
		<!-- Sidebar -->
		<aside id="dashboard-block-sidebar"
		class="background-theme">
			<?php include_once 'includes/sidebar.php'; ?>
		</aside>

			<main id="dashboard-block-main">

				<!-- Navigation -->
				<?php include_once 'includes/main-nav.php'; ?>

				<!-- App Content -->
				<div id="content-wrapper">
					<div class="container">


	