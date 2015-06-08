<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    foreach($recent_posts as $post => $key) {
        if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
            (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
            && $key['user_id'] != $_SESSION['id']) {
            unset($recent_posts[$post]);
        }
    }

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));
    $smarty->assign('recent_posts', $recent_posts);
    $smarty->display('../../templates/posts/feed.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');