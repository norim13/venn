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
                    <div class="col-md-2 profile-thumbnail" style="display:flex;justify-content:center;align-items:center;">
                        <div class="">
                            {$imagePath=getPathImageFromID($circle.img_id)}
                            <a href="">
                                <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/{$imagePath.path}" alt="profilePic">

                            </a>
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
                    <div>
                    <form action="../../actions/circles/rename_circle.php" class="form-inline" method="post">

                        <div class="form-group">
                            <input class="form-control" id="appendedInputButton" type="text"  name="circle_rename" placeholder="Enter new name">
                            <button class="btn btn-primary" type="submit">Rename</button>
                        </div>
                        <input type="hidden" name="circle_id" value="{$circle.id}" />
                    </form>
                </div>
                    <div>
                    <form accept-charset="UTF-8" action="../../actions/circles/new_circle_pic.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="circle_id" value="{$circle.id}" />

                        <input type="submit" value="Change Pic" class=" btn btn-info" style="margin-left:10px">
                        <div class=" fileinput fileinput-new" data-provides="fileinput" style="display: inline">
                            <span class="btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-picture-o"></i>  Upload Photo</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                    </form>
                </div>



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
                        <div class="col-md-2 profile-thumbnail" style="display:flex;justify-content:center;align-items:center;">
                            <a href="{$BASE_URL}pages/users/profile.php?user={$friend.hashid}" style="text-decoration: none; color: inherit">
                                <img class="profilePic" width="80" height="80" style="border-radius:50%" src="../../images/users/{$imagePath.path}" alt="profilePic">
                                <p><strong>{$friend.name}<strong></p>
                            </a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    {/foreach}

    <div>
        <h1>Friend Requests</h1>
    </div>

    <div class="panel panel-default target col-md-12">
        <div class="panel-body">
            <div class="row">
                {foreach $user_friend_requests as $friend_request}
                    {$username = getUserFromID($friend_request.requestedBy_id)}
                    <div class="col-md-1 profile-thumbnail friendship-request-panel" width="inherit" id="friendship-request-panel-{$username.id}" style="display:flex;justify-content:center;align-items:center;">
                        {$imagePath=getProfilePic($friend_request.requestedBy_id)}
                        <div>
                            <a href="{$BASE_URL}pages/users/profile.php?user={$username.hashid}" style="text-decoration: none; color: inherit">
                                <div>
                                    <img class="profilePic" width="80" height="80" style="border-radius:50%" src="../../images/users/{$imagePath}" alt="profilePic">
                                    <p>{$username.name}</p>
                                </div>
                            </a>

                            <table cellpadding="0" cellspacing="0" style="width: 100%; text-align:center" class="col-md-2">
                                <tr>
                                    <td><a class="accept_friend_request" id="accept_friend_request-{$friend_request.requestedBy_id}"><i class="fa fa-check"></i></a></td>
                                    <td><a class="decline_friend_request" id="decline_friend_request-{$friend_request.requestedBy_id}"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>

{include file='users/circles_friends_modal.tpl'}
{include file='common/footer.tpl'}
