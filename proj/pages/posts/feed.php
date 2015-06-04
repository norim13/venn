<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));
    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->display('../../templates/posts/feed.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');