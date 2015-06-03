<?php
include_once('../../config/init.php');
include_once('../../database/posts.php');

$return_messages = array();

if (!$_POST['post_id']) {
    $return_messages['errors'][] = 'No post id!';
}
else{
    $post_id = htmlspecialchars($_POST['post_id']);

    if(isMyPost($post_id,$_SESSION['id'])) {
        $votes = getVotesFromPostID($post_id);
        $return_messages['votes'] = $votes;
        $return_messages['post_id'] = $post_id;
        $return_messages['can_view'] = 'true';
    }
    else {
        $return_messages['errors']['not_owner'] = 'Not my post!';
        $return_messages['can_view'] = 'false';
    }
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);