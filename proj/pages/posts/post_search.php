<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    if (isset($_GET['search'])) {
        $search_string = htmlspecialchars($_GET['search']);

        $posts = searchPosts($search_string);

        foreach($posts as $post => $key) {
            if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
                (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
                && $key['user_id'] != $_SESSION['id']) {
                unset($posts[$post]);
            }
        }

        $smarty->assign('posts', $posts);
        $smarty->assign('search_string', $search_string);

        $smarty->display('../../templates/posts/post_search_results.tpl');
    }
    else header('Location: ' . $BASE_URL . 'pages/home/home.php');

}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
