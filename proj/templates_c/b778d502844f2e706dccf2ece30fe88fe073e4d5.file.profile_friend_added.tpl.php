<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 20:34:09
         compiled from "../../templates/users/profile_friend_added.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752829815557a0bfbae873-76587232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b778d502844f2e706dccf2ece30fe88fe073e4d5' => 
    array (
      0 => '../../templates/users/profile_friend_added.tpl',
      1 => 1433615626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752829815557a0bfbae873-76587232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5557a0bfc9ddc0_24766471',
  'variables' => 
  array (
    'user' => 0,
    'numberOfVotes' => 0,
    'numberOfPosts' => 0,
    'numberOfFriends' => 0,
    'user_posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557a0bfc9ddc0_24766471')) {function content_5557a0bfc9ddc0_24766471($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['user']->value['name']), 0);?>


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

                <button id="addToCircleButton" type="button" class="btn btn-success"><i class="fa fa-circle-o"></i> Add to a circle</button>
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
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><a href="" class="remove-friendship-btn" id="remove-friendship-btn-<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><strong class="">Remove me from friends</strong></span> <i class="fa fa-trash-o"></i></a></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Votes</strong></span> <?php echo $_smarty_tpl->tpl_vars['numberOfVotes']->value;?>
</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> <?php echo $_smarty_tpl->tpl_vars['numberOfPosts']->value;?>
</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> <?php echo $_smarty_tpl->tpl_vars['numberOfFriends']->value;?>
</li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->
                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">Posts</h2>
                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("posts/reportModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("users/add_to_circles_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
