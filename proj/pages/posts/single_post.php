<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    if(isset($_GET['post_id'])) {
        $post_id = htmlspecialchars($_GET['post_id']);
        $post = getPostFromID($post_id);

        if($post['start_date'] < date("Y-m-d H:i:s") || $post['expiration_date'] > date("Y-m-d H:i:s")) {
            $smarty->assign('post', $post);
        }
        else if ($post['user_id'] == $_SESSION['id']) {
            $smarty->assign('post', $post);
        }
    }

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));
    $smarty->display('../../templates/posts/single_post.tpl');
}
else header('Location: ' . $BASE_URL . 'pages/home/home.php');
