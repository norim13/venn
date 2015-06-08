<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';
include_once '../../database/users.php';

if($_SESSION['admin']) {


    $users = getAllUsers();
    $posts = getAllPosts();

    $smarty->assign('users', $users);
    $smarty->assign('posts', $posts);


    $smarty->display('../../templates/admin/database_users.tpl');
}
?>