<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';

$users=getAllUsers();
$posts=getAllPosts();

$smarty->assign('users', $users);
$smarty->assign('posts', $posts);


$smarty->display('../../templates/admin/database.tpl');

?>