<?php

include_once('../../config/init.php');
include_once('../../database/circles.php');
include_once('../../database/users.php');

$return_messages = array();
if(!isset($_POST['circle_id']) || $_POST['circle_id'] == '' || !isset($_POST['friend_hash']) || $_POST['friend_hash'] == ''){
    $return_messages['errors'][] = 'Missing parameter!';
}
else{
    $circle_id=htmlspecialchars($_POST['circle_id']);
    $friend_hash = htmlspecialchars($_POST['friend_hash']);
    $myId = $_SESSION['id'];

    try {
        $friend = getUserFromHash($friend_hash);
        if ($friend != null){
            if (!isInCircle($myId, $friend['id'], $circle_id))
                addFriendToCircle($circle_id,$myId,$friend['id']);
            else $return_messages['success'][] = "Friend already in this circle!";
        }
        else $return_messages['errors'][] = "Friend not found...";

    } catch (PDOException $e) {
        $return_messages['errors'][] = "Database exception: " . $e->getMessage();
    }
}


if (!isset($return_messages['errors']))
    if (!isset($return_messages['success']))
        $return_messages['success'] = 'Friend added to circle.';

echo json_encode($return_messages);