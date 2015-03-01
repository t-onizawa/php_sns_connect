<?php

require_once('config.php');
require_once('codebird.php');

session_start();

if (empty($_SESSION['me'])) {
    header('Location: '.SITE_URL.'login.php');
    exit;
}

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

// Codebird::setConsumerKey(CONSUMER_KEY, CONSUMER_SECRET);
// $cb = Codebird::getInstance();

// $cb->setToken($_SESSION['me']['tw_access_token'], $_SESSION['me']['tw_access_token_secret']);

// $tweet = (array) $cb->statuses_homeTimiline();
// array_pop($tweets);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
</head>
<body>
<h1>ホーム画面</h1>
<p><?php echo h($_SESSION['me']['tw_screen_name']); ?>のTwitterアカウントでログインしています。</p>
<p><a href="logout.php">[ログアウト]</a></p>

<ul>
<?php foreach ($tweets as $tweet) : ?>
<?php if (!$tweet->user->protected) : ?>
<li><?php echo h($tweet->text); ?></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>

</body>
</html>