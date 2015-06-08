<?


include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/circles.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['circle_ids']) {
    $return_messages['errors'][] = 'No circle ids!';
}
else{
    function filter(&$value) {
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    $circle_ids = $_POST['circle_ids'];
    array_walk_recursive($circle_ids, "filter");

    $users = array();

    foreach($circle_ids as $circle_id){
        $users = array_merge($users, getFriendsFromCircle($circle_id, $_SESSION['id']));
    }

    $user_ids = array();
    foreach($users as $user){
        $user_ids[] = $user['id'];
    }

    $user_ids = array_unique($user_ids);

    $return_messages['number_users'] = sizeof($user_ids);
    $posts = getPostsFromUsers($user_ids);
    $return_messages['number_posts'] = sizeof($posts);

    $html_response_msg = "";

    foreach($posts as $post){
        if(((!isset($post['start_date']) || $post['start_date'] < date("Y-m-d H:i:s")) &&
                (!isset($post['expiration_date']) || $post['expiration_date'] > date("Y-m-d H:i:s")))
            || $post['user_id'] == $_SESSION['id']) {
            $smarty->assign('post', $post);
            $html_response_msg = $html_response_msg . $smarty->fetch('../../templates/posts/post.tpl');
        }
    }

    $return_messages['html'] = $html_response_msg;
    $return_messages['base_url'] = $BASE_URL;
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';

echo json_encode($return_messages);




?>
