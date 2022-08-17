<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 Timetracker - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>
	<meta name="robots" content="noindex" />



	
	<!-- @PLACEHOLDER FOR DEMO ONLY DO NOT COPY -->
		<!-- styles -->
		<link href="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/styles/style.mine.css'?>" rel="stylesheet" />

		<!-- scripts -->
		<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.lib.js'?>"></script>
		<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/jquery.js'?>" ></script>

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

	<div id="timetracker">

		<!-- Sidebar -->
			<aside id="timetracker-sidebar"
			class="theme-inverse pointer-reference background-theme-contrast">
				<div id="timetracker-sidebar-nav" class="nav nav-vertical background-transparent">
					<!-- app-*/includes/sidebar-nav -->
					<?php app_get_sidebar(); ?>
				</div>
			</aside>

		<!-- @if a task is actively selected -->
			<?php app_get_component('components/sticky-timer'); ?>
		<main id="timetracker-main" class="padding-large-y">
			<!-- App Content -->
				<div class="container">
					


	