<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

{include file='common/header.tpl'}


<link href="../../css/home.css" rel="stylesheet">
</head>
<body>

<section id="login">
    <div id="sec1" class="blurb">
        <div class="container">
            <div id="login_container" class="container">
                <h1>Venn administrator login </h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="login-panel panel panel-default">
                            <div class="panel-body">
                                <form role="form" id="loginAdminForm" action="../../actions/admin/login_admin.php" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div id="error_message"></div>
                                        <div id="login_btns">
                                           <input class="btn btn-lg btn-success" type="submit" value="Login">
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file='common/footer.tpl'}
