<?php

include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/posts.php';
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    $circles = getAllCirclesFromUser($_SESSION['id']);

    foreach($circles as $circle) {
        $friends = getFriendsFromCircle($circle['id'], $_SESSION['id']);
        foreach($friends as $friend)
            $c[] = $friend;
    }

    if($c) {
        $circlesUsers = array_unique($c);
        foreach($circlesUsers as $circleUser) {
            $circlePosts[] = getPostsFromUser($circleUser['id']);
        }
        $smarty->assign('circles_posts', $circlePosts);
    }

    $smarty->assign('recent_posts', getRecentPosts());
    $smarty->assign('user_circles', $circles);

    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));

    $smarty->display('../../templates/posts/feed.tpl');
}
else
    $smarty->display('../../templates/users/home.tpl');