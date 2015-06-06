<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 16:17:44
         compiled from "../../templates/users/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145186425549488d326bc8-14187107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f7194394697abbb013f945455d165e5d2e0b7b' => 
    array (
      0 => '../../templates/users/profile.tpl',
      1 => 1433600241,
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
    'BASE_URL' => 0,
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


<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <hr class="">
    <!--header profile-->
    <div class="container target">


        <div class="container" id="crop-avatar">

            <!-- Current avatar -->
            <div class="avatar-view" title="Change the avatar">
                <img src="../../cropper-master/examples/crop-avatar/img/picture.jpg" alt="Avatar">
            </div>

            <!-- Cropping modal -->
            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/crop.php" enctype="multipart/form-data" method="post">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal" type="button">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                            </div>
                            <div class="modal-body">
                                <div class="avatar-body">

                                    <!-- Upload image and data -->
                                    <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">Local upload</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    </div>

                                    <!-- Crop and preview -->
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="avatar-preview preview-lg"></div>
                                            <div class="avatar-preview preview-md"></div>
                                            <div class="avatar-preview preview-sm"></div>
                                        </div>
                                    </div>

                                    <div class="row avatar-btns">
                                        <div class="col-md-9">
                                            <div class="btn-group">
                                                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer">
                              <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div><!-- /.modal -->

            <!-- Loading state -->
            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
        </div>



        <div class="row">
            <div class="col-sm-10">
                <h1 class=""><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h1>
                <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile_settings.php'"><i class="fa fa-gear "></i> Settings</button>
                <br>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Change profile pic</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                <!--profile pic-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-transparent" style="background: transparent" data-toggle="modal" data-target="#myModal">
                    <div class=" img-circle">
                        <img title=" image" class="img-circle img-responsive profilePic" src="http://www.rlsandbox.com/img/profile.jpg">
                    </div> </button></div>


        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['signup_date'];?>
</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</li>
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
                <h2 id="myPostsh2">My posts</h2>

                <!--publication-->
                <div class="panel panel-default   ">

                    <div class="panel-body"  >
                        <?php echo $_smarty_tpl->getSubTemplate ('posts/new_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                </div>

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


<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
