<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    if(isset($_GET['post_id'])) {
        $post_id = $_GET['post_id'];
        $smarty->assign('post', getPostFromID($post_id));
    }

    $smarty->display('../../templates/posts/single_post.tpl');
}
else header('Location: ' . $BASE_URL . 'pages/home/home.php');
