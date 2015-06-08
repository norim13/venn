<?php
include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/posts.php');

$return_messages = array();

try {
    if (!$_POST['post_id']) {
        $return_messages['errors'][] = 'No post id!';
    }
    else{
        $post_id = htmlspecialchars($_POST['post_id']);
        $comments = getCommentsFromPostID($post_id);
        $return_messages['comments'] = $comments;
        $return_messages['base_url'] = $BASE_URL;
    }
} catch (PDOException $e) {
    $return_messages['errors'][] = "Database exception!";
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);
