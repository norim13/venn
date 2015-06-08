<?php

include_once('../../config/init.php');
include_once('../../database/users.php');

if (!$_POST['email'] || !$_POST['oldpassword'] || !$_POST['password'] || !$_POST['confirmPassword']) {
    $return_messages['errors'][] = 'Please, fill in all fields';
}
else {
    $email = htmlspecialchars($_POST['email']);
    $oldpword = htmlspecialchars($_POST['oldpassword']);
    $newpword = htmlspecialchars($_POST['password']);
    $newpword2 = htmlspecialchars($_POST['confirmPassword']);

    if (isLoginCorrect($email,$oldpword) && $newpword == $newpword2) {
        $user = getUserFromEmail($email);
        setNewPassword($user['id'], $newpword);
        header('Location: ' . $BASE_URL);
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

