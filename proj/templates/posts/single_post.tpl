{include file="common/header.tpl"}

{include file="common/navbar.tpl"}

<div id="page-wrapper">

    {if $post}
        {include file="posts/post.tpl"}
    {else}
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1 class=""><i class="fa fa-exclamation-triangle"></i> Error, there is no post with that id! </h1>
            <h2 class="text-center"> <a href="{$BASE_URL}"> Go back </a></h2>
        </div>
    {/if}
</div>

{include file="common/footer.tpl"}
