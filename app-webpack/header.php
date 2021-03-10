<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Dashboard - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>
	<meta name="robots" content="noindex" />

	<!-- styles .sass has ya bois styles -->
		<?php app_inline_style(FWAPPS_ROOT_PATH.'/assets/legacy/styles/style.css'); ?>


	<style>
		/* .accordion:not(.accordion-mobile):not(.open) {
			display:block!important;
		} */
	</style>


	<!-- SCRIPT -->
		<!-- DEPENDENCIES OF DEPENDENCIES -->
			<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/jquery.js'; ?>"></script>
			<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/plugins/jquery.js'); ?>
		
		<!-- DEPENDENCIES -->
		<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.lib.js'?>" data-turbolinks-track="reload"></script>
		<script src="<?=FWAPPS_ROOT_URL.'/_fortesting.js'?>" data-turbolinks-track="reload"></script>



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
<body class="body-nav-sticky-offset cf body-loaded background-theme-contrast">

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
				</div>

			</div>

			
		</aside>

			<main id="dashboard-block-main">

				<!-- App Content -->
				<div id="content-wrapper">
					<div class="container">


	