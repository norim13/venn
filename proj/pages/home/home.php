<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->assign('user_circles', getAllCirclesFromUser($_SESSION['id']));

    $smarty->display('../../templates/posts/feed.tpl');
}
else
    $smarty->display('../../templates/users/home.tpl');