<?php

include_once('../../config/init.php');
include_once('../../database/admin.php');

$return_messages = array();

if(!$_POST['post_id'])
    $return_messages['errors'][] = 'No post selected';
else if (!$_POST['msg']) {
    $return_messages['errors'][] = 'Please, type comment';
}
else{
    $msg = htmlspecialchars($_POST['msg']);
    $post_id = htmlspecialchars($_POST['post_id']);
    createReport($post_id, $_SESSION['id'], $msg);
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);
