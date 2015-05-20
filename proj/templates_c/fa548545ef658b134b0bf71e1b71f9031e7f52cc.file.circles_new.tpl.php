<?php /* Smarty version Smarty-3.1.15, created on 2015-05-13 12:16:09
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/users/circles_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:892190662554eb94869cb49-95286336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa548545ef658b134b0bf71e1b71f9031e7f52cc' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/users/circles_new.tpl',
      1 => 1431512165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892190662554eb94869cb49-95286336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554eb9486a6256_76903050',
  'variables' => 
  array (
    'user_friends' => 0,
    'friend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554eb9486a6256_76903050')) {function content_554eb9486a6256_76903050($_smarty_tpl) {?><!-- Custom CSS for this page -->
<link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

<div class="panel panel-default circle-group">
    <div class="row row-centered">
        <div class="">
            <div class="panel-body">
                <div class="col-md-12" style="float:left" >

                    <form action="../../actions/circles/create_new_circle.php" method="post">
                        <button type="submit" class="btn btn-primary" style="float:right"> Create </button>
                        <h3>Name:</h3>
                        <input type="text" class="form-control " name="circle_name" placeholder="Enter new circle's name">

                    </form>

                </div>
                <div class="col-md-12" style="float:left">
                    <h3>Members:</h3>
                    <div class="">
                        <ul class="listrap">

                            <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
                                <li>
                                    <div class="listrap-toggle">
                                        <span></span>
                                        <img src="http://lorempixel.com/40/40/people/2" class="img-circle" />
                                    </div>
                                    <strong> <?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
 </strong>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><?php }} ?>
