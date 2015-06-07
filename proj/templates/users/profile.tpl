{include file='common/header.tpl' title = $user.name}

<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

{include file='common/navbar.tpl'}

<div id="page-wrapper">
    <hr>

    <div class="row">
        <div class="col-sm-3">
            <!-- Modal -->
            <!--profile pic-->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-transparent centered" style="marin-left:auto; margin-right:auto" data-toggle="modal" data-target="#myModal">
                <div class="itemsContainer">
                    <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/{$profilePIC.path}" alt="profilePic">
                </div>
            </button>

            <h1 align="center">{$user.name}</h1>
            <br>

            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> {$user.signup_date}</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> {$user.last_login}</li>
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
                <!--publication-->
                <div class="panel panel-default">
                    <div class="panel-body"  >
                        {include file='posts/new_post.tpl'}
                    </div>
                </div>

                <h2 id="myPostsh2">My posts</h2>

                {foreach $user_posts as $post}
                    {include file="posts/post.tpl"}
                {/foreach}
            </div>
        </div>
    </div>
</div>

{include file='users/uploadProfilePicModal.tpl'}

{include file="posts/reportModal.tpl"}

{include file="posts/voteModal.tpl"}

{include file='common/footer.tpl'}
