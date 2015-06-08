<?php

include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/circles.php');
include_once('../../database/posts.php');


$circle_id=$_POST['circle_id'];
$user_id = getUserFromEmail($_SESSION['email'])['id'];
if (isset($_FILES['image']) && $_FILES['image'] !="") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    echo $target_file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    $image_name= $_FILES['image']['name'];
    $image_type= $_FILES['image']['type'];
    $image_size= $_FILES['image']['size'];
    $image_tmp_name= $_FILES['image']['tmp_name'];

    if($image_name!="")
    {
        //echo "name: $image_name | type: $image_type | size: $image_size | tmp_name: $image_tmp_name<br>";
        $extension=substr($image_type, 6);
        //echo 'extension: '.$extension.'<br>';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $nameImage = substr( str_shuffle( $chars ), 0, 8 );

        $filename= "circle_".$nameImage.'.'.$extension;
        //echo 'new name: '.$filename.'<br>';

        $path_folder = "../../images/users/".$user_id;

        if ( ! is_dir($path_folder)) {
            mkdir($path_folder);
        }
        $destination=$path_folder."/".$filename;
        //echo "filename: $filename<br>";
        //echo "extension: $extension<br>";

        move_uploaded_file($image_tmp_name, $destination);
        $image = createImage($user_id."/".$filename,$user_id)['id'];
        echo "<br>";
        echo "id:";
        print_r($image);
        updateCircleImage($circle_id,$image);
    }
}
