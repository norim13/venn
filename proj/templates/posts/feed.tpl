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
    <div class="col-lg-6 clearfix">
        <h1>Circles
            <div class="dropdown pull-right" id="select-circles-feed">
                <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-form pull-right">
                        {counter start=0 skip=1 print=false}
                        {$n = {counter}}
                        <li><input id="circle-0-{$n}" class="right-circle-checkbox" name="visibility[]" value="0" type="checkbox"><label for="circle-public-{$n}">All</label></li>
                        {foreach $user_circles as $circle}
                            {$n = {counter}}
                            <li><input id="circle-{$circle.id}-{$n}" class="right-circle-checkbox" name="visibility[]" value="{$circle.id}" type="checkbox"><label for="circle-{$circle.id}-{$n}">{$circle.name}</label></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </h1>

        <!--publication-->
        {$isRightFeed = true}
        {foreach $circles_posts as $user_in_circle}
            {foreach $user_in_circle as $post}
                {include file="posts/post.tpl"}
            {/foreach}
        {/foreach}
    </div>
</div>


{include file="posts/reportModal.tpl"}

{include file="posts/voteModal.tpl"}

{include file="common/footer.tpl"}


