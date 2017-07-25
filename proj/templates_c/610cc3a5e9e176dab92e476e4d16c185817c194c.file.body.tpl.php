<?php /* Smarty version Smarty-3.1.15, created on 2015-05-08 20:34:20
         compiled from "/opt/lbaw/lbaw1446/public_html/proto/templates/users/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18386296245548fca4d764f0-84960214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '610cc3a5e9e176dab92e476e4d16c185817c194c' => 
    array (
      0 => '/opt/lbaw/lbaw1446/public_html/proto/templates/users/feed.tpl',
      1 => 1431109817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18386296245548fca4d764f0-84960214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5548fca4d8c425_06534414',
  'variables' => 
  array (
    'recent_posts' => 0,
    'post' => 0,
    'userFromID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548fca4d8c425_06534414')) {function content_5548fca4d8c425_06534414($_smarty_tpl) {?><div id="page-wrapper">
    <div class=" col-lg-6 clearfix">
        <h1>People</h1>
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
            <!--publication-->
            <div class="panel panel-default   " id="panel-feed">
                <!-- user's name -->
                <div class="panel-heading ">
                    <img alt="200x200" class="profile-circles img-circle img-responsive"  style="float:left"src="http://lorempixel.com/40/40/people/4">
                    <h4><?php $_smarty_tpl->tpl_vars['userFromID'] = new Smarty_variable(getUserFromID($_smarty_tpl->tpl_vars['post']->value['user_id']), null, 0);?> <?php echo $_smarty_tpl->tpl_vars['userFromID']->value['name'];?>
</h4>
                </div>

                <div class="panel-body"  >
                    <!-- voting section -->
                    <div class="vote-section" >
                        <table style="text-align:center;">
                            <tr>
                                <td><i class="fa fa-sort-asc"></i></td>
                            </tr>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['post']->value['votedifference'];?>
</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-sort-desc"></i></td>
                            </tr>
                        </table>
                    </div>

                    <!-- publication -->
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</p>
                    <p><a href="">#hashtag</a> , <a href="">#venn</a></p> <!-- TODO get tags from post -->
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['url']!=null) {?>
                        <p><a href=<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
><?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
</a></p>
                    <?php }?>
                </div>

                <!--footer-->
                <div class="panel-footer clearfix ">
                    <!-- section with the time and comments button -->
                    <div class="fill-flow">
                        <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
                        <button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
                            <i class="fa fa-comments"></i> Comments
                        </button>
                        <button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
                        <button class="btn btn-default" id="btn-comment"><i class="fa fa-trash-o"></i> Delete</button>
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
        <?php } ?>
    </div>

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
        <div class=" panel panel-default   " id="panel-feed">
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
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
                    <button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    <button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
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
        <div class="panel panel-default   " id="panel-feed">
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
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
                    <button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    <button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
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
        <div class="panel panel-default   " id="panel-feed">
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
                    <a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
                    <button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    <button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
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

</div><?php }} ?>
