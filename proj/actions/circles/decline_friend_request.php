<?php
include_once('../../config/init.php');
include_once('../../database/circles.php');

$user_id = htmlspecialchars($_POST['user_id']);
$myId = $_SESSION['id'];

declineFriendRequest($myId,$user_id);
