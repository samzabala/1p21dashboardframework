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

//GETS THE TEMPLETE FOR THE BOI WHILE HANDLEBARS IS NOT READY
function app_init_content($slug = ''){
	$template_to_use = 'home';
	
	if(isset($_GET['demo_template'])):

		$template_part = filter_var($_GET['demo_template'],FILTER_SANITIZE_STRING);

		switch($template_part):
			default:
				app_get_template_part('templates/error',$slug);
				break;
		endswitch;
	else:
		app_get_template_part('templates/home',$slug);
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
CREATE DYNAMIC BOIS
* @param $id - id for the instance of module
* @param $data - json string of placeholder data or data... wherever our boi goes
* @param $hendlebars - html string of handleebars template
*/

function app_render_handlebars_module($id = '',$data = '',$handlebars = ''){
	if($id):
	?>

		<div id="<?= $id; ?>-hb">
				
			<!-- Appendage -->
			<div id="<?= $id; ?>-hb-append"></div>

			<!-- Template -->
			<script id="<?= $id; ?>-hb-template" type="text/x-handlebars-template">
						
				<?= $handlebars; ?>
			</script>

			<!-- DATA -->
			<script id="<?= $id; ?>-hb-data" type="application/json">		
				<?= $data; ?>
			</script>


			<!-- Initiate -->
			<script>
				(function(_1p21){
					_1p21.initTemplate(
						document.getElementById("<?= $id; ?>-hb-template").innerHTML,
						JSON.parse( document.getElementById("<?= $id; ?>-hb-data").innerHTML ),
						'#<?= $id; ?>-hb-append'
					)
				}(_1p21))
			</script>

		</div>
		
	<?php
	endif;
	
}