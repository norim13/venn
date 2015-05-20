<?php
include_once('../../config/init.php');
include('../../database/circles.php');

$user_id=htmlspecialchars($_GET['user_id']);
$myId = $_SESSION['id'];

acceptFriendRequest($myId,$user_id);

header('Location: ' . '../../pages/users/circles.php');
exit;
