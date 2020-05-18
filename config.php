<?php


// error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//file paths n url
define('FWAPPS_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] );
define('FWAPPS_ROOT_URL', ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http" ).'://'.$_SERVER['HTTP_HOST'] );








// modify preview content
// whether user is on scoreboard or production board
if(isset($_GET['env'])):
	$_GET['env'] = filter_var($_GET['env'], FILTER_SANITIZE_STRING);
endif;

$___slug = '';

if(isset($_GET['env']) && $_GET['env'] !== ''):
	$___slug = $_GET['env'];
endif;


define('FWAPPS_SLUG',$___slug);









if(isset($_GET['template'])):
	$_GET['template'] = filter_var($_GET['template'], FILTER_SANITIZE_STRING);
endif;

$___template = 'home';

if(isset($_GET['template'])):
	$___template = $_GET['template'];
endif;


define('FWAPPS_TEMPLATE',$___template);









if(isset($_GET['app'])):
	$_GET['app'] = filter_var($_GET['app'], FILTER_SANITIZE_STRING);
endif;

$___app = 'dashboard';

if(isset($_GET['app'])):
	$___app = $_GET['app'];
endif;

define('FWAPPS_APP',$___app);






//search
if(isset($_GET['is_searching'])):
	$_GET['search'] = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
endif;


$GLOBALS['FWAPPS_CURR_TEMPLATE'] = 'global/error';