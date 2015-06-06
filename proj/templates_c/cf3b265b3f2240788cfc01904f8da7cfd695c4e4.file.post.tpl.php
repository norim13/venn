<?php /* Smarty version Smarty-3.1.15, created on 2015-05-22 13:36:47
         compiled from "/opt/lbaw/***REMOVED***/public_html/proto/templates/posts/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285002808554e5fc82afcd3-31885083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3b265b3f2240788cfc01904f8da7cfd695c4e4' => 
    array (
      0 => '/opt/lbaw/***REMOVED***/public_html/proto/templates/posts/post.tpl',
      1 => 1432294484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285002808554e5fc82afcd3-31885083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554e5fc82fad12_33138131',
  'variables' => 
  array (
    'post' => 0,
    'BASE_URL' => 0,
    'userFromID' => 0,
    'vote' => 0,
    'tags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554e5fc82fad12_33138131')) {function content_554e5fc82fad12_33138131($_smarty_tpl) {?><!--publication-->
<div class="panel panel-default panel-feed" id="panel-feed-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
    <div class="panel-heading ">
        <img alt="200x200" class="profile-circles img-circle img-responsive"  style="float:left"src="http://lorempixel.com/40/40/people/4">
        <h4><?php $_smarty_tpl->tpl_vars['userFromID'] = new Smarty_variable(getUserFromID($_smarty_tpl->tpl_vars['post']->value['user_id']), null, 0);?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?user=<?php echo $_smarty_tpl->tpl_vars['userFromID']->value['hashid'];?>
" style="text-decoration: none; color: inherit"> <?php echo $_smarty_tpl->tpl_vars['userFromID']->value['name'];?>
 </a>
        </h4>
    </div>

    <div class="panel-body"  >
        <!-- voting section -->
        <div class="vote-section" >
            <table style="text-align:center;">
                <?php $_smarty_tpl->tpl_vars['vote'] = new Smarty_variable(getVote($_SESSION['id'],$_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>
                <tr>
                    <td><i id="upvote-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="fa fa-sort-asc upvote-btn"
                           style="<?php if ($_smarty_tpl->tpl_vars['vote']->value['positive']=='1') {?> color:rgb(92,184,92) <?php }?>"}></i></td>
                </tr>
                <tr>
                    <td id="td-votedifference-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['post']->value['votedifference']<0) {?> <i class="fa fa-minus-square-o" style="color:rgb(176, 49, 33)"></i> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['post']->value['votedifference'];?>
 <?php }?> </td>
                </tr>
                <tr>
                    <td><i id="downvote-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="fa fa-sort-desc downvote-btn"
                           style="<?php if ($_smarty_tpl->tpl_vars['vote']->value['positive']=='0') {?> color:rgb(176, 49, 33) <?php }?>"}></i>
                    </td>
                </tr>
            </table>
        </div>

        <!-- publication -->
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</p>
        <?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_variable(getTagNamesFromPost($_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['tags']->value!=null) {?>
            <p>
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/tagview.php?tagname=<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
">#<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a> <?php if (!$_smarty_tpl->tpl_vars['tag']->last) {?> , <?php }?>
                <?php } ?>
            </p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['url']) {?>
            <p><a href=<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
><?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
</a></p>
        <?php }?>
    </div>

    <!--footer-->
    <div class="panel-footer clearfix ">
        <!-- section with the time and comments button -->
        <div class="fill-flow">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/single_post.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['start_date']) {?> <?php echo $_smarty_tpl->tpl_vars['post']->value['start_date'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
 <?php }?> </a>
            <button class="btn btn-default btn-comments" id="btn-comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" type="button" data-toggle="collapse" data-target="#comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" aria-expanded="false" aria-controls="comments">
                <i class="fa fa-comments"></i> Comments
            </button>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id']!=$_SESSION['id']) {?>
                <button class="btn btn-default btn-repost" id="btn-repost-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa fa-retweet"></i> Repost</button>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id']==$_SESSION['id']) {?>
                <button class="btn btn-default btn-delete" id="btn-delete-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa fa-trash-o"></i> Delete</button>
            <?php }?>
        </div>

        <!-- comment section-->
        <div class="collapse" id="comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
            <div class="col-lg-20" id="comments_section" >
                <h4>Comments</h4>
                <!-- this area is shown with ajax -->
                <div class="input-group commentform" id="commentform-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                    <textarea placeholder="Type comment" class="form-control" rows="1" style="resize:none"></textarea>
                    <span class="input-group-addon btn btn-primary btn-comment">Comment</span>
                    <div id="error_message"></div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
