<?php

include_once '../../config/init.php';


if($_SESSION['email']) {
    include_once '../../database/users.php';
    include_once '../../database/circles.php';

    $circles = getAllCirclesFromUser($_SESSION['id']);
    $user_friend_requests = getFriendRequestsOfUser($_SESSION['id']);
    $user_friends = getAllFriendsOfUser($_SESSION['id']);

    $smarty->assign('friendRequests', $user_friend_requests);
    $smarty->assign('user_circles', $circles);
    $smarty->assign('user_friend_requests', $user_friend_requests);
    $smarty->assign('user_friends', $user_friends);

    $smarty->assign('userId', $_SESSION['id']);

    $smarty->display('../../templates/users/circles.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');