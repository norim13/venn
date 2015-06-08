<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';

if($_SESSION['email']) {
    $reports=getReports();
    $smarty->assign('reports', $reports);
    $admin=getAdminFromEmail($_SESSION['email']);
    $smarty->assign('admin', $admin['name']);


    $smarty->display('../../templates/admin/admin.tpl');

}
else {
    $smarty->display('../../templates/users/login_admin.tpl');
}

?>