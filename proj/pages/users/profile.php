<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/users.php';
    include_once '../../database/posts.php';

    if (isset($_GET['user'])) {
        $hashId = $_GET['user'];
        $user = getUserFromHash($hashId);
        $smarty->assign('user', $user);

        if ($user == null) {
            $smarty->display('../../templates/users/profile_error.tpl');
        } elseif ($_SESSION['id'] == $user['id']) {
            $posts = getPostsFromUser($user['id']);
            $smarty->assign('user_posts', $posts);
            $smarty->display('../../templates/users/profile.tpl');
        } elseif (isFriend($_SESSION['id'], $hashId)) {
            $posts = getPostsFromUser($user['id']);
            $smarty->assign('user_posts', $posts);
            $smarty->display('../../templates/users/profile_friend_added.tpl');
        } else {
            $posts = getPostsFromUser($user['id']);
            $smarty->assign('user_posts', $posts);
            $smarty->display('../../templates/users/profile_friend.tpl');
        }
    } else {
        $user = getUserFromEmail($_SESSION['email']);
        $smarty->assign('user', $user);
        $posts = getPostsFromUser($user['id']);
        $smarty->assign('user_posts', $posts);
        $smarty->display('../../templates/users/profile.tpl');
    }
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');