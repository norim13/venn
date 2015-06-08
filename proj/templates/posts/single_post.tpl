{include file="common/header.tpl" title="Venn - Post"}

{include file="common/navbar.tpl"}

<div id="page-wrapper">
    {if $post}
        {include file="posts/post.tpl"}
    {else}
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1><i class="fa fa-exclamation-triangle"></i> Error, there is no post with that id! </h1>
            <h2 class="text-center"> <a href="{$BASE_URL}"> Go back </a></h2>
        </div>
    {/if}
</div>

{include file="posts/reportModal.tpl"}

{include file="posts/voteModal.tpl"}

{include file='posts/edit_post_modal.tpl'}

{include file="common/footer.tpl"}

<script>
    $('.btn-comments').click();
</script>