<?php

//require once a file
function app_get_template_part($filename = '', $slug = ''){

	if($filename !== ''){

		$source = FWAPPS_ROOT_PATH.'/'.$filename;
		
		if(isset($slug) && file_exists( FWAPPS_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';

		
		if( file_exists( $source ) ){
			require $source;
		}
	}
}


//include a file
function app_get_component($filename = '', $slug =''){

	if($filename !== ''){

		$source = FWAPPS_ROOT_PATH.'/'.$filename;
		
		if(isset($slug) && file_exists( FWAPPS_ROOT_PATH.'/'.$filename.'-'.$slug.'.php' )){
			$source .= '-'.$slug;
		}
		
		$source .='.php';

		if( file_exists( $source ) ){
			include $source;
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
			
		//time tracker shit
		case 'workflow':
			$slug = '';
			switch($template_part):

				case '_DEMO-home':
				case 'home':
				case null:
					app_get_template_part("app-{$app}/home");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "app-{$app}/home";
					break;
				case 'project-list':
				case 'project-details':
				case '_DEMO-task':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "app-{$app}/{$template_part}";
					break;

				case 'workflux':
				case 'projects':
				case 'clients':
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
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "template design in progress. temporarily redirected";
					break;

				case 'debug':
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']="{$template_part}";
					break;

				default:
					app_get_template_part('global/error');
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
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "app-{$app}/home";
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
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "template design in progress. temporarily redirected";
					break;

				case 'notes':
				case 'team':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "app-{$app}/{$template_part}";
				break;


				case 'debug':
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']="{$template_part}";
					break;
				default:
					app_get_template_part('global/error');
					break;

			endswitch;
			break;


		//dashboard shit
		default:

			if($slug == ''){
				$slug = 'production';
			}

			switch($template_part):
				case 'new-content':
				case 'on-page':
				case 'social-media':
					app_get_template_part("app-{$app}/projects-scoreboard");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']='projects-scoreboard';
					break;

				case 'chart':
				case 'profiles':
				case 'last-activity':
				case 'last-activity-2':
				case 'login':
				case 'unique-links':
				case 'activity-log':
					app_get_template_part("app-{$app}/{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']= "app-{$app}/{$template_part}";
					break;

				case null:
				case 'home':
					app_get_template_part("app-{$app}/home",$slug);
					$GLOBALS['FWAPPS_CURR_TEMPLATE']="app-{$app}/home-{$slug}";

					break;
				case 'profile':
				case 'project':
				case 'projects':
					app_get_template_part("app-{$app}/{$template_part}",$slug);
					$GLOBALS['FWAPPS_CURR_TEMPLATE']="app-{$app}/{$template_part}-{$slug}";
					break;

					
				
				case 'debug':
				case 'debug-components':
					app_get_template_part("{$template_part}");
					$GLOBALS['FWAPPS_CURR_TEMPLATE']="{$template_part}";
					break;
				default:
					app_get_template_part('global/error');
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
		'template' => 'home',
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

