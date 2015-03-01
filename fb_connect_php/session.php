<?php

// facebook
require_once('fb_connect_php/config.php');

session_start();


if (empty($_SESSION['user'])) {
	header('Location: '.SITE_URL.'login.php');
	exit;
} else {
	header('Location: '.SITE_URL.'index.php');
	exit;
}


?>