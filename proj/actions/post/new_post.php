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

if(isset($_POST['url']) && $_POST['url'] != "") {
    $url = htmlspecialchars($_POST['url']);
    $needle = "http://";
    if (strpos($url, $needle, 0) !== 0)
        $url = $needle . $url;
}

if(isset($_POST['tags']) && $_POST['tags'] != "")
    $tags = preg_split("/[\s,]+/",htmlspecialchars($_POST['tags']));

if(isset($_POST['date']) && $_POST['date'] != "") {
    $date = preg_split("/[\s\/]+/", htmlspecialchars($_POST['date']));
    $new_date = $date[2] . "-" . $date[1] . "-" . $date[0];
}

$new_post = createPost($user_id,$message,$url,$new_date);

foreach ($tags as $tag) {
    addTagToPost($new_post['id'],$tag);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);