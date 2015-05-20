<?php
include_once('../../config/init.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['username'] || !$_POST['email'] || !$_POST['gender'] || !$_POST['password'] || !$_POST['confirmPassword']) {
    $return_messages['errors'][] = 'All fields are mandatory';
}
else{
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['confirmPassword']);

    $gender = htmlspecialchars($_POST['gender']);

    if($password != $password2) {
        $return_messages['errors'][] = 'Passwords don\'t match';
    }
    else{
        try {
            if (createUser($username, $email, $password, $gender) === false)
                $return_messages['errors'][] = 'Email already registered...';
        } catch (PDOException $e) {
            $return_messages['errors'][] = 'Unknown error!';
            //$return_messages['errors'][] = $e->getMessage();
        }
    }
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';
echo json_encode($return_messages);
