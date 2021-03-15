<?php

//require once a file
function app_get_template_part($filename = '', $slug = '',$data = array() ){

	if($filename !== ''){

		$source = FWAPPS_ROOT_PATH.'/'.$filename;
		
		if($slug!== '' && file_exists( FWAPPS_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';

		
		if( file_exists( $source ) ){

			if ($data) {
				extract($data);
			}

			require $source;
		}
	}
}


//include a file
function app_get_component( $filename = '', $slug ='',$once = false, $data = array()){
	// echo '<pre>';
	// var_dump(array(
	// 	'filename' => $filename,
	// 	'slug' => $slug,
	// 	'once' => $once,
	// 	'data' => $data,
	// ));
	// echo '</pre>';

	if($filename !== ''){

		$source_from_app = FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP.'/'.$filename;
		$source_from_global = FWAPPS_ROOT_PATH.'/'.$filename;

		
		$suffix = '.php';

		/*
		order
		slug app
		slug global
		app
		global
		*/


		if(
			isset($slug)
			&& file_exists( $source_from_app.'-'.$slug.$suffix )
		){
			$source = $source_from_app.'-'.$slug.$suffix;
		}elseif(
			isset($slug)
			&& file_exists( $source_from_global.'-'.$slug.$suffix )
		){
			$source = $source_from_global.'-'.$slug.$suffix;
		}elseif(
			file_exists( $source_from_app.$suffix )
		){
			$source = $source_from_app.$suffix;
		}elseif(
			file_exists( $source_from_global.$suffix )
		){
			$source = $source_from_global.$suffix;
		}

		
		if(isset($source)){

			if ($once == true) {
				include_once $source;
			} else {
				include $source;
			}

		}
	}
}

function app_get_nav($slug = FWAPPS_APP ){
	app_get_template_part("app-".FWAPPS_APP."/includes/nav-main");
}

function app_get_sidebar($slug = FWAPPS_APP){
	app_get_template_part("app-".FWAPPS_APP."/includes/nav-sidebar");
}

function app_get_header($slug = FWAPPS_APP){
	app_get_template_part("app-".FWAPPS_APP."/header");
}

function app_get_footer($slug = FWAPPS_APP){
	app_get_template_part("app-".FWAPPS_APP."/footer");
}

//GETS THE TEMPLETE FOR THE BOI WHILE HANDLEBARS IS NOT READY
function app_init_content(){
	$app  = 'dashboard';
	$template_part = '';
	$slug = '';

	if(isset($_GET['app'])){
		$app = filter_var($_GET['app'],FILTER_SANITIZE_STRING);
	}
	
	if(isset($_GET['template'])){
		$template_part = filter_var($_GET['template'],FILTER_SANITIZE_STRING);
	}
	
	if(isset($_GET['env'])){
		$slug = filter_var($_GET['env'],FILTER_SANITIZE_STRING);
	}


	
	//specific shit
	switch($app):
		//outreach
		case 'outreach':
			$slug = '';
			switch($template_part):


				case 'home':
				case null:
					?>
						<div class="module">

							Not yet brah
							<br>
							<br>
							<br>
							<a href="<?=app_create_link(array('template' => 'home')) ?>">Go to the home template</a>
						</div>
					<?php
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "template design in progress. temporarily redirected";
					break;
					case 'company-detail':
					case 'contact-detail':
					case 'tasks':
					case 'contacts':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/{$template_part}";
					break;
				break;

				case 'debug':
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;

				default:
					app_get_template_part('global/error');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "global/error";
					break;
				endswitch;
		//time tracker shit
		case 'webpack':
			case 'home':
			case null:
				app_get_template_part("app-{$app}/home");
				$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/home";
				break;
			break;
		case 'workflow':
			$slug = '';
			switch($template_part):

				case '_DEMO-home':
				case 'home':
				case null:
					app_get_template_part("app-{$app}/home");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/home";
					break;

				//notes
					case 'note-view':
					case 'note-edit':
						//debug only
							case '_DEMO-task':
							case '_DEMO-alert':
						//end ebug only
							app_get_template_part("app-{$app}/{$template_part}");
							$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/{$template_part}";
							break;

				//project
					case 'search':
					case 'projects':
						app_get_template_part("app-{$app}/projects");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/projects";
						break;
					case 'project-edit':
					case 'project-new':
						app_get_template_part("app-{$app}/project-edit");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/project-edit";
						break;
					case 'project-details':
					case 'project-view':
					case 'project':
						app_get_template_part("app-{$app}/project-view");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/project-view";
						break;

				
				//client
					case 'clients':
						app_get_template_part("app-{$app}/clients");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/clients";
						break;
					case 'client-edit':
					case 'client-new':
						app_get_template_part("app-{$app}/client-edit");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/client-edit";
						break;
					case 'client-details':
					case 'client-view':
					case 'client':
						app_get_template_part("app-{$app}/client-view");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/client-view";
						break;

				//task

					case 'task':
					case 'task-view':

						app_get_template_part("app-{$app}/task-onpage");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/task-onpage";
						break;

					case 'task-edit':
					case 'task-new':
						app_get_template_part("app-{$app}/task-edit");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/task-edit";
						break;

					case 'task-view-legacy':
						app_get_template_part("app-{$app}/task-view");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/task-view";
						break;

				// content pages im not sure of but good to have fallbacks for or at least a basic page to render
					case 'page':
					case 'note':
					case 'note-view':
						app_get_template_part("app-{$app}/page");
						$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/page";
						break;

				// exists and the setup ran smoothly for this
				// case '':
				// 	app_get_template_part("app-{$app}/{$template_part}");
				// 	$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/{$template_part}";
				// 	break;

				case 'workflux':
				case 'clients':
				case 'client-view':
				case 'client-edit':
				case 'profile':
				case 'analytics':
				case 'workflow':
				case 'notes':
					?>
						<div class="module">

							Not yet brah
							<br>
							<br>
							<br>
							<a href="<?=app_create_link(array('template' => 'home')) ?>">Go to the home template</a>
						</div>
					<?php
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "template design in progress. temporarily redirected";
					break;

				case 'debug':
					app_get_template_part('debug-legacy');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;

				default:
					app_get_template_part('global/error');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "global/error";
					break;
	
			endswitch;
			break;
		case 'timetracker':
			$slug = '';
			switch($template_part):
				case null:
				case 'my-time':
				case 'home':
					app_get_template_part("app-{$app}/home");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/home";
				break;
				case 'project':
				case 'profile':
				case 'tasks':
				case 'analytics':
					?>
					<div class="module">

						Not yet brah
						<br>
						<br>
						<br>
						<a href="<?=app_create_link(array('template' => 'home')) ?>">Go to the home template</a>
					</div>
					<?php
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "template design in progress. temporarily redirected";
					break;

				case 'notes':
				case 'team':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/{$template_part}";
				break;


				case 'debug':
					app_get_template_part('debug-legacy');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;
				default:
					app_get_template_part('global/error');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "global/error";
					break;

			endswitch;
			break;


		//dashboard shit
		case 'dashboard':
		default:

			if($slug == ''){
				$slug = 'production';
			}

			switch($template_part):
				case 'new-content':
				case 'on-page':
				case 'social-media':
					app_get_template_part("app-{$app}/projects-scoreboard");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ='projects-scoreboard';
					break;
				
				case 'keywords':
				case 'keywords-improved':
				case 'keywords-lost':
					app_get_template_part("app-{$app}/keywords");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ='keywords';
					break;

				case 'chart':
				case 'profiles':
				case 'last-activity':
				case 'last-activity-2':
				case 'login':
				case 'unique-links':
				case 'activity-log':
				case 'sponsorships':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "app-{$app}/{$template_part}";
					break;

				case null:
				case 'home':
					app_get_template_part("app-{$app}/home",$slug);
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="app-{$app}/home-{$slug}";

					break;
				case 'project-view':
					app_get_template_part("app-{$app}/project",$slug);
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="app-{$app}/project-{$slug}";
					break;
				case 'profile':
				case 'project':
				case 'projects':
					app_get_template_part("app-{$app}/{$template_part}",$slug);
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="app-{$app}/{$template_part}-{$slug}";
					break;

					
				
				case 'debug':
					app_get_template_part('debug-legacy');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] ="{$template_part}";
					break;
				default:
					app_get_template_part('global/error');
					$GLOBALS['FWAPPS_CURR_TEMPLATE'] = "global/error";
					break;
	
			endswitch;
			break;

	endswitch;


}

// links for debugging our boi
function app_debug_li() {
?>
	<li>
		<a href="<?=app_create_link(array(
			'env'=>FWAPPS_SLUG,
			'app'=>'outreach'));
		?>">Switch to Client Outreach</a>
	</li>
	<li>
		<a href="<?=app_create_link(array(
			'env'=>FWAPPS_SLUG,
			'app'=>'webpack'));
		?>">Switch to Webpack Tester</a>
	</li>
	<li>
		<a href="<?=app_create_link(array(
			'env'=>FWAPPS_SLUG,
			'template'=>'home',
			'app'=>'workflow'));
		?>">Switch to Workflow App</a>
	</li>
	<li>
		<a href="<?=app_create_link(array(
			'env'=>FWAPPS_SLUG,
			'template'=>'home',
			'app'=>'timetracker'));
		?>">Switch to Time tracker App</a>
	</li>

	<li>
		<a href="<?=app_create_link(array(
			'env'=>FWAPPS_SLUG,
			'template'=>'home',
			'app'=>'dashboard'));
		?>">Switch to dashboard App</a>
	</li>
	<?php
	switch(FWAPPS_APP):
		case 'dashboard':
			?>
				<li>
					<a href="<?=app_create_link(array('template'=>'activity-log')) ?>">Activity Log - NEW TEMPLATE</a>
				</li>


				<li>
					<?php 
						$slug_to_switch = FWAPPS_SLUG == 'production' ? 'scoreboard' : 'production';
					?>
					<a href="<?=app_create_link(array(
						'env'=>$slug_to_switch,
						'template'=>FWAPPS_TEMPLATE,
						'app'=>FWAPPS_APP));
					?>">Switch to <?=$slug_to_switch ?> environment</a>
				</li>
			<?php
			break;
		
		case 'timetracker':
			?>
			<?php
		break;

		case 'workflow':
			?>
			
			<li>
				<a href="<?=app_create_link(array('template'=> '_DEMO-task')); ?>">
					DEMO TEMPLATE: Task boards
				</a>
			</li>

			
			<li>
				<a href="<?=app_create_link(array('template'=> '_DEMO-alert')); ?>">
					DEMO TEMPLATE: Alert function-ish
				</a>
			</li>
			<?php
	endswitch;
		?>
	<li>
		<a href="<?=app_create_link(array('template'=>'debug')) ?>">Debug framework</a>
	</li>
	<li>
		<a href="<?=app_create_link(array('template'=>'debug-components')) ?>">View Available components</a>
	</li>

	<li>
		<a href="#" onclick="placeholderScriptDarkMode(event)">Toggle Dark</a>
	</li>
	<li>
		<?php 
			$js_to_switch = FWAPPS_JS == 'vanilla' ? '' : 'vanilla';
		?>
		<a href="<?=app_create_link(array('js'=>$js_to_switch)); ?>">Switch to <?= $js_to_switch == 'vanilla' ? 'indie' : 'plugged' ?> js</a>
	</li>
<?php
}


//debug template

function app_debug_block() {
	?>
	<!-- Debug use only dont pootpoot -->
	<div class="dev-debug-block">
		<br>
		
		<ul class="inline text-align-center">
		
			<?=app_debug_li(); ?>
		</ul>

		<hr>

		<div class="table-wrapper">
		

			<table>
				<tr>
					<th>Current App:</th>
					<th>Templates pulled :</th>
				</th>
				<tr>
					<td><code><?= FWAPPS_APP; ?></code></td>

					<?php
						$template = FWAPPS_TEMPLATE;
						$slug = FWAPPS_SLUG;
					?>
					<td>
						
					<code><?=$GLOBALS['FWAPPS_CURR_TEMPLATE'] ?>.php</code>
					</td>
				</tr>
			</table>
		
		</div>
	</div>
	<?php
}


//DUH
function app_create_link( $array_of_get_vars = array()) {
	$url = FWAPPS_ROOT_URL.'/';
	$append = '';

	$fallback = array(
		'env' => FWAPPS_SLUG,
		'app' => FWAPPS_APP,
		'template' => FWAPPS_TEMPLATE,
		'js' => FWAPPS_JS,
	);

	$for_append = $array_of_get_vars;

	foreach( $fallback as $key=>$value) {
		if(!array_key_exists($key,$array_of_get_vars)){
			$for_append[$key] = $fallback[$key];
		}
	}

	$append .= '?';
	$counter = 0;

	foreach($for_append  as $key=>$value) {
		if($counter > 0 ) {
			$append .= '&';
		}

		$value = filter_var( $value,FILTER_SANITIZE_STRING );
		$append .= "{$key}={$value}";

		$counter++;
	}


	return $url.$append;
}


//DUH
function app_get_file_content_as_string($filepath = '') {
	if($filepath && file_exists($filepath)){
		ob_start();
		include $filepath;
		return ob_get_clean();
	}
}


// shits faster if u inline scripts and shit hehe. he
	//DUH
	function app_inline_style($filepath = ''){
		if($filepath && file_exists($filepath)){
			echo '<style>';
			echo app_get_file_content_as_string($filepath);
			echo '</style>';
		}
	}

	//DUH
	function app_inline_script($filepath = ''){
		if($filepath && file_exists($filepath)){
			echo '<script>';
			echo app_get_file_content_as_string($filepath);
			echo '</script>';
		}
	}



function app_parse_args( $args, $defaults = array() ) {
	if ( is_object( $args ) ) {
		$parsed_args = get_object_vars( $args );
	} elseif ( is_array( $args ) ) {
		$parsed_args =& $args;
	} else {
		parse_str( $args, $parsed_args );
	}
	
	if ( is_array( $defaults ) && $defaults ) {
		return array_merge( $defaults, $parsed_args );
	}
	return $parsed_args;
}

function app_get_path(){
	return FWAPPS_ROOT_PATH.'/app-'.FWAPPS_APP;
}
function app_get_uri(){
	return FWAPPS_ROOT_URL.'/app-'.FWAPPS_APP;
}