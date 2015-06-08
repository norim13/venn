<?php
   $password = $_POST['pass'];

    if (strlen($password) == 0) {
       echo json_encode(array('result' => 1));
    }

    $strength = 0;

    //get the length of the password
    $length = strlen($password);

    //check if password is not all lower case
    if(strtolower($password) != $password) {
        $strength += 1;
    }
    
    //heck if password is not all upper case
    if(strtoupper($password) == $password) {
        $strength += 1;
    }

    //check string length is 8 -15 chars
    if($length >= 4 && $length <= 6) {
        $strength += 1;
    }

    //check if lenth is 16 - 35 chars
    if($length >= 7 && $length <=10) {
        $strength += 2;
    }

    //check if length greater than 35 chars
    if($length > 10) {
        $strength += 3;
    }
    
    //get the numbers in the password
    preg_match_all('/[0-9]/', $password, $numbers);
    $strength += count($numbers[0]);

    //check for special chars
    preg_match_all("/[|!@#$%&*\/=?,;.:\-_+~^\\\]/", $password, $specialchars);
    $strength += sizeof($specialchars[0]);

    //get the number of unique chars
    $chars = str_split($password);
    $num_unique_chars = sizeof( array_unique($chars) );
    $strength += $num_unique_chars * 2;

    //strength is a number 1-10;
    $strength = $strength > 99 ? 99 : $strength;
    $strength = floor($strength / 10 + 1);

    echo json_encode(array('result' => intval($strength)));
?>
