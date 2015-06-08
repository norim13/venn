<?php
include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['post_id']) {
    $return_messages['errors'][] = 'No post id!';
}
else{
    try {
        $post_id = htmlspecialchars($_POST['post_id']);

        if(isMyPost($post_id,$_SESSION['id'])) {
            $votes = getVotesFromPostID($post_id);

            foreach($votes as &$vote) {
                $vote['imagePath'] = getProfilePic($vote['user_id']);
            }

            $return_messages['votes'] = $votes;
            $return_messages['post_id'] = $post_id;
            $return_messages['can_view'] = 'true';
            $return_messages['base_url'] = $BASE_URL;
        }
        else {
            $return_messages['errors'][] = 'Not my post!';
            $return_messages['can_view'] = 'false';
        }
    } catch (PDOException $e) {
        $return_messages['errors'][] = 'Database error!';
    }
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);