<?php
include_once('../../config/init.php');
include_once('../../database/circles.php');
include_once('../../database/users.php');

$return_messages = array();


$user_id = $_SESSION['id'];

$friends = getAllFriendsOfUser($user_id);

foreach($friends as &$friend) {
    $friend['imagePath'] = getPathImageFromID($friend['profilepic_id'])['path'];
}

$return_messages['friends'] = $friends;
$return_messages['base_url'] = $BASE_URL;


if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';


echo json_encode($return_messages);