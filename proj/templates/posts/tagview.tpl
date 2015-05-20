{include file="common/header.tpl"}

{include file="common/navbar.tpl"}

<div id="page-wrapper">
    {if $tagposts}
        <div class=" col-lg-6 clearfix">
            <h1>{$tagname}</h1>
            {foreach $tagposts as $post}
                {include file="posts/post.tpl"}
            {/foreach}
        </div>
    {else}
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1 class=""><i class="fa fa-exclamation-triangle"></i> Error, there are no posts with that tag! </h1>
            <h2 class="text-center"> <a href="{$BASE_URL}">Go back </a></h2>
        </div>
    {/if}
</div>

{include file="common/footer.tpl"}

