<?php /* Smarty version Smarty-3.1.15, created on 2015-05-16 23:18:46
         compiled from "../../templates/posts/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12932900205548fadd4c4b37-22897546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d04a8ee31c59f04881707dbcc14fd15f66bcce' => 
    array (
      0 => '../../templates/posts/feed.tpl',
      1 => 1431811114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12932900205548fadd4c4b37-22897546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5548fadd55e876_03005966',
  'variables' => 
  array (
    'recent_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548fadd55e876_03005966')) {function content_5548fadd55e876_03005966($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-wrapper">
    <div class=" col-lg-6 clearfix">
        <h1>People</h1>
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
    </div>

    <!-- right column -->
    <div class=" col-lg-6 clearfix">
        <h1>Circles
            <div class="dropdown" style="float:right">
                <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Circles <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-form">
                        <li><input id="ex3_1" name="ex3" value="1" type="checkbox"><label for="ex3_1">FEUP</label></li>
                        <li><input id="ex3_2" name="ex3" value="2" type="checkbox"><label for="ex3_2">Family</label></li>
                        <li><input id="ex3_3" name="ex3" value="3" type="checkbox"><label for="ex3_3">Best friends</label></li>
                        <li><input id="ex3_4" name="ex3" value="4" type="checkbox"><label for="ex3_4">Football friends</label></li>
                        <li><input id="ex3_5" name="ex3" value="5" type="checkbox"><label for="ex3_5">Public</label></li>
                    </ul>
                </div>
            </div>
        </h1>
        <!--publication-->
        <div class="panel panel-default panel-feed" id="panel-feed">
            <!-- user's name -->
            <div class="panel-heading ">
                <img alt="200x200" class="profile-circles img-circle img-responsive"  style="float:left"src="http://lorempixel.com/40/40/people/9">
                <h4>Joana</h4>
            </div>

            <div class="panel-body"  >
                <!-- voting section -->
                <div class="vote-section" >
                    <table style="text-align:center;">
                        <tr>
                            <td><i class="fa fa-sort-asc"></i></td>
                        </tr>
                        <tr>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-sort-desc"></i></td>
                        </tr>
                    </table>
                </div>

                <!-- publication -->
                <p>Eux maudite pendant eparses ces facteur general ans legumes. Habitent ete fillette continue cantines galopent ils ces.
                    Nos rouge passa rirez roidi soirs dur foi peu temps. Le diables un dragons xv grosses dessert se. Pressent lui des precieux lampions.
                    Instrument eu maintenant gouverneur et claquaient oh boulevards ca. Cime hors tard des agit face vif bout. Jeterent au il je pressent
                    derriere preparer.</p>
                <p><a href="">#hashtag</a> , <a href="">#venn</a></p>
            </div>

            <!--footer-->
            <div class="panel-footer clearfix ">
                <!-- section with the time and comments button -->
                <div class="fill-flow">
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i>
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
                <div class="collapse" id="comments">
                    <div class="col-lg-20" id="comments_section" >
                        <h4>Comments</h4>
                        (....)
                        <br>
                        <br>
                        <!-- write a comment -->
                        <div class="input-group">
                            <textarea class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary">Send</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--publication-->
        <div class="panel panel-default panel-feed" id="panel-feed">
            <!-- user's name -->
            <div class="panel-heading ">
                <img alt="200x200" class="profile-circles img-circle img-responsive"  style="float:left"src="http://lorempixel.com/40/40/people/6">
                <h4>Beatriz</h4>
            </div>

            <div class="panel-body"  >
                <!-- voting section -->
                <div class="vote-section" >
                    <table style="text-align:center;">
                        <tr>
                            <td><i class="fa fa-sort-asc"></i></td>
                        </tr>
                        <tr>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-sort-desc"></i></td>
                        </tr>
                    </table>
                </div>

                <!-- publication -->
                <p>Eux maudite pendant eparses ces facteur general ans legumes. Habitent ete fillette continue cantines galopent ils ces.
                    Nos rouge passa rirez </p>
            </div>

            <!--footer-->
            <div class="panel-footer clearfix ">
                <!-- section with the time and comments button -->
                <div class="fill-flow">
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i>
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
                <div class="collapse" id="comments">
                    <div class="col-lg-20" id="comments_section" >
                        <h4>Comments</h4>
                        (....)
                        <br>
                        <br>
                        <!-- write a comment -->
                        <div class="input-group">
                            <textarea class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary">Send</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--publication-->
        <div class="panel panel-default panel-feed" id="panel-feed">
            <!-- user's name -->
            <div class="panel-heading ">
                <img alt="200x200" class="profile-circles img-circle img-responsive"  style="float:left"src="http://lorempixel.com/40/40/people/7">
                <h4>André</h4>
            </div>

            <div class="panel-body"  >
                <!-- voting section -->
                <div class="vote-section" >
                    <table style="text-align:center;">
                        <tr>
                            <td><i class="fa fa-sort-asc"></i></td>
                        </tr>
                        <tr>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-sort-desc"></i></td>
                        </tr>
                    </table>
                </div>

                <!-- publication -->
                <p>Eux maudite pendant eparses ces facteur </p>
            </div>

            <!--footer-->
            <div class="panel-footer clearfix ">
                <!-- section with the time and comments button -->
                <div class="fill-flow">
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i>
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
                <div class="collapse" id="comments">
                    <div class="col-lg-20" id="comments_section" >
                        <h4>Comments</h4>
                        (....)
                        <br>
                        <br>
                        <!-- write a comment -->
                        <div class="input-group">
                            <textarea class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary">Send</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
