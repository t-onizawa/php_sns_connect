<?php

function h($s) {
	return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

require_once('config.php');
require_once('tw_connect_php/codebird.php');

session_start();

if (empty($_SESSION['me']) || empty($_SESSION['user'])) {
	header('Location: '.SITE_URL.'login.php');
	exit;
} 

if ($_SESSION['me']) {
	$name = ($_SESSION['me']['tw_screen_name']);
}
if ($_SESSION['user']) {
	$name = ($_SESSION['user']['facebook_name']);
	$img = '<p class="login-img"><img src="<?php echo h($_SESSION['user']['facebook_picture']); ?>" alt="?php echo h($_SESSION['user']['facebook_name']); ?>"></p>';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>top page</title>
	<link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="header-inner">
				<div class="logined">
					<?php 
					if (!empty($img)) {
						echo h($img);
					}
					?>
					<span class="login-name"><?php echo h($_SESSION['user']['facebook_name']); ?><a href="/fb_connect_php/logout.php" class="logout-link">ログアウト</a>
					</span>
				</div>
			</div>
		</header>
		<main>
			
		</main>
		<footer class="footer">

		</footer>
	</div>
	
	
	
	<!--
	<ul>
	<?php foreach ($friends->data as $friend) : ?>
	<li><?php echo h($friend->name); ?></li>
	<?php endforeach; ?>
	</ul>
	-->

</body>
</html>