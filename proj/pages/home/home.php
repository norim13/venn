<?php

	include '../../config/init.php';

    if($_SESSION['email'])
        $smarty->display('../../templates/posts/feed.tpl');
    else
	    $smarty->display('../../templates/users/home.tpl');
?>