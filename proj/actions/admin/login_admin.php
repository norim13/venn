<?php
include_once('../../config/init.php');
include_once('../../database/admin.php');

$return_messages = array();

if (!$_POST['email'] || !$_POST['password']) {
    $return_messages['errors'][] = 'Please, fill in both fields';
}
else{
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if (isLoginAdminCorrect($email, $password)) {
        $_SESSION['email'] = $email;
        $_SESSION['id']=getAdminFromEmail($email)['id'];
        header('Location: ' . '../../pages/admin/main_panel.php');
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}


