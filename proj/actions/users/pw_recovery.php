<?php

include_once('../../config/init.php');
include_once('../../database/users.php');

$email = $_POST['email'];
$user = getUserFromEmail($email);

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$code = substr( str_shuffle( $chars ), 0, 8 );
$pwTemp = substr( str_shuffle( $chars ), 0, 8 );

$link = "http://gnomo.fe.up.pt" . $BASE_URL."pages/users/change_password_vialink.php?codePw=".$code;

storeTempCode($user['id'],$code);

setNewPassword($user['id'],$pwTemp);

$message = "Hi!\nIf you don't have an account on Venn or didn't ask for a new password please ignore this email. \n
Your new temporary password is:". $pwTemp . "

 \n You can also click the following link to reset the password right now. Note that this link can only be used once, so if you don't reset your password you'll have to use the one we gave you in this email. \n LINK:"
. $link;
mail($email,'New Password',$message,'From: venn_no_reply@vicus.com');

header('Location: ' . $BASE_URL);

?>


