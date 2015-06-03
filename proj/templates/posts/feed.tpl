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
                        {foreach $user_circles as $circle}
                            <li><input id="ex3_1" name="ex3" value="1" type="checkbox"><label for="ex3_1">{$circle.name}</label></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </h1>

        <!--publication-->
        {foreach $circles_posts as $user_in_circle}
            {foreach $user_in_circle as $post}
                {include file="posts/post.tpl"}
            {/foreach}
        {/foreach}

        <!-- /.row -->
    </div>
</div>

{include file="posts/voteModal.tpl"}

{include file="common/footer.tpl"}

