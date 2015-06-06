<?php
include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['post_id']) {
    $return_messages['errors'][] = 'No post id';
}
else{
    $post_id = htmlspecialchars($_POST['post_id']);
    $post = getPostFromID($post_id);

    $message ="<a href=\"" . $BASE_URL . "pages/posts/single_post.php?post_id=".$post_id ."\">
    <i class=\"fa fa-retweet\"></i> ". getUserFromID($post['user_id'])['name'] ."</a> <p></p>".
        $post['message'];

    $new_post_id = createPost($_SESSION['id'], $message, $post['url'], null, $post['expiration_date'])['id'];

    $imagePath = getImagePathFromPost($post_id)[0]['path'];

    if($imagePath != null)
        createImagePost($imagePath,$_SESSION['id'],$new_post_id);

    $tags = getTagNamesFromPost($post_id);
    foreach($tags as $newTag)
        addTagToPost($new_post_id,$newTag['name']);
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);
