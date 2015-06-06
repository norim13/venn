<?php

include_once('../../config/init.php');
include_once('../../database/posts.php');
include_once('../../database/users.php');

if (!$_POST['message'] ) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$user_id = getUserFromEmail($_SESSION['email'])['id'];
$message = htmlspecialchars($_POST['message']);

if(isset($_POST['url']) && $_POST['url'] != "") {
    $url = htmlspecialchars($_POST['url']);
    $needle = "http://";
    if (strpos($url, $needle, 0) !== 0)
        $url = $needle . $url;
}

if(isset($_POST['tags']) && $_POST['tags'] != "")
    $tags = preg_split("/[\s,]+/",htmlspecialchars($_POST['tags']));

if(isset($_POST['dateInit']) && $_POST['dateInit'] != "") {
    $dateInit = preg_split("/[\s\/]+/", htmlspecialchars($_POST['dateInit']));
    $new_dateInit = $dateInit[2] . "-" . $dateInit[1] . "-" . $dateInit[0];
}

if(isset($_POST['dateFinal']) && $_POST['dateFinal'] != "") {
    $dateFinal = preg_split("/[\s\/]+/", htmlspecialchars($_POST['dateFinal']));
    $new_dateFinal = $dateFinal[2] . "-" . $dateFinal[1] . "-" . $dateFinal[0];
}


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








$new_post = createPost($user_id,$message,$url,$new_dateInit,$new_dateFinal);

if($tags!=null) {
    foreach ($tags as $tag) {
        addTagToPost($new_post['id'], $tag);
    }
}


if (isset($_FILES['image']['name'])) {

    echo 'dentro';
    $image_name= $_FILES['image']['name'];
    $image_type= $_FILES['image']['type'];
    $image_size= $_FILES['image']['size'];
    $image_tmp_name= $_FILES['image']['tmp_name'];

    if($image_name=="")
    {
        //echo 'a';
        //$db->exec("INSERT INTO pollImage VALUES('$poll_id', 'databaseImages/polls.png')");
        //nao vai ter imagem
    }
    else
    {

        //echo "name: $image_name | type: $image_type | size: $image_size | tmp_name: $image_tmp_name<br>";
        $extension=substr($image_type, 6);
        //echo 'extension: '.$extension.'<br>';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $nameImage = substr( str_shuffle( $chars ), 0, 8 );

        $filename= $user_id.'_'.$nameImage.'.'.$extension;
        //echo 'new name: '.$filename.'<br>';

        $path_folder = "../../databaseImages/".$user_id;

        if ( ! is_dir($path_folder)) {
            mkdir($path_folder);
        }
        $destination=$path_folder."/".$filename;
        //echo "filename: $filename<br>";
        //echo "extension: $extension<br>";

        move_uploaded_file($image_tmp_name, $destination);
        echo "chegou aqui";
        createImagePost($user_id."/".$filename,$user_id,$new_post['id']);
        //$stmt = $db->prepare('INSERT INTO pollImage VALUES(?, ?)');
        // $stmt->execute(array($poll_id, $source));
    }

}
else{
    echo 'nao entrou';
}


header('Location: ' . $_SERVER['HTTP_REFERER']);