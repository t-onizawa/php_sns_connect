<?php

define('DSN', 'mysql:host=ocalhost;dbname=bananacross_tw_connect_php');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', '826to828');

define('CONSUMER_KEY', '9jiHJFMvBRDVoGgyRqhwnQ');
define('CONSUMER_SECRET', '40tVX5jafLo3OsD09877ZKe4ZhWVOkv9a6iDavHiX8');

// define('SITE_URL', 'http://oni.dev/bananacross_tw_connect_php/');
define('SITE_URL', 'http://oni.dev/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/tw_connect_php');