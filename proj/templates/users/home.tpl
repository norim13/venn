<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

{include file='common/header.tpl'}


<link href="../../css/home.css" rel="stylesheet">
</head>
<body>
<div class="header vert">
    <div class="container">
        <a href="#sec1" class="btn btn-default btn-lg">Log In</a>
    </div>
</div>

{include file='users/login.tpl'}

<div class="featurette" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Amazing Features</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-3 text-center">
                <div class="featurette-item">
                    <i class="fa fa-circle-o"></i>
                    <h4>Friend Circles</h4>
                    <p>Categorize your friends by circles.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="featurette-item">
                    <i class="fa fa-lock"></i>
                    <h4>Custom Privacy</h4>
                    <p>Set custom post privacy.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="featurette-item">
                    <i class="fa fa-clock-o "></i>
                    <h4>Scheduled Posts</h4>
                    <p>Set beginning and expiration dates for your posts.</p>
                </div>
            </div>
        </div>
    </div>
</div>


{include file='users/register.tpl'}

{include file='users/password_recovery.tpl'}

{include file='common/footer.tpl'}

