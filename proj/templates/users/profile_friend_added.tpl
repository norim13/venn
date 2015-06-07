{include file='common/header.tpl' title = $user.name}

<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

{include file='common/navbar.tpl'}

<div id="page-wrapper">

    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row">
            <div class="col-sm-10" style="margin-bottom:10px">
                <h1 class="">{$user.name}</h1>

                <button id="addToCircleButton" type="button" class="btn btn-success"><i class="fa fa-circle-o"></i> Add to a circle</button>
                <button type="button" class="btn btn-info">Send me a message</button>
                <br>
            </div>

            <div class="col-sm-2">
                <!--profile pic-->
                <img title="profile image" class="img-circle img-responsive" src="http://www.rlsandbox.com/img/profile.jpg">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-3">
                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><a href="" class="remove-friendship-btn" id="remove-friendship-btn-{$user.id}"><strong class="">Remove me from friends</strong></span> <i class="fa fa-trash-o"></i></a></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Votes</strong></span> {$numberOfVotes}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> {$numberOfPosts}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> {$numberOfFriends}</li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->
                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">Posts</h2>
                    {foreach $user_posts as $post}
                        {include file="posts/post.tpl"}
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>

{include file="posts/reportModal.tpl"}

{include file="users/add_to_circles_modal.tpl"}

{include file='common/footer.tpl'}