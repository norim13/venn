<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/users.php';
    include_once '../../database/posts.php';
    include_once '../../database/circles.php';

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));

    if (isset($_GET['user'])) {
        $hashId = $_GET['user'];
        $user = getUserFromHash($hashId);
        $smarty->assign('user', $user);

        $smarty->assign('numberOfFriends', sizeof(getAllFriendsOfUser($user['id'])));

        if ($user == null) {
            $smarty->display('../../templates/users/profile_error.tpl');
        } elseif ($_SESSION['id'] == $user['id']) {
            include_once '../../database/circles.php';
            $posts = getPostsFromUser($user['id']);

            $smarty->assign('user_posts', $posts);
            $smarty->assign('numberOfPosts',sizeof($posts));
            $smarty->assign('numberOfVotes',sizeof(getVotesFromUser($user['id'])));
            $smarty->assign('user_circles', getAllCirclesFromUser($_SESSION['id']));
            $smarty->assign('profilePIC',getPathImageFromID($user['profilepic_id']));
            $smarty->display('../../templates/users/profile.tpl');
        } elseif (isFriend($_SESSION['id'], $hashId)) {
            $posts = getPostsFromUser($user['id']);
            $smarty->assign('numberOfPosts',sizeof($posts));
            $smarty->assign('numberOfVotes',sizeof(getVotesFromUser($user['id'])));
            foreach($posts as $post => $key) {
                if((isset($key['start_date']) && $key['start_date'] > date("Y-m-d H:i:s")) ||
                    (isset($key['expiration_date']) && $key['expiration_date'] < date("Y-m-d H:i:s"))
                    && $key['user_id'] != $_SESSION['id']) {
                    unset($posts[$post]);
                }
            }
            $smarty->assign('user_posts', $posts);
            $smarty->assign('profilePIC',getPathImageFromID($user['profilepic_id']));
            $smarty->display('../../templates/users/profile_friend_added.tpl');
        } else {
            $requestSent = hasFriendRequest($_SESSION['id'],$user['id']);
            $smarty->assign('requestSent', $requestSent);
            $smarty->assign('profilePIC',getPathImageFromID($user['profilepic_id']));
            $smarty->display('../../templates/users/profile_friend.tpl');
        }
    } else {
        $user = getUserFromEmail($_SESSION['email']);
        $smarty->assign('profilePIC',getPathImageFromID($user['profilepic_id']));
        $smarty->assign('numberOfFriends', sizeof(getAllFriendsOfUser($user['id'])));
        $smarty->assign('user', $user);
        $posts = getPostsFromUser($user['id']);

        $smarty->assign('numberOfVotes',sizeof(getVotesFromUser($user['id'])));
        $smarty->assign('numberOfPosts',sizeof($posts));
        $smarty->assign('user_posts', $posts);
        $smarty->assign('user_circles', getAllCirclesFromUser($_SESSION['id']));
        $smarty->display('../../templates/users/profile.tpl');
    }
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
