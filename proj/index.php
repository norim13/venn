<?php
include 'pages/header.php';

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'feed';

switch ($currentPage) {
	case 'login':
	include 'pages/login.php';
	break;

	case 'signup':
	include 'pages/signup.php';
	break;

	case 'profile':
	include 'pages/profile.php';
	break;

	case 'profile_friend':
	include 'pages/profile_friend.php';
	break;

	case 'profile_friend_added':
	include 'pages/profile_friend_added.php';
	break;

	case 'profile_settings':
	include 'pages/profile_settings.php';
	break;

	case 'feed':
	include 'pages/feed.php';
	break;

	case 'circles':
	include 'pages/circles.php';
	break;

	case 'circles_new':
	include 'pages/circles_new.php';
	break;

	case 'home':
	include 'pages/home.php';
	break;

	case 'post':
	include 'pages/post.php';
	break;

	default:
	include 'pages/feed.php';
	break;
}

include 'pages/footer.php';
?>
