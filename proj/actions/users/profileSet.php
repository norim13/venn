<?php

include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/posts.php');

$user_id = $_SESSION['id'];

if(isset($_POST['newName']))
{
    $newName=htmlspecialchars($_POST['newName']);
    if($newName!="")
        updateUserName($user_id,$newName);

}
if(isset($_POST['pass1']) && isset($_POST['pass2'])){
    $pass1=htmlspecialchars($_POST['pass1']);
    $pass2=htmlspecialchars($_POST['pass2']);
    if($pass1==$pass2 && $pass1!= "" ) {
        setNewPassword($user_id, $pass1);
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);