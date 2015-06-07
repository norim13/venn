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

                {if $requestSent}
                    <button type="button" class="btn btn-success centered" id="new_friend_request-btn-{$user.id}">Friend Request Sent</button>
                {else}
                    <button type="button" class="btn btn-success new_friend_request-btn centered" id="new_friend_request-btn-{$user.id}">Friend Request</button>
                {/if}
                <br>



                <!--left col-->
                <ul class="list-group">
                    <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Votes</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
            </div>
            <div class="col-sm-9" contenteditable="false" style="">
                <div class=" col-lg-12 clearfix">
                    <br><br>
                    <h1>Send a Friend Request to {$user.name} to see new posts.</h1>
                    </div>
            </div>
        <br>

    </div>
</div>

{include file='common/footer.tpl'}
