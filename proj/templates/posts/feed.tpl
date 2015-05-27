{include file="common/header.tpl" title="Venn - Feed"}

{include file="common/navbar.tpl"}

<div id="page-wrapper">
    <div class=" col-lg-6 clearfix">
        <h1>People</h1>
        {foreach $recent_posts as $post}
            {include file="posts/post.tpl"}
        {/foreach}
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
                        {if $post.start_date} {$post.start_date} {else} {$post.post_date} {/if} </a>
                    <button class="btn btn-default btn-comments" id="btn-comments-{$post.id}" type="button" data-toggle="collapse" data-target="#comments-{$post.id}" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    {if $post.user_id != $smarty.session.id}
                        <button class="btn btn-default btn-repost" id="btn-repost-{$post.id}"><i class="fa fa-retweet"></i> Repost</button>
                    {/if}
                    {if $post.user_id == $smarty.session.id}
                        <button class="btn btn-default btn-delete" id="btn-delete-{$post.id}"><i class="fa fa-trash-o"></i> Delete</button>
                    {/if}
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
                        {if $post.start_date} {$post.start_date} {else} {$post.post_date} {/if} </a>
                    <button class="btn btn-default btn-comments" id="btn-comments-{$post.id}" type="button" data-toggle="collapse" data-target="#comments-{$post.id}" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    {if $post.user_id != $smarty.session.id}
                        <button class="btn btn-default btn-repost" id="btn-repost-{$post.id}"><i class="fa fa-retweet"></i> Repost</button>
                    {/if}
                    {if $post.user_id == $smarty.session.id}
                        <button class="btn btn-default btn-delete" id="btn-delete-{$post.id}"><i class="fa fa-trash-o"></i> Delete</button>
                    {/if}
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
                        {if $post.start_date} {$post.start_date} {else} {$post.post_date} {/if} </a>
                    <button class="btn btn-default btn-comments" id="btn-comments-{$post.id}" type="button" data-toggle="collapse" data-target="#comments-{$post.id}" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                    {if $post.user_id != $smarty.session.id}
                        <button class="btn btn-default btn-repost" id="btn-repost-{$post.id}"><i class="fa fa-retweet"></i> Repost</button>
                    {/if}
                    {if $post.user_id == $smarty.session.id}
                        <button class="btn btn-default btn-delete" id="btn-delete-{$post.id}"><i class="fa fa-trash-o"></i> Delete</button>
                    {/if}
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

{include file="common/footer.tpl"}

