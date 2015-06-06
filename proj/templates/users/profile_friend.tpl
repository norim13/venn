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
                {if $requestSent}
                    <button type="button" class="btn btn-success" id="new_friend_request-btn-{$user.id}">Friend Request Sent</button>
                {else}
                    <button type="button" class="btn btn-success new_friend_request-btn" id="new_friend_request-btn-{$user.id}">Friend Request</button>
                {/if}
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
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span><i class="fa fa-eye-slash"></i></li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Votes</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> <i class="fa fa-eye-slash"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> <i class="fa fa-eye-slash"></i></li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->

                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">Posts</h2>
                    <!--publication-->
                    <br/>
                    <h3>Send Friend request to see recent posts from {$user.name}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
