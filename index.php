<?php 
/*
While the structure is setup to be dynamic ready, The current setup is to view demo templates only.
Feel free to fuck it up when the boi is ready to be fuckened up
*/

define('DASHBOARD_ROOT', $_SERVER['DOCUMENT_ROOT'].'/1p21dashboard' );
define('DASHBOARD_URL', $_SERVER['HTTP_HOST'].'/1p21dashboard' );


require_once 'includes/helpers.php';
require_once 'includes/header.php';
require_once 'includes/content.php';

echo 'yea boi';

require_once 'includes/footer.php';