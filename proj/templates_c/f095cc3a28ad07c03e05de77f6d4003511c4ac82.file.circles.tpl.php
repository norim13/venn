<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 20:38:22
         compiled from "../../templates/users/circles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18536193865549162558dcd8-43500815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f095cc3a28ad07c03e05de77f6d4003511c4ac82' => 
    array (
      0 => '../../templates/users/circles.tpl',
      1 => 1433788699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18536193865549162558dcd8-43500815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55491625631474_43906087',
  'variables' => 
  array (
    'user_circles' => 0,
    'circle' => 0,
    'imagePath' => 0,
    'userId' => 0,
    'friendsFromCircle' => 0,
    'friend' => 0,
    'BASE_URL' => 0,
    'user_friend_requests' => 0,
    'friend_request' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55491625631474_43906087')) {function content_55491625631474_43906087($_smarty_tpl) {?><!-- Custom CSS for this page -->

<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'Venn - Circles'), 0);?>


<link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <div style="inline-box-align">
        <div> <h1> Circles </h1> </div>
        <div class="clearfix">
            <button type="button" class="btn btn-primary" id="btn-friendsList" data-toggle="collapse" data-target="#friendsList" aria-expanded="false" aria-controls="comments"><i class="fa fa-users"></i> Friends
            </button>
            <button type="button" class="btn btn-primary" id="btn-newCircle" data-toggle="collapse" data-target="#new_circle" aria-expanded="false" aria-controls="comments"><i class="fa fa-circle-o "></i> Create Circle
            </button>
        </div>
    </div>

    <div class="panel-heading"></div>

    <div id="new_circle" class="collapse">  <?php echo $_smarty_tpl->getSubTemplate ('users/circles_new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>

    <div class="panel panel-default target circle-group">
        <div class="panel-body">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_variable(getPathImageFromID($_smarty_tpl->tpl_vars['circle']->value['img_id']), null, 0);?>
                            <a href=""><img alt="circleImage" class="img-circle img-responsive" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value['path'];?>
"></a>
                            <div class="caption">
                                <h3 class="fill-flow"> <?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
 <br/>
                                    <button class="btn" id="btn-transparent" type="button" data-toggle="collapse" data-target="#circle-members-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" aria-expanded="false" aria-controls="comments">
                                        Show more
                                    </button>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Circles -->
    <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
        <div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
">
            <div class="panel-heading" contenteditable="false">
                <h3> <?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>

                    <button type="button" class="btn btn-edit-circle" data-toggle="collapse" data-target="#edit-menu-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" aria-expanded="false"><i class="fa fa-gear "></i> Edit</button>
                </h3>
                <div id="edit-menu-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" class="caption collapse">
                    <form action="../../actions/circles/rename_circle.php" method="post">
                        <input type="text" class="form-control " name="circle_rename" placeholder="Enter new name">
                        <input type="hidden" name="circle_id" value="<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" />
                        <button type="submit" class="btn btn-primary" style="float:right"> Rename </button>
                    </form>
                    <p>
                        <a href="../../actions/circles/delete_circle.php?circle_id=<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
"><i class="fa fa-trash"></i></a> Delete this circle</td>
                    </p>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <?php $_smarty_tpl->tpl_vars['friendsFromCircle'] = new Smarty_variable(getFriendsFromCircle($_smarty_tpl->tpl_vars['circle']->value['id'],$_smarty_tpl->tpl_vars['userId']->value), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendsFromCircle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_variable(getPathImageFromID($_smarty_tpl->tpl_vars['friend']->value['profilepic_id']), null, 0);?>
                        <div class="col-md-2 profile-thumbnail" style="display:flex;justify-content:center;align-items:center;">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?user=<?php echo $_smarty_tpl->tpl_vars['friend']->value['hashid'];?>
" style="text-decoration: none; color: inherit">
                                <!--<img class="profile-circles img-circle img-responsive" width="80" height="80" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value['path'];?>
" alt="profilePic">-->
                                <img class="profilePic" width="80" height="80" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value['path'];?>
" alt="profilePic">
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
<strong></p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div>
        <h1>Friend Requests</h1>
    </div>

    <div class="panel panel-default target col-md-12">
        <div class="panel-body">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['friend_request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend_request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_friend_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend_request']->key => $_smarty_tpl->tpl_vars['friend_request']->value) {
$_smarty_tpl->tpl_vars['friend_request']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['username'] = new Smarty_variable(getUserFromID($_smarty_tpl->tpl_vars['friend_request']->value['requestedBy_id']), null, 0);?>
                    <div class="col-md-1 profile-thumbnail friendship-request-panel" width="inherit" id="friendship-request-panel-<?php echo $_smarty_tpl->tpl_vars['username']->value['id'];?>
" style="display:flex;justify-content:center;align-items:center;">
                        <?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_variable(getProfilePic($_smarty_tpl->tpl_vars['friend_request']->value['requestedBy_id']), null, 0);?>
                        <div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?user=<?php echo $_smarty_tpl->tpl_vars['username']->value['hashid'];?>
" style="text-decoration: none; color: inherit">
                                <div>
                                    <img class="profilePic" width="80" height="80" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
" alt="profilePic">
                                    <p><?php echo $_smarty_tpl->tpl_vars['username']->value['name'];?>
</p>
                                </div>
                            </a>

                            <table cellpadding="0" cellspacing="0" style="width: 100%; text-align:center" class="col-md-2">
                                <tr>
                                    <td><a class="accept_friend_request" id="accept_friend_request-<?php echo $_smarty_tpl->tpl_vars['friend_request']->value['requestedBy_id'];?>
"><i class="fa fa-check"></i></a></td>
                                    <td><a class="decline_friend_request" id="decline_friend_request-<?php echo $_smarty_tpl->tpl_vars['friend_request']->value['requestedBy_id'];?>
"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('users/circles_friends_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
