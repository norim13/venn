<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    if (isset($_GET['tagname'])) {
        $tagname = $_GET['tagname'];

        $tagposts = getPostsWithTag($tagname);

        $smarty->assign('tagposts', $tagposts);
        $smarty->assign('tagname', $tagname);
    }

    $smarty->display('../../templates/posts/tagview.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
