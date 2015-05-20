<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->display('../../templates/posts/feed.tpl');
}
else
    $smarty->display('../../templates/users/home.tpl');