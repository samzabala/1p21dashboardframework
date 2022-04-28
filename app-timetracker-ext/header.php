<!DOCTYPE html>
<html lang="en">
	<!-- !ignore all contents of head. Start from the body -->
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>1p21 Time Tracker Extension - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>
		<meta name="robots" content="noindex" />

		<!-- styles .sass has ya bois styles -->
			<link href="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/styles/style.mine.css'?>" rel="stylesheet" />
			<!-- <link href="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/css/framework.css'?>" rel="stylesheet" data-turbolinks-track="reload" /> -->
			
		<!-- SCRIPT -->
			
			<!-- DEPENDENCIES -->
				<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/scripts/framework.customglobal.mine.min.js'?>" ></script>
				<!--<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.lib.js'?>" ></script>-->

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
			<style>
				html {
					height: auto;
					margin: auto;
					scrollbar-width:none;
				}

				html::-webkit-scrollbar {
					display: none;
				}
			</style>

	</head>
<!-- START HERE -->
<body class="cf body-loading">
	<div id="timetracker" class="background-theme-contrast">
		<!-- @if a task is actively selected -->
			<?php app_get_component('components/sticky-timer'); ?>

		<main id="timetracker-main" class="flex-xs flex-wrap">


			<header id="timetracker-header" class="background-transparent nav color-theme justify-content-space-between theme-inverse position-absolute offset-0-x ">
				<div class="nav-block background-transparent flex-1-1 justify-content-space-between padding-large-top">
					<a class="nav-logo nav-block no-padding-x" href="<?=app_create_link(array('template' => 'home')); ?>">
						<?php app_get_component('components/icon-logo'); ?>
					</a>
					<a id="timetracker-toggle-view" href="#" class="btn btn-small btn-link btn-symbol color-inherit">
						<?php app_get_component('components/icon-toggle'); ?>
					</a>
				</div>
			</header>



