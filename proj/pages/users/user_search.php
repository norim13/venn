<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    include_once '../../database/users.php';

    if (isset($_GET['search'])) {
        $search_string = htmlspecialchars($_GET['search']);

        $users = searchUsers($search_string);

        $smarty->assign('users', $users);
        $smarty->assign('search_string', $search_string);

        $smarty->display('../../templates/users/user_search_results.tpl');
    }
    else header('Location: ' . $BASE_URL . 'pages/home/home.php');

}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');
