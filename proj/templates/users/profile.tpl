
{include file='common/header.tpl' title = $user.name}

<link href="../../css/profile.css" rel="stylesheet">
</head>
<body>

{include file='common/navbar.tpl'}

<!-- based on http://www.bootply.com/AdHpVL3xRF-->
<div id="page-wrapper">
    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class="">{$user.name}</h1>
                <button type="button" class="btn btn-primary" onclick="window.location.href='{$BASE_URL}pages/users/profile_settings.php'"><i class="fa fa-gear "></i> Settings</button>
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
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> {$user.signup_date}</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> {$user.last_login}</li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Upvotes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span> 78</li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->

                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">My posts</h2>

                    <!--publication-->
                    <div class="panel panel-default   ">

                        <div class="panel-body"  >
                            {include file='posts/new_post.tpl'}
                        </div>
                    </div>

                    {foreach $user_posts as $post}
                        {include file="posts/post.tpl"}
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>

{include file="posts/voteModal.tpl"}

{include file='common/footer.tpl'}
