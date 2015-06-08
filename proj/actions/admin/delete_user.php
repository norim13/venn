<?php

include_once('../../config/init.php');
include_once('../../database/admin.php');

if (!$_POST['user_id']) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$user_id=htmlspecialchars($_POST['user_id']);

deleteUser($user_id);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
