<?php

include_once('../../config/init.php');
include_once('../../database/users.php');

if(isset($_GET['codePw'])) {

    $code = htmlspecialchars($_GET['codePw']);

    if(codeInReset($code)) {
        removeTempCode($code);
        $smarty->display('../../templates/users/reset_password_form.tpl');
    }
    else header('Location: ' . $BASE_URL);
}
else {
    header('Location: ' . $BASE_URL);
}


?>

