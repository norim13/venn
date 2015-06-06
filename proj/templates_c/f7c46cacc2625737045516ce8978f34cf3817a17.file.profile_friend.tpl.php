<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 01:26:53
         compiled from "../../templates/users/profile_friend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1303653800554952f6a41013-64801979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c46cacc2625737045516ce8978f34cf3817a17' => 
    array (
      0 => '../../templates/users/profile_friend.tpl',
      1 => 1433460377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1303653800554952f6a41013-64801979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554952f6adcfa9_51517514',
  'variables' => 
  array (
    'user' => 0,
    'requestSent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554952f6adcfa9_51517514')) {function content_554952f6adcfa9_51517514($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['user']->value['name']), 0);?>


<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">

    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row">
            <div class="col-sm-10" style="margin-bottom:10px">
                <h1 class=""><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['requestSent']->value) {?>
                    <button type="button" class="btn btn-success" id="new_friend_request-btn-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Friend Request Sent</button>
                <?php } else { ?>
                    <button type="button" class="btn btn-success new_friend_request-btn" id="new_friend_request-btn-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Friend Request</button>
                <?php }?>
                <button type="button" class="btn btn-info">Send me a message</button>
                <br>
            </div>

            <div class="col-sm-2">
                <!--profile pic-->
                <img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-3">
                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span><i class="fa fa-eye-slash"></i></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Upvotes</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->

                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">Posts</h2>
                    <!--publication-->
                    <br/>
                    <h3>Send Friend request to see recent posts from <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
