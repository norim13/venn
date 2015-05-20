<?php
include_once '../../config/init.php';

if($_SESSION['email']) {
    $smarty->display('../../templates/users/profile_settings.tpl');
}
else
    header('Location: ' . $BASE_URL . 'pages/home/home.php');