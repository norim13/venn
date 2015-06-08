<?php

include_once('../../config/init.php');
include_once('../../database/posts.php');

$return_messages = array();

try {
    if (isset($_POST['post_id'])) {
        deletePost(htmlspecialchars($_POST['post_id']));
        $return_messages['post_id'] = htmlspecialchars($_POST['post_id']);
    }
    else {
        $return_messages['errors'][] = "Post id not set!";
    }
} catch (PDOException $e) {
    $return_messages['errors'][] = "Database exception!";
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);