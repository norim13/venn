<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 19:06:23
         compiled from "../../templates/users/profile_friend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1303653800554952f6a41013-64801979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c46cacc2625737045516ce8978f34cf3817a17' => 
    array (
      0 => '../../templates/users/profile_friend.tpl',
      1 => 1433696759,
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
    'profilePIC' => 0,
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

            <div class="col-sm-3">
                <!-- Modal -->
                <!--profile pic-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-transparent centered" style="marin-left:auto; margin-right:auto" data-toggle="modal" data-target="#myModal">
                    <div class="itemsContainer">
                        <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['profilePIC']->value['path'];?>
" alt="profilePic">
                    </div>
                </button>
                <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h1>

                <?php if ($_smarty_tpl->tpl_vars['requestSent']->value) {?>
                    <button type="button" class="btn btn-success centered" id="new_friend_request-btn-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Friend Request Sent</button>
                <?php } else { ?>
                    <button type="button" class="btn btn-success new_friend_request-btn centered" id="new_friend_request-btn-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Friend Request</button>
                <?php }?>
                <br>



                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Votes</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
            </div>
            <div class="col-sm-9" contenteditable="false" style="">
                <div class=" col-lg-12 clearfix">
                    <br><br>
                    <h1>Send a Friend Request to <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 to see new posts.</h1>
                    </div>
            </div>
        <br>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
