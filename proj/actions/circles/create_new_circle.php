<?php

include_once('../../config/init.php');
include('../../database/circles.php');

$circle_name=htmlspecialchars($_POST['circle_name']);
$myId = $_SESSION['id'];

createNewCircle($circle_name,$myId);

header('Location: ' . '../../pages/users/circles.php');
exit;
