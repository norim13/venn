<?php

include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');

if (!isset($_POST['message'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$post_id = htmlspecialchars($_POST['post_id']);
$message = htmlspecialchars($_POST['message']);

if(isset($_POST['url']) && $_POST['url'] != "") {
    if(preg_match('/\S/', $_POST['url'])) {

        $url = htmlspecialchars($_POST['url']);
        $needle = "http://";
        $needle1 = "https://";
        if (strpos($url, $needle, 0) !== 0 && strpos($url, $needle1, 0) !== 0)
            $url = $needle . $url;
    }
}

if(isset($_POST['tags']) && preg_match('/\S/', $_POST['tags']))
    $tags = preg_split("/[\s,]+/",htmlspecialchars($_POST['tags']));

if(isset($_POST['dateInit']) && $_POST['dateInit'] != "") {
    $dateInit = preg_split("/[\s\/]+/", htmlspecialchars($_POST['dateInit']));
    $new_dateInit = $dateInit[2] . "-" . $dateInit[1] . "-" . $dateInit[0];
}

if(isset($_POST['dateFinal']) && $_POST['dateFinal'] != "") {
    $dateFinal = preg_split("/[\s\/]+/", htmlspecialchars($_POST['dateFinal']));
    $new_dateFinal = $dateFinal[2] . "-" . $dateFinal[1] . "-" . $dateFinal[0];
}

removeTagsFromPost($post_id);

editPost($post_id,$message,$url,$new_dateInit,$new_dateFinal);

if($tags!=null) {
    foreach ($tags as $tag) {
        if(preg_match('/\S/', $tag))
            addTagToPost($post_id, $tag);
    }
}

/*
if(isset($_POST['visibility']) && $_POST['visibility'] != "") {
    if($_POST['visibility'][0] != '0') {
        foreach($_POST['visibility'] as $visibility)
            createPostVisibleTo($new_post['id'], $visibility);
    }
}
*/

header('Location: ' . $_SERVER['HTTP_REFERER']);