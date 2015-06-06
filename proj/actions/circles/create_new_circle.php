<?php

include_once('../../config/init.php');
include_once('../../database/circles.php');

$circle_name=htmlspecialchars($_POST['circle_name']);
$myId = $_SESSION['id'];
$friends = $_POST['friends'];

$circle_id = createNewCircle($circle_name,$myId)['id'];

foreach($friends as $friend) {
    addFriendToCircle($circle_id,$myId,$friend);
}