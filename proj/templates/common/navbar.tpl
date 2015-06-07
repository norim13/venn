<link href="../../css/navbar.css" rel="stylesheet">

<link href="../../css/sidebar.css" rel="stylesheet">

<!-- Navigation -->
<nav id="navbar" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" id="navbar-toggle-black" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
        </button>
        <a class="navbar-brand" id="navbar-brand-white" href="{$BASE_URL}">Venn</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle dropdown-toggle-white" data-toggle="dropdown" href="#">
                <i class="fa fa-users fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            {if $friendRequests}
                <ul class="dropdown-menu dropdown-messages">
                    {foreach $friendRequests as $friendRequest}
                        <li>
                            <div>
                                {$username = getUserFromID($friendRequest.requestedBy_id)}
                                <strong class="pull-right text-muted" style="margin-right:10px "> <em>{$friendRequest.date}</em></strong>

                                {$imagePath=getProfilePic($username.id)}
                                <h4>
                                    <a href="{$BASE_URL}pages/users/profile.php?user={$username.hashid}" style="text-decoration: none; color: inherit">
                                        <img class="profilePic" width="40" height="40" style="border-radius:50%" src="../../images/users/{$imagePath}" alt="profilePic">
                                        {$username.name}
                                    </a>
                                </h4>
                            </div>

                            <div>
                                <a href="" class="accept_friend_request" id="accept_friend_request-{$friendRequest.requestedBy_id}"> <span class="text-muted"> <i class="fa fa-check"></i> Accept </span></a>
                                <a href="" class="decline_friend_request" id="decline_friend_request-{$friendRequest.requestedBy_id}"><span class="text-muted"> <i class="fa fa-times"></i> Decline </span></a>
                            </div>

                        </li>
                        <li class="divider"></li>
                    {/foreach}
                </ul>
            {/if}
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->

        <li class="dropdown">
            <a class="dropdown-toggle dropdown-toggle-white" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{$BASE_URL}pages/users/profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="{$BASE_URL}pages/users/profile_settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{$BASE_URL}actions/users/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
</nav>

{include file='./sidebar.tpl'}