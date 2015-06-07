{include file="common/header.tpl" title = {"Venn - Search"}}

{include file="common/navbar.tpl"}

<div id="page-wrapper">
    {if $users}
        <div class="col-lg-6 clearfix">
            <h1>Search: {$search_string}</h1>
            {foreach $users as $user}
                <div class="col-md-6 profile-thumbnail">
                    {$imagePath=getProfilePic($user.id)}
                    <a href="{$BASE_URL}pages/users/profile.php?user={$user.hashid}" style="text-decoration: none; color: inherit">
                        <img class="profilePic" width="80" height="80" style="border-radius:50%" src="../../images/users/{$imagePath}" alt="profilePic">
                        <strong>{$user.name}<strong>
                    </a>
                </div>
            {/foreach}
        </div>
    {else}
        <div class="panel col-lg-8 clearfix col-md-offset-2" style="margin-top:40px" >
            <h1 class=""><i class="fa fa-exclamation-triangle"></i> No results... </h1>
            <h2 class="text-center"> <a href="{$BASE_URL}">Go back </a></h2>
        </div>
    {/if}
</div>

{include file="posts/reportModal.tpl"}

{include file="posts/voteModal.tpl"}

{include file="common/footer.tpl"}

