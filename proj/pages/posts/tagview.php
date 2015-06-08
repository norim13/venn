<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';

    if (isset($_GET['tagname'])) {
        $tagname = htmlspecialchars($_GET['tagname']);

        $tagposts = getPostsWithTag($tagname);

        foreach($tagposts as $post => $key) {
            if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
                (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
                && $key['user_id'] != $_SESSION['id']) {
                unset($tagposts[$post]);
            }
        }

        $smarty->assign('tagposts', $tagposts);
        $smarty->assign('tagname', $tagname);
    }

    $smarty->display('../../templates/posts/tagview.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
