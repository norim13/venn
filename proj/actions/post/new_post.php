<?php

include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');


if (!$_POST['message'] ) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$user_id = getUserFromEmail($_SESSION['email'])['id'];
$message = htmlspecialchars($_POST['message']);
$url = htmlspecialchars($_POST['url']);
$tags = preg_split("/[\s,]+/",htmlspecialchars($_POST['tags']));

$new_post=createPost($user_id,$message,$url);

foreach ($tags as $tag) {
    addTagToPost($new_post['id'],$tag);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);