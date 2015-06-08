<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';

if($_SESSION['admin']) {


    $users = getAllUsers();
    $posts = getAllPosts();
    $admin = getAdminFromEmail($_SESSION['email']);

    $smarty->assign('users', $users);
    $smarty->assign('posts', $posts);
    $smarty->assign('posts', $posts);


    $smarty->display('../../templates/admin/database.tpl');
}
?>