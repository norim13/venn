<?php

include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/posts.php');

$user_id = getUserFromEmail($_SESSION['email'])['id'];

if (isset($_FILES['image']['name'])) {
    $image_name= $_FILES['image']['name'];
    $image_type= $_FILES['image']['type'];
    $image_size= $_FILES['image']['size'];
    $image_tmp_name= $_FILES['image']['tmp_name'];

    if($image_name!="")
        //echo "name: $image_name | type: $image_type | size: $image_size | tmp_name: $image_tmp_name<br>";
        $extension=substr($image_type, 6);
    //echo 'extension: '.$extension.'<br>';
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $nameImage = substr( str_shuffle( $chars ), 0, 8 );

    $filename= $user_id.'_'.$nameImage.'.'.$extension;
    //echo 'new name: '.$filename.'<br>';

    $path_folder = "../../images/users/".$user_id;

    if ( ! is_dir($path_folder)) {
        mkdir($path_folder);
    }
    $destination=$path_folder."/".$filename;

    move_uploaded_file($image_tmp_name, $destination);

    $image = createImage($user_id."/".$filename,$user_id);

    $oldImage = updateProfilePic($user_id,$image['id']);

    print_r($oldImage);

    if($oldImage['id'] != 1 && $oldImage['id'] != 2) {
        //deleteImage();
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);