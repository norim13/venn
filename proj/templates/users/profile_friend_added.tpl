{include file='common/header.tpl' title = $user.name}

<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

{include file='common/navbar.tpl'}

<div id="page-wrapper">

    <hr class="">
    <!--header profile-->


        <div class="row">
            <div class="col-sm-3">

                <button type="button" class="btn btn-transparent centered" style="marin-left:auto; margin-right:auto" data-toggle="modal" data-target="#myModal">
                    <div class="itemsContainer">
                        <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/{$profilePIC.path}" alt="profilePic">
                    </div>
                </button>

                <h1 align="center">{$user.name}</h1>



                <button id="addToCircleButton" type="button" class="btn btn-success centered"><i class="fa fa-circle-o"></i> Add to a circle</button>
                <br>
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