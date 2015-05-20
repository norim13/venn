<?php
include_once '../../config/init.php';
include_once '../../database/posts.php';

if(isset($_POST['bool']) && isset($_POST['id'])) {
    $bool = htmlspecialchars($_POST['bool']);
    $post_id = htmlspecialchars($_POST['id']);

    $vote = getVote($_SESSION['id'], $post_id);

    if($vote == null) {
        if($bool == "upvote") {
            createVote($_SESSION['id'], $post_id, '1');
        }
        else if($bool == "downvote") {
            createVote($_SESSION['id'], $post_id, '0');
        }
        $response['changed'] = 0;
    }
    else {
        if($bool == "upvote" && $vote['positive'] == '1' || $bool == "downvote" && $vote['positive'] == '0' ) {
            deleteVote($_SESSION['id'], $post_id);
            $response['changed'] = 1;
        }
        else if($bool == "upvote" && $vote['positive'] == '0') {
            updateVote($_SESSION['id'], $post_id, '1');
            $response['changed'] = 2;
        }
        else if($bool == "downvote" && $vote['positive'] == '1' ) {
            updateVote($_SESSION['id'], $post_id, '0');
            $response['changed'] = 3;
        }
    }

    $response['post_id'] = $post_id;
    $response['new_votecount'] = getVoteCount($post_id)['votedifference'];
    $response['bool'] = $bool;
    echo json_encode($response);
}
