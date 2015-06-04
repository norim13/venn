<?php
include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['post_id']) {
    $return_messages['errors'][] = 'No post id';
}
else{
    $post_id = htmlspecialchars($_POST['post_id']);
    $post = getPostFromID($post_id);

    $message ="<a href=\"" . $BASE_URL . "pages/posts/single_post.php?post_id=".$post_id ."\">
    <i class=\"fa fa-retweet\"></i> ". getUserFromID($post['user_id'])['name'] ."</a> <p></p>".
        $post['message'];

    createPost($_SESSION['id'], $message, $post['url'], $post['expiration_date']);
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);
