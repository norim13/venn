<?php /* Smarty version Smarty-3.1.15, created on 2015-05-05 23:09:22
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23817936855493182b5e8f3-42080271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f8595d9718805ea453417aa2b4042b61c6f92b' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/common/sidebar.tpl',
      1 => 1430859968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23817936855493182b5e8f3-42080271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55493182b73bf5_25190126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55493182b73bf5_25190126')) {function content_55493182b73bf5_25190126($_smarty_tpl) {?><div  id="sidebar" class="sidebar sidebar-collapse" role="navigation">
    <div class="sidebar-ul" >
        <div id="search-toggle" class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <!--<a href="index.php">-->
                    <i class="fa fa-search fa-2x button-toggle-grey" ></i>
                    <p class="button-toggle-grey"> Search </p>
                    <!--</a>-->
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">

                        <i class="fa fa-home fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Home </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">
                        <i class="fa fa-user fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Profile </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/circles.php">
                        <i class="fa fa-circle-thin fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Circles </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>
    </div>

    <div id="search-field" class="search-field">
        <input type="text" name="search">
        <button id="search-btn" type="button" class="btn">Search</button>
    </div>
</div><?php }} ?>
