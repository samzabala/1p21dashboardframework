<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>1p21 outreach - <?=FWAPPS_APP; ?>: <?=FWAPPS_TEMPLATE; ?></title>
	<meta name="robots" content="noindex" />

	<!-- styles .sass has ya bois styles -->
		<link href="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/styles/style.mine.css'?>" rel="stylesheet" data-turbolinks-track="reload" />
		<!-- <link href="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/css/framework.css'?>" rel="stylesheet" data-turbolinks-track="reload" /> -->





	<!-- SCRIPT -->
		<!--turbu  -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script> -->
		
		<!-- DEPENDENCIES -->
			<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/framework/dist/js/framework.lib.js'?>" data-turbolinks-track="reload"></script>




			<script src="<?=FWAPPS_ROOT_URL.'/assets/plugins/jquery.js'?>" data-turbolinks-track="reload"></script>
		<!-- app specific -->
			<?php //app_inline_script(FWAPPS_ROOT_PATH.'/assets/legacy/scripts/apps.js'); ?>
			<script src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/scripts/app.js'?>" data-turbolinks-track="reload"></script>


			<!-- for sam to test shit onlyyy -->
			<!-- <script
				src="<?=FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP.'/assets/scripts/__fortesting.js'?>" data-turbolinks-track="reload"
			></script> -->

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
<body class="
	<?php if(FWAPPS_TEMPLATE !== 'login' && FWAPPS_TEMPLATE !== 'login-forgot' && FWAPPS_TEMPLATE !== 'login-reset'): ?>
		body-nav-sticky-offset cf body-loading background-theme-contrast
	<?php else: ?>
		cf body-loading background-theme-polar flex-xs flex-wrap justify-content-center outreach-body-login
	<?php endif; ?>
">

<?php if(FWAPPS_TEMPLATE !== 'login' && FWAPPS_TEMPLATE !== 'login-forgot' && FWAPPS_TEMPLATE !== 'login-reset'): ?>
	<div id="outreach">

			<?php if(FWAPPS_TEMPLATE !== 'debug'): ?>
				<!-- Notifications -->
					<?php app_get_component('components/alerts-toast'); ?>
			<?php endif; ?>
			<!-- Nav -->
				<!-- appp-*/includes/main-nav -->
					<div id="outreach-header" class="nav nav-sticky">
						<?php app_get_nav(); ?>
					</div>
			<!-- Sidebar -->
				<aside id="outreach-sidebar"
				class="theme-inverse pointer-reference background-theme-contrast">
					<div id="outreach-sidebar-nav" class="nav nav-vertical background-transparent">
						<!-- appp-*/includes/sidebar-nav -->
						<?php app_get_sidebar(); ?>
					</div>
				</aside>
			<main id="outreach-main">
				<!-- App Content -->
				<div id="content-wrapper">
					<div class="container">
		<?php endif; ?>


	