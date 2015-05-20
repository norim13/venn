<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';

$posts=getAllPosts();

$smarty->assign('posts', $posts);
/*
foreach ($posts as $post){
print_r($post);
    echo "<br>";
}
*/
$smarty->display('../../templates/admin/database_posts.tpl');

?>