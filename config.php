<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'dbuser');
	define('DB_PASSWORD', '826to828');
	define('DB_NAME', 'bananacross_fb_connect_php');

	define('APP_ID', '173508122808441');
	define('APP_SECRET', '3d7e7d3ff854cff3c9859538ccdc7339');

	define('DSN', 'mysql:host=localhost;dbname=bananacross_tw_connect_php');

	define('CONSUMER_KEY', '9jiHJFMvBRDVoGgyRqhwnQ');
	define('CONSUMER_SECRET', '40tVX5jafLo3OsD09877ZKe4ZhWVOkv9a6iDavHiX8');
	//define('SITE_URL', 'http://oni.dev/fb_connect_php/');
	define('SITE_URL', 'http://oni.dev/');

	// define('SITE_URL', 'http://oni.dev/tw_connect_php/');
	define('SITE_URL', 'http://oni.dev/');

	error_reporting(E_ALL & ~E_NOTICE);

	session_set_cookie_params(0, '/tw_connect_php/');
	session_set_cookie_params(0, '/fb_connect_php/');

?>