<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 04:16:07
         compiled from "../../templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145186425549488d326bc8-14187107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f7194394697abbb013f945455d165e5d2e0b7b' => 
    array (
      0 => '../../templates/users/profile.tpl',
      1 => 1433729282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145186425549488d326bc8-14187107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5549488d3cb679_65589756',
  'variables' => 
  array (
    'user' => 0,
    'profilePIC' => 0,
    'numberOfVotes' => 0,
    'numberOfPosts' => 0,
    'numberOfFriends' => 0,
    'user_posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549488d3cb679_65589756')) {function content_5549488d3cb679_65589756($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['user']->value['name']), 0);?>


<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">
    <hr>

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
            <br>
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['signup_date'];?>
</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Gender</strong></span> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="M") {?> Male <i class="fa fa-mars"></i><?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="F") {?> Female <i class="fa fa-venus"></i>
                    <?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value['gender'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="O") {?> Other <i class="fa fa-transgender-alt"></i>
                    <?php }?></li>

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
                <!--publication-->
                <div class="panel panel-default">
                    <div class="panel-body"  >
                        <?php echo $_smarty_tpl->getSubTemplate ('posts/new_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>

                <h2 id="myPostsh2">My posts</h2>

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

<?php echo $_smarty_tpl->getSubTemplate ('users/uploadProfilePicModal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("posts/reportModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
