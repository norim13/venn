<?php
include_once('../../config/init.php');
include_once('../../database/circles.php');
include_once('../../database/users.php');

$return_messages = array();


$user_id = $_SESSION['id'];

$circles = getAllCirclesFromUser($user_id);

foreach($circles as &$circle) {
    $circle['imagePath'] = getPathImageFromID($circle['img_id'])['path'];
}

$return_messages['circles'] = $circles;
$return_messages['base_url'] = $BASE_URL;


if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';


echo json_encode($return_messages);