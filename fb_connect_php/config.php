<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'dbuser');
	define('DB_PASSWORD', '826to828');
	define('DB_NAME', 'bananacross_fb_connect_php');

	define('APP_ID', '173508122808441');
	define('APP_SECRET', '3d7e7d3ff854cff3c9859538ccdc7339');

	//define('SITE_URL', 'http://oni.dev/fb_connect_php/');
	define('SITE_URL', 'http://oni.dev/');

	error_reporting(E_ALL & ~E_NOTICE);

	session_set_cookie_params(0, '/fb_connect_php/');

?>