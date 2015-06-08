<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 08/06/2015
 * Time: 22:00
 */

include_once '../../config/init.php';

    if(isset($_SESSION['double_scroll']))
        if ($_SESSION['double_scroll'] == 'yes')
            $_SESSION['double_scroll'] = 'no';
        else $_SESSION['double_scroll'] = 'yes';
    else $_SESSION['double_scroll'] = 'yes';
    echo $_SESSION['double_scroll'];
    HEADER('Location: ' . $_SERVER['HTTP_REFERER']);