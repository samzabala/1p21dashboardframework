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


//include a file
function app_get_component_part($filename = '', $slug =''){

	if($filename !== ''){

		$source = DASHBOARD_ROOT_PATH.'/'.$filename;
		
		if($slug !== '' && file_exists( DASHBOARD_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';
		
		include $source;
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
			case 'projects':
			case 'last-activity':
			case 'new-content':
				app_get_template_part('template/'.$template_part);
				break;

			case 'profile':
			case 'home':
			case 'project':
				app_get_template_part('template/'.$template_part,DASHBOARD_SLUG);
				break;

			default:
				app_get_template_part('template/error');
				break;

		endswitch;
	else:
		app_get_template_part('template/home',$slug);
	endif;

}


//DUH
function app_get_file_content_as_string($filepath = '') {
	if($filepath){
		ob_start();
		include $filepath;
		return ob_get_clean();
	}
}


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

/*
Functions
*******************************************/




/*
CREATE DYNAMIC BOIS
* @param $id - id for the instance of module
* @param $data - json string of placeholder data or data... wherever our boi goes
* @param $hendlebars - html string of handleebars template
*/

function app_render_handlebars_module($id = '',$data = null,$handlebars = null){
	if($id):
	?>

		<div id="<?= $id; ?>-hb">

			<!-- Template -->
			<script id="<?= $id; ?>-hb-template" type="text/x-handlebars-template">
				<?= $handlebars; ?>
			</script>

			<!-- DATA -->
			<?php
				$data_to_output = $data;
				if(is_array($data) ):
					$data_arr = array();

					foreach($data as $set) {
						array_push($data_arr,$set);
					}

					$data_to_output = $data_arr;

				endif;
			 ?>
			<script id="<?= $id; ?>-hb-data" type="application/json">		
				<?= $data_to_output; ?>
			</script>


			<!-- Initiate -->
			<script>
				
			</script>

		</div>
		
	<?php
	endif;
	
}