<?php
include 'config/init.php';
include 'templates/common/header.tpl';
if(!isset($_SESSION['email']))
	$currentPage = 'home';
else $currentPage = isset($_GET['page']) ? $_GET['page'] : 'feed';

switch ($currentPage) {
	case 'login':
	  $smarty->display('users/login.tpl');

	//include 'templates/users/login.tpl';
	break;

	case 'signup':
	  $smarty->display('users/signup.tpl');
	break;

	case 'profile':
	  $smarty->display('users/profile.tpl');
	break;

	case 'profile_friend':
	  $smarty->display('users/profile_friend.tpl');
	break;

	case 'profile_friend_added':
	  $smarty->display('users/profile_friend_added.tpl');
	break;

	case 'profile_settings':
	  $smarty->display('users/profile_settings.tpl');
	break;

	case 'feed':
	  $smarty->display('posts/feed.tpl');
	break;

	case 'circles':
	  $smarty->display('users/circles.tpl');
	break;

	case 'circles_new':
	  $smarty->display('users/circles_new.tpl');
	break;

	case 'home':
	  $smarty->display('users/home.tpl');
	break;

	case 'post':
	  $smarty->display('posts/post.tpl');
	break;

	case 'admin':
	  $smarty->display('admin/admin.tpl');
	break;

	default:
	  $smarty->display('posts/feed.tpl');
	break;
}

include 'templates/common/footer.tpl';
?>