<?php 
/*
While the structure is setup to be dynamic ready, The current setup is to view demo templates only.
Feel free to fuck it up when the boi is ready to be fuckened up
*/

define('DASHBOARD_ROOT', $_SERVER['DOCUMENT_ROOT'].'/1p21dashboard' );
define('DASHBOARD_URL', ( (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http" ).'://'.$_SERVER['HTTP_HOST'].'/1p21dashboard' );


require_once DASHBOARD_ROOT.'/helpers.php';
require_once DASHBOARD_ROOT.'/header.php';

require_once DASHBOARD_ROOT.'/content.php';

require_once DASHBOARD_ROOT.'/footer.php';