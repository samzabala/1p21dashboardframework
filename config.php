<?php
//file paths n url
define('DASHBOARD_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/1p21dashboard' );
define('DASHBOARD_ROOT_URL', ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http" ).'://'.$_SERVER['HTTP_HOST'].'/1p21dashboard' );

// modify preview content
// whether user is on scoreboard or production board
if(isset($_GET['dashboard_environment'])):
	$_GET['dashboard_environment'] = filter_var($_GET['dashboard_environment'], FILTER_SANITIZE_STRING);
endif;

$slug = '';

if(isset($_GET['dashboard_environment'])):
	$slug = $_GET['dashboard_environment'];
endif;

define('DASHBOARD_SLUG',$slug);

