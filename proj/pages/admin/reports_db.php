<?php

include_once '../../config/init.php';
include_once '../../database/admin.php';

if($_SESSION['admin']) {

    $reports = getReports();

    $smarty->assign('reports', $reports);


    $smarty->display('../../templates/admin/database_reports.tpl');

}
?>