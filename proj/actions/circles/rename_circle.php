<?php

include_once('../../config/init.php');
include('../../database/circles.php');

$circle_new_name=htmlspecialchars($_POST['circle_rename']);
$circle_id=htmlspecialchars($_POST['circle_id']);
$myId = $_SESSION['id'];

renameCircle($circle_new_name,$circle_id,$myId);

header('Location: ' . '../../pages/users/circles.php');
exit;
