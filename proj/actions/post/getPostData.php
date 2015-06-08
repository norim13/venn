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
            $post = getPostFromID($post_id);
            $tags = getTagNamesFromPost($post_id);

            if(isset($post['start_date']))  {
                $dateInit = preg_split("/[\s\-]+/", $post['start_date']);
                 $new_dateInit = $dateInit[2] . "/" . $dateInit[1] . "/" . $dateInit[0];
                 $return_messages['startdate'] = $new_dateInit;
           }

            if(isset($post['expiration_date'])) {
                $dateEnd = preg_split("/[\s\-]+/", $post['expiration_date']);
                $new_dateEnd = $dateEnd[2] . "/" . $dateEnd[1] . "/" . $dateEnd[0];

                $return_messages['enddate'] = $new_dateEnd;
            }

            $return_messages['post'] = $post;
            $return_messages['tags'] = $tags;
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