<?php

require_once('config.php');

session_start();

function h($s) {
	return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

// ログインチェック
if (empty($_SESSION['user'])) {
	header('Location: '.SITE_URL.'login.php');
	exit;
}

// 友達情報の取得
// $url = "https://graph.facebook.com/me/friends?access_token=".$_SESSION['user']['facebook_access_token'];
// $friends = json_decode(file_get_contents($url));
//var_dump($friends);
//exit;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Facebook Friends</title>
	<link rel="stylesheet" href="/css/common.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="header-inner">
				<div class="logined">
					<p class="login-img"><img src="<?php echo h($_SESSION['user']['facebook_picture']); ?>" alt="?php echo h($_SESSION['user']['facebook_name']); ?>"></p>
					<span class="login-name"><?php echo h($_SESSION['user']['facebook_name']); ?><a href="logout.php" class="logout-link">ログアウト</a>
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