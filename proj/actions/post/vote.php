<?php
include_once '../../config/init.php';
include_once '../../database/posts.php';

$return_messages = array();

if(isset($_POST['bool']) && isset($_POST['id'])) {
    $bool = htmlspecialchars($_POST['bool']);
    $post_id = htmlspecialchars($_POST['id']);

    try {
        $vote = getVote($_SESSION['id'], $post_id);

        if ($vote == null) {
            if ($bool == "upvote") {
                createVote($_SESSION['id'], $post_id, '1');
            } else if ($bool == "downvote") {
                createVote($_SESSION['id'], $post_id, '0');
            }
            $return_messages['changed'] = 0;
        } else {
            if ($bool == "upvote" && $vote['positive'] == '1' || $bool == "downvote" && $vote['positive'] == '0') {
                deleteVote($_SESSION['id'], $post_id);
                $return_messages['changed'] = 1;
            } else if ($bool == "upvote" && $vote['positive'] == '0') {
                updateVote($_SESSION['id'], $post_id, '1');
                $return_messages['changed'] = 2;
            } else if ($bool == "downvote" && $vote['positive'] == '1') {
                updateVote($_SESSION['id'], $post_id, '0');
                $return_messages['changed'] = 3;
            }
        }

        $return_messages['post_id'] = $post_id;
        $return_messages['new_votecount'] = getVoteCount($post_id)['votedifference'];
        $return_messages['bool'] = $bool;
    } catch (PDOException $e) {
        $return_messages['errors'][] = "Database exception!";
    }

} else {
    $return_messages['errors'][] = "Post id or bool not set!";
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);