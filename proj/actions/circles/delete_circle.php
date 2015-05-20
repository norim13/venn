<?php

include_once('../../config/init.php');
include('../../database/circles.php');

$circle_id=htmlspecialchars($_GET['circle_id']);
$myId = $_SESSION['id'];

deleteCircle($circle_id,$myId);

header('Location: ' . '../../pages/users/circles.php');
exit;
