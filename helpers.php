<?php

//require once a file
function app_get_template_part($filename = '', $slug =''){

	if($filename !== ''){

		$source = DASHBOARD_ROOT_PATH.'/'.$filename;
		
		if($slug !== '' && file_exists( DASHBOARD_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';
		

		require_once $source;
}
}

function app_init_content(){
	if(isset($_GET['demo_template'])):
		$template_part = filter_var($_GET['demo_template'],FILTER_SANITIZE_STRING);

		switch($template_part):
			default:
				app_get_template_part('templates/error');
				break;
		endswitch;
	else:
		app_get_template_part('templates/home');
	endif;
}