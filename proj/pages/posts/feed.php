<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->display('../../templates/posts/feed.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');