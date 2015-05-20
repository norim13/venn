<?php

include_once('../../config/init.php');

include('../../database/admin.php');
if (!$_POST['user_id']) {
    header('Location: ' . '../../pages/admin/database.php');
    exit;
}

$user_id=htmlspecialchars($_POST['user_id']);

deleteUser($user_id);

header('Location: ' . '../../pages/admin/database.php');
exit;
