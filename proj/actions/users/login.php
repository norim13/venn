<?php
include_once('../../config/init.php');
include_once('../../database/users.php');

$return_messages = array();

if (!$_POST['email'] || !$_POST['password']) {
    $return_messages['errors'][] = 'Please, fill in both fields';
}
else{
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (isLoginCorrect($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['id']=getUserFromEmail($email)['id'];
        updateLogin($email);
    } else {
        $return_messages['errors'][] = 'Wrong email and/or password';
    }
}

if (!isset($return_messages['errors']))
    $return_messages['success'] = 'Success';
echo json_encode($return_messages);

