<?php /* Smarty version Smarty-3.1.15, created on 2015-05-20 12:12:55
         compiled from "../../templates/users/circles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18536193865549162558dcd8-43500815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f095cc3a28ad07c03e05de77f6d4003511c4ac82' => 
    array (
      0 => '../../templates/users/circles.tpl',
      1 => 1431886935,
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
    'userId' => 0,
    'friendsFromCircle' => 0,
    'friend' => 0,
    'user_friend_requests' => 0,
    'friend_request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55491625631474_43906087')) {function content_55491625631474_43906087($_smarty_tpl) {?><!-- Custom CSS for this page -->

<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <div style="inline-box-align">
        <div> <h1> Circles </h1> </div>
        <div class="clearfix">
            <button type="button" class="btn btn-primary" id="btn-newCircle" data-toggle="collapse" data-target="#new_circle" aria-expanded="false" aria-controls="comments"><i class="fa  fa-circle-o "></i> Create Circle
            </button>
        </div>
    </div>

    <div class="panel-headding"></div>

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

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href=""><img alt="300x300" class="img-circle img-responsive"src="http://lorempixel.com/100/100/people"></a>
                            <div class="caption">
                                <h3 class="fill-flow"> <?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
 <br/>
                                    <button class="btn " id="btn-transparent"type="button" data-toggle="collapse" data-target="#circle-members-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" aria-expanded="false" aria-controls="comments">
                                        Show more
                                    </button>
                                </h3>
                                <p>
                                    <button type="button" class="btn btn-edit-circle" data-toggle="collapse" data-target="#edit-menu-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" aria-expanded="false" ><i class="fa fa-gear "></i> Edit</button>
                                    <button type="button" class="btn " id="btn-transparent" >
                                        <i class="fa fa-pencil-square-o "></i> Write to this Circle
                                    </button>
                                </p>
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
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php  $_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['circle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_circles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->key => $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
?>
        <div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
">
            <div class="panel-heading" contenteditable="false">
                <h3> <?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>

                    <button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
                    <button type="button" class="btn " id="btn-transparent" ><i class="fa fa-pencil-square-o "></i> Write to this Circle</button>
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <?php $_smarty_tpl->tpl_vars['friendsFromCircle'] = new Smarty_variable(getFriendsFromCircle($_smarty_tpl->tpl_vars['circle']->value['id'],$_smarty_tpl->tpl_vars['userId']->value), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friendsFromCircle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                        <div class="col-md-1 profile-thumbnail" style="float:left">
                            <img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
                            <p> <?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
 </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div>
        <h1 class="">Friend Requests</h1>
    </div>

    <?php  $_smarty_tpl->tpl_vars['friend_request'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend_request']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_friend_requests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend_request']->key => $_smarty_tpl->tpl_vars['friend_request']->value) {
$_smarty_tpl->tpl_vars['friend_request']->_loop = true;
?>

        <div class="panel panel-default target col-md-12 circle-members" id="friend-members-<?php echo $_smarty_tpl->tpl_vars['friend_request']->value['name'];?>
">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1 profile-thumbnail">
                        <img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
                        <p> <?php echo $_smarty_tpl->tpl_vars['friend_request']->value['name'];?>
 </p>
                        <table  cellpadding="0" cellspacing="0" style="width: 100%; text-align:center" class="col-md-2">
                            <tr>
                                <td><a href="../../actions/circles/accept_friend_request.php?user_id=<?php echo $_smarty_tpl->tpl_vars['friend_request']->value['id'];?>
"><i class="fa fa-check"></i></a></td>
                                <td><a href="../../actions/circles/decline_friend_request.php"><i class="fa fa-times"></i></a></td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div>
        </div>

    <?php } ?>


</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
