<?php
include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/posts.php');

$return_messages = array();

if (!$_POST['msg'] || !$_POST['post_id']) {
    $return_messages['errors'][] = 'Please, type comment';
}
else{
    $comment = htmlspecialchars($_POST['msg']);
    $post_id = htmlspecialchars($_POST['post_id']);
    createComment($_SESSION['id'], $post_id, $comment);
    $return_messages['comment']['msg'] = $comment;
    $return_messages['comment']['user'] = getNameFromID($_SESSION['id'])['name'];
    $return_messages['comment']['user_hashid'] = getHashID($_SESSION['id'])['hashid'];
    $return_messages['comment']['date'] = date('Y-m-d');
    $return_messages['base_url'] = $BASE_URL;
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);
