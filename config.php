<?php
//file paths n url
define('DASHBOARD_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] );
define('DASHBOARD_ROOT_URL', ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http" ).'://'.$_SERVER['HTTP_HOST'] );

// modify preview content
// whether user is on scoreboard or production board
if(isset($_GET['env'])):
	$_GET['env'] = filter_var($_GET['env'], FILTER_SANITIZE_STRING);
endif;

$slug = '';

if(isset($_GET['env'])):
	$slug = $_GET['env'];
endif;


define('DASHBOARD_SLUG',$slug);




if(isset($_GET['template'])):
	$_GET['template'] = filter_var($_GET['template'], FILTER_SANITIZE_STRING);
endif;

$slug = '';

if(isset($_GET['template'])):
	$slug = $_GET['template'];
endif;


define('DASHBOARD_TEMPLATE',$slug);

