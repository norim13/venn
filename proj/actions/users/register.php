<?php
include_once('../../config/init.php');
include_once('../../database/users.php');  

if (!$_POST['username'] || !$_POST['email'] || !$_POST['password']) {
  $_SESSION['error_messages'][] = 'All fields are mandatory';
  $_SESSION['form_values'] = $_POST;
  //header("Location: $BASE_URL" . 'pages/users/register.php');
  exit;
}

$username = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$password = $_POST['password'];
//$gender = $_POST['gender'];
$gender = 'M';

try {
  createUser($username, $email, $password, $gender);
} catch (PDOException $e) {
echo "<br/>";
echo $e->getMessage();
echo "<br/>";
  if (strpos($e->getMessage(), 'users_pkey') !== false) {
  $_SESSION['error_messages'][] = 'Duplicate username';
  $_SESSION['field_errors']['username'] = 'Username already exists';
  }
  else $_SESSION['error_messages'][] = 'Error creating user';

  $_SESSION['form_values'] = $_POST;
  //header("Location: $BASE_URL" . 'pages/users/register.php');
  exit;
}

$_SESSION['success_messages'][] = 'User registered successfully'; 
header("Location: $BASE_URL");
?>