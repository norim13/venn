<?php

include_once('../../config/init.php');
include_once('../../database/posts.php');


if (isset($_POST['post_id'])) {
    deletePost(htmlspecialchars($_POST['post_id']));
    $response['post_id'] = htmlspecialchars($_POST['post_id']);
    echo json_encode($response);
}