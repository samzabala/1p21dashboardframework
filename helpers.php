<?php

//require once a file
function app_get_template_part($filename = '', $slug =''){

	if($filename !== ''){

		$source = DASHBOARD_ROOT_PATH.'/'.$filename;
		
		if($slug !== '' && file_exists( DASHBOARD_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';
		

		if( file_exists( $source ) ){
			require_once $source;
		}
	}
}


//include a file
function app_get_component($filename = '', $slug =''){

	if($filename !== ''){

		$source = DASHBOARD_ROOT_PATH.'/'.$filename;
		
		if($slug !== '' && file_exists( DASHBOARD_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';

		if( file_exists( $source ) ){
			include $source;
		}
	}
}

//GETS THE TEMPLETE FOR THE BOI WHILE HANDLEBARS IS NOT READY
function app_init_content($slug = ''){
	$template_to_use = 'home';
	
	if(isset($_GET['template'])):

		$template_part = filter_var($_GET['template'],FILTER_SANITIZE_STRING);

		switch($template_part):
			case 'demos':
			case 'profiles':
			case 'last-activity':
			case 'new-content':
				app_get_template_part('template/'.$template_part);
				break;

			case 'profile':
			case 'home':
			case 'project':
			case 'projects':
				if(DASHBOARD_SLUG == 'production' || DASHBOARD_SLUG == 'scoreboard'){
					app_get_template_part('template/'.$template_part,DASHBOARD_SLUG);
				}
				break;

			default:
				app_get_template_part('template/error');
				break;

		endswitch;
	else:
		app_get_template_part('template/home',$slug);
	endif;

}

// links for debugging our boi
function app_debug_li() {
?>

	<li>
		<?php 
			$env_to_switch = DASHBOARD_SLUG == 'production' ? 'scoreboard' : 'production';
		?>
		<a href="<?=app_create_link(array('env'=>$env_to_switch,'template'=>DASHBOARD_TEMPLATE)) ?>">Switch to <?=$env_to_switch ?></a>
	</li>

	<li>
		<a href="<?=app_create_link(array('template'=>'demos')) ?>">Framework debug</a>
	</li>

	<li>
		<a href="#" onclick="placeholderScriptDarkMode(event)">Toggle Dark Mode</a>
	</li>
<?php
}
//DUH
function app_create_link( $array_of_get_vars = array()) {
	$url = DASHBOARD_ROOT_URL.'/';
	$append = '';

	if(isset($array_of_get_vars)) {
		$append .= '?';
		$counter = 0;

		if(!isset($array_of_get_vars['env'])) {
			$array_of_get_vars['env'] = DASHBOARD_SLUG;
		}

		foreach($array_of_get_vars as $key=>$value) {
			if($counter > 0 ) {
				$append .= '&';
			}

			$value = filter_var( $value,FILTER_SANITIZE_STRING );
			$append .= "{$key}={$value}";

			$counter++;
		}
	}


	return $url.$append;
}


//DUH
function app_get_file_content_as_string($filepath = '') {
	if($filepath){
		ob_start();
		include $filepath;
		return ob_get_clean();
	}
}


// shits faster if u inline scripts and shit hehe. he
	//DUH
	function app_inline_style($filepath = ''){
		echo '<style>';
		echo app_get_file_content_as_string($filepath);
		echo '</style>';
	}

	//DUH
	function app_inline_script($filepath = ''){
		echo '<script>';
		echo app_get_file_content_as_string($filepath);
		echo '</script>';
	}

