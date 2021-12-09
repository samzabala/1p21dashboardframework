<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>
	<meta name="robots" content="noindex" />

	<!-- styles .sass has ya bois styles -->
		<!-- <link href="<?=FWAPPS_ROOT_URL.'/assets/legacy/styles/style.legacy.css'?>" rel="stylesheet" /> -->
		<link href="<?=FWAPPS_ROOT_URL.'/assets/legacy/styles/style.css'?>" rel="stylesheet" />






	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
			<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/jquery.js'; ?>"></script>
			<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/jquery.js'); ?>

		<!--turbu  -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script> -->
		
		<!-- DEPENDENCIES -->
			<?php 
			
			if(FWAPPS_JS == 'vanilla') {
				// app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.min.js'); 
				?>
				<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.legacy.js'?>" data-turbolinks-track="reload"></script>
				<?php
			}else{
				// app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/framework/dist/framework.legacy.plugged.js');
				?>
				<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.legacy.plugged.js'?>" data-turbolinks-track="reload"></script>
				<?php
			}
			
			?>



		<!-- app specific -->
			<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/legacy/scripts/apps.js'); ?>
			<script src="<?=FWAPPS_ROOT_URL.'/assets/legacy/scripts/apps.js'?>" data-turbolinks-track="reload"></script>



	<!-- @PLACEHOLDER for debugging framework. delete when ready. or repurpose or... idk -->
		<script>
			// duh
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
			// duh
			function getCookie(cname) {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
					c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
					}
				}
				return "";
			}

			//toggle darkmode. although placeholder, this can be repurposed too :)
			function placeholderScriptDarkMode(event) {
				console.log( getCookie('_1p21fw_dark'));
				event.preventDefault();
				setCookie('_1p21fw_dark',( getCookie('_1p21fw_dark') == '1' ? '0' : '1' ),69 );

				document.documentElement.classList.toggle('theme-inverse');
			}

			(function(){
				getCookie('_1p21fw_dark') == '1' && (document.documentElement.classList.add('theme-inverse') )
			}())

		</script>

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


	