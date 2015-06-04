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
            <button type="button" class="btn btn-primary" id="btn-newCircle" data-toggle="collapse" data-target="#new_circle" aria-expanded="false" aria-controls="comments"><i class="fa  fa-circle-o "></i> Create Circle
            </button>
        </div>
    </div>

    <div class="panel-headding"></div>

    <div id="new_circle" class="collapse">  {include file='users/circles_new.tpl'} </div>

    <div class="panel panel-default target circle-group">
        <div class="panel-body">
            <div class="row">

                {foreach $user_circles as $circle}

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href=""><img alt="300x300" class="img-circle img-responsive"src="http://lorempixel.com/100/100/people"></a>
                            <div class="caption">
                                <h3 class="fill-flow"> {$circle.name} <br/>
                                    <button class="btn " id="btn-transparent"type="button" data-toggle="collapse" data-target="#circle-members-{$circle.id}" aria-expanded="false" aria-controls="comments">
                                        Show more
                                    </button>
                                </h3>
                                <p>
                                    <button type="button" class="btn btn-edit-circle" data-toggle="collapse" data-target="#edit-menu-{$circle.id}" aria-expanded="false" ><i class="fa fa-gear "></i> Edit</button>
                                    <button type="button" class="btn " id="btn-transparent" >
                                        <i class="fa fa-pencil-square-o "></i> Write to this Circle
                                    </button>
                                </p>
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
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>

    {foreach $user_circles as $circle}
        <div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members-{$circle.id}">
            <div class="panel-heading" contenteditable="false">
                <h3> {$circle.name}
                    <button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
                    <button type="button" class="btn " id="btn-transparent" ><i class="fa fa-pencil-square-o "></i> Write to this Circle</button>
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    {$friendsFromCircle=getFriendsFromCircle($circle.id,$userId) }
                    {foreach $friendsFromCircle as $friend}
                        <div class="col-md-1 profile-thumbnail" style="float:left">
                            <img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
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
        <div class="panel panel-default target col-md-12 friendshiprequest--panel" id="friendship-request-panel-{$username.id}">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1 profile-thumbnail">
                        <img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
                        <p> {$username.name} </p>
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

{include file='common/footer.tpl'}
