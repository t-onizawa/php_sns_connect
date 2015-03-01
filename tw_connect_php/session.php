<?php

// twitter
require_once('tw_connect_php/config.php');
require_once('tw_connect_php/codebird.php');

session_start();

if (empty($_SESSION['me'])) {
    header('Location: '.SITE_URL.'login.php');
    exit;
} else {
	header('Location: '.SITE_URL.'index.php');
	exit;
}

?>