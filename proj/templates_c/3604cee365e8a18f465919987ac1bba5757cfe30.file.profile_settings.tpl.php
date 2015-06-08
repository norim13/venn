<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 18:45:11
         compiled from "../../templates/users/profile_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9716760715557a529591747-82373811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3604cee365e8a18f465919987ac1bba5757cfe30' => 
    array (
      0 => '../../templates/users/profile_settings.tpl',
      1 => 1433781884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9716760715557a529591747-82373811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5557a529632776_00518519',
  'variables' => 
  array (
    'profilePicS' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557a529632776_00518519')) {function content_5557a529632776_00518519($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Venn - Settings"), 0);?>


<!-- Custom CSS for this page -->
<link href="../../css/profile.css" rel="stylesheet">

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">

    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row row-centered">
            <div class="col-sm-10">

            </div>


            <div class="col-sm-6 col-md-offset-3">
                <h2 class=""><i class="fa fa-gear"></i> Profile Settings</h2>
                <br>

                <button type="button" class="btn btn-transparent centered" style="marin-left:auto; margin-right:auto" data-toggle="modal" data-target="#myModal">
                    <div class="itemsContainer">
                        <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['profilePicS']->value;?>
" alt="profilePic">
                    </div>
                </button>

                <h1 align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h1>

                <div class="form-group"">
                <form id="new_post_form" action="../../actions/users/profileSet.php" accept-charset="UTF-8" method="POST" >
<div>
                <label>Name:</label><input class="form-control" name="newName" placeholder="Change Name" style="margin-bottom:10px;">


                    <label>New Password:</label><input type="password" class="form-control" name="pass1" placeholder="New Password" style="margin-bottom:10px;">
                    <label>Repeat Password:</label><input type="password" class="form-control" name="pass2" placeholder="Rewrite New Password" style="margin-bottom:10px;">

                    <input type="submit" value="Change" class="pull-right btn btn-info" style="margin-left:10px">


                </form>
            </div>
            </div>
            </div>

        </div>
        <br>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('users/uploadProfilePicModal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
