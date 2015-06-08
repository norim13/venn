<?php

include_once('../../config/init.php');
include_once('../../database/admin.php');

if (!$_POST['report_id']) {
    header('Location: ' . '../../pages/admin/main_panel.php');
    exit;
}

$report_id=htmlspecialchars($_POST['report_id']);

changeReportState($report_id);

header('Location: ' . '../../pages/admin/main_panel.php');
exit;