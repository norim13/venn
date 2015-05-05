<?php /* Smarty version Smarty-3.1.15, created on 2015-05-05 19:54:46
         compiled from "../../templates/users/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2069286647554902c42894e2-96786545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '885314c4399c3caad3ef452817c0f201016ed1c9' => 
    array (
      0 => '../../templates/users/home.tpl',
      1 => 1430848480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2069286647554902c42894e2-96786545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554902c4330cd8_42145305',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554902c4330cd8_42145305')) {function content_554902c4330cd8_42145305($_smarty_tpl) {?><!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

 <?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<link href="../../css/home.css" rel="stylesheet">
</head>
<body>
  <div class="header vert">
    <div class="container">
      <a href="#sec1" class="btn btn-default btn-lg">Log In</a>
    </div>
  </div>

  <?php echo $_smarty_tpl->getSubTemplate ('users/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div class="featurette" id="sec2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Amazing Features</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-3 text-center">
          <div class="featurette-item">
            <i class="fa fa-circle-o"></i>
            <h4>Friend Circles</h4>
            <p>Categorize your friends by circles.</p>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <div class="featurette-item">
            <i class="fa fa-lock"></i>
            <h4>Custom Privacy</h4>
            <p>Set custom post privacy.</p>
          </div>
        </div>
        <div class="col-md-2 text-center">
          <div class="featurette-item">
            <i class="fa fa-clock-o "></i>
            <h4>Scheduled Posts</h4>
            <p>Set beginning and expiration dates for your posts.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>


<?php echo $_smarty_tpl->getSubTemplate ('users/register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




  

<?php }} ?>
