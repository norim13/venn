<?php /* Smarty version Smarty-3.1.15, created on 2015-05-16 22:50:55
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/posts/new_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1450046526554d0ab7e67e22-32365085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5332bdf59a6c802334d3356f655932a533e1c898' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/posts/new_post.tpl',
      1 => 1431808329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1450046526554d0ab7e67e22-32365085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554d0ab7e6cd38_10230863',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554d0ab7e6cd38_10230863')) {function content_554d0ab7e6cd38_10230863($_smarty_tpl) {?>
<form accept-charset="UTF-8" action="../../actions/post/new_post.php" method="POST">

    <textarea class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;">
    </textarea>

    Url: <input class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">

    Tags: <input class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">

    <!--class="pull-right btn btn-info"-->
    <input type="submit" value="Post" class=" btn btn-info" style="margin-left:10px">

    <h6 class="pull-right" id="counter">600 characters remaining   </h6>
    <button class="btn btn-default" id="clock-panel"type=""><i class="fa fa-picture-o"></i>  Upload Photo</button>
    <button class="btn btn-default" id="clock-panel"type=""><i class="fa fa-clock-o"></i>  Set timer</button>

    <div class="dropdown">
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-form">
                <li><input id="ex3_1" name="ex3" value="1" type="checkbox"><label for="ex3_1">FEUP</label></li>
                <li><input id="ex3_2" name="ex3" value="2" type="checkbox"><label for="ex3_2">Family</label></li>
                <li><input id="ex3_3" name="ex3" value="3" type="checkbox"><label for="ex3_3">Best friends</label></li>
                <li><input id="ex3_4" name="ex3" value="4" type="checkbox"><label for="ex3_4">Football friends</label></li>
                <li><input id="ex3_5" name="ex3" value="5" type="checkbox"><label for="ex3_5">Public</label></li>
            </ul>
        </div>
    </div>
</form><?php }} ?>
