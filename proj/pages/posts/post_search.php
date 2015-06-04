<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    if (isset($_GET['search'])) {
        $search_string = htmlspecialchars($_GET['search']);

        $posts = searchPosts($search_string);

        $smarty->assign('posts', $posts);
        $smarty->assign('search_string', $search_string);

        $smarty->display('../../templates/posts/post_search_results.tpl');
    }
    else header('Location: ' . $BASE_URL . 'pages/home/home.php');

}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
