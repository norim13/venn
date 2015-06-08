<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/circles.php';
    include_once '../../database/users.php';

    $smarty->assign('profilePicS',getProfilePic($_SESSION['id']));
    $smarty->assign('friendRequests', getFriendRequestsOfUser($_SESSION['id']));
    $smarty->assign('user',getUserFromID($_SESSION['id']));
    $smarty->display('../../templates/users/profile_settings.tpl');

}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
