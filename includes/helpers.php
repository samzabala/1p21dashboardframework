<?php


function init_content(){

	if($_GET['demo_template']):
		$template_part = filter_var($_POST['demo_template'],FILTER_SANITIZE_STRING);


		// switch($template_part) {

		// }


	endif;
}