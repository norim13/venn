<!-- Custom CSS for this page -->

{include file='common/header.tpl' title='Venn - Circles'}

<link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

{include file='common/navbar.tpl'}
<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <div style="inline-box-align">
        <div> <h1> Circles </h1> </div>
        <div class="clearfix">
            <button type="button" class="btn btn-primary" id="btn-friendsList" data-toggle="collapse" data-target="#friendsList" aria-expanded="false" aria-controls="comments"><i class="fa fa-users"></i> Friends
            </button>
            <button type="button" class="btn btn-primary" id="btn-newCircle" data-toggle="collapse" data-target="#new_circle" aria-expanded="false" aria-controls="comments"><i class="fa fa-circle-o "></i> Create Circle
            </button>
        </div>
    </div>

    <div class="panel-heading"></div>

    <div id="new_circle" class="collapse">  {include file='users/circles_new.tpl'} </div>

    <div class="panel panel-default target circle-group">
        <div class="panel-body">
            <div class="row">

                {foreach $user_circles as $circle}
                    <div class="col-md-2">
                        <div class="thumbnail">
                            {$imagePath=getPathImageFromID($circle.img_id)}
                            <a href=""><img alt="circleImage" class="img-circle img-responsive" src="../../images/users/{$imagePath.path}"></a>
                            <div class="caption">
                                <h3 class="fill-flow"> {$circle.name} <br/>
                                    <button class="btn" id="btn-transparent" type="button" data-toggle="collapse" data-target="#circle-members-{$circle.id}" aria-expanded="false" aria-controls="comments">
                                        Show more
                                    </button>
                                </h3>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>

    <!-- Circles -->
    {foreach $user_circles as $circle}
        <div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members-{$circle.id}">
            <div class="panel-heading" contenteditable="false">
                <h3> {$circle.name}
                    <button type="button" class="btn btn-edit-circle" data-toggle="collapse" data-target="#edit-menu-{$circle.id}" aria-expanded="false"><i class="fa fa-gear "></i> Edit</button>
                </h3>
                <div id="edit-menu-{$circle.id}" class="caption collapse">
                    <form action="../../actions/circles/rename_circle.php" method="post">
                        <input type="text" class="form-control " name="circle_rename" placeholder="Enter new name">
                        <input type="hidden" name="circle_id" value="{$circle.id}" />
                        <button type="submit" class="btn btn-primary" style="float:right"> Rename </button>
                    </form>
                    <p>
                        <a href="../../actions/circles/delete_circle.php?circle_id={$circle.id}"><i class="fa fa-trash"></i></a> Delete this circle</td>
                    </p>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    {$friendsFromCircle=getFriendsFromCircle($circle.id,$userId) }
                    {foreach $friendsFromCircle as $friend}
                        {$imagePath=getPathImageFromID($friend.profilepic_id)}
                        <div class="col-md-1 profile-thumbnail" style="float:left">
                            <img alt="200x200" class="profile-circles img-circle img-responsive" src="../../images/users/{$imagePath.path}">
                            <p> {$friend.name} </p>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    {/foreach}

    <div>
        <h1>Friend Requests</h1>
    </div>

    {foreach $user_friend_requests as $friend_request}
        {$username = getUserFromID($friend_request.requestedBy_id)}
        <div class="panel panel-default target col-md-12 friendship-request-panel" id="friendship-request-panel-{$username.id}">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1 profile-thumbnail">
                        {$imagePath=getProfilePic($friend_request.requestedBy_id)}
                        <a href="{$BASE_URL}pages/users/profile.php?user={$userFromID.hashid}" style="text-decoration: none; color: inherit">
                            <img class="profilePic" width="40" height="40" style="border-radius:50%" src="../../images/users/{$imagePath}" alt="profilePic">
                            {$userFromID.name}
                        </a>
                        <table cellpadding="0" cellspacing="0" style="width: 100%; text-align:center" class="col-md-2">
                            <tr>
                                <td><a class="accept_friend_request" id="accept_friend_request-{$friend_request.requestedBy_id}"><i class="fa fa-check"></i></a></td>
                                <td><a class="decline_friend_request" id="decline_friend_request-{$friend_request.requestedBy_id}"><i class="fa fa-times"></i></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
</div>

{include file='users/circles_friends_modal.tpl'}
{include file='common/footer.tpl'}
