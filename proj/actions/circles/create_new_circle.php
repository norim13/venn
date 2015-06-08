<?php

include_once('../../config/init.php');
include_once('../../database/circles.php');

$return_messages = array();
if(!isset($_POST['circle_name']) || $_POST['circle_name'] == ''){
    $return_messages['errors'][] = 'No circle name!';
}
else{
    $circle_name=htmlspecialchars($_POST['circle_name']);
    $myId = $_SESSION['id'];
    $friends = $_POST['friends'];

    try {
        global $conn;
        $conn->beginTransaction();
        $circle_id = createNewCircle($circle_name,$myId)['id'];
        foreach($friends as $friend) {
            addFriendToCircle($circle_id,$myId,$friend);
        }
        $conn->commit();
    } catch (PDOException $e) {
        $conn->rollBack();
        $return_messages['errors'][] = "Database exception: " . $e->getMessage();
    }
}


if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);