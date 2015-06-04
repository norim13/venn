{include file="common/header.tpl" title = {"Venn - Search"}}

{include file="common/navbar.tpl"}

<div id="page-wrapper">
    {if $posts}
        <div class="col-lg-6 clearfix">
            <h1>Search: {$search_string}</h1>
            {foreach $posts as $post}
                {include file="posts/post.tpl"}
            {/foreach}
        </div>
    {else}
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1 class=""><i class="fa fa-exclamation-triangle"></i> No results... </h1>
            <h2 class="text-center"> <a href="{$BASE_URL}">Go back </a></h2>
        </div>
    {/if}
</div>

{include file="common/footer.tpl"}

