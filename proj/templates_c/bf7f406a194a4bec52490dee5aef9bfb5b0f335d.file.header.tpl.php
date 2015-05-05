<?php /* Smarty version Smarty-3.1.15, created on 2015-05-05 23:15:12
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756898544553fd88bed9fa4-22254726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7f406a194a4bec52490dee5aef9bfb5b0f335d' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/common/header.tpl',
      1 => 1430860503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756898544553fd88bed9fa4-22254726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553fd88c00f393_62494729',
  'variables' => 
  array (
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd88c00f393_62494729')) {function content_553fd88c00f393_62494729($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/assets/logo.ico">

    <title>Venn</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->    

    <!-- MetisMenu CSS -->
    <link href="../../assets/frameworks/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../../assets/frameworks/timeline.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/frameworks/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/frameworks/sb-admin-2.css" rel="stylesheet">

    <link href="../../css/body.css" rel="stylesheet">

    <link href="../../css/footer.css" rel="stylesheet">

    <link href="../../css/pannels.css" rel="stylesheet">

    <link href="../../assets/frameworks/animate.css" rel="stylesheet">

    <link href="../../assets/frameworks/bootstrap/css/dropdowns-enhancement.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">-->
    <link href="../../assets/frameworks/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
        <?php }} ?>
