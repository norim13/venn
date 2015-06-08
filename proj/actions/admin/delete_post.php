<?php

include_once('../../config/init.php');
include_once('../../database/admin.php');

if (!$_POST['post_id']) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$post_id=htmlspecialchars($_POST['post_id']);

deletePost($post_id);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;