<?php

function app_init_content(){
	if(isset($_GET['demo_template'])):
		$template_part = filter_var($_POST['demo_template'],FILTER_SANITIZE_STRING);

		switch($template_part):
			default:
				require_once DASHBOARD_ROOT.'/templates/error.php';
				break;
		endswitch;
	else:

		require_once DASHBOARD_ROOT.'/templates/home.php';
	endif;
}