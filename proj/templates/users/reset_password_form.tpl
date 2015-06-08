<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

{include file='common/header.tpl'}


<link href="../../css/home.css" rel="stylesheet">
</head>
<body>

<section id="reset">
    <div class="blurb" id="sec4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1> Reset your password </h1>
                    <div id="login_container" class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form id="resetForm" action="../../actions/users/reset_password.php" role="form" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Temporary password" name="oldpassword" type="password" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Confirm Password" name="confirmPassword" type="password" value="" required>
                                                </div>

                                                <div id="error_message"></div>
                                                <div class="login_btns">
                                                    <input class="btn btn-lg btn-success" type="submit" value="Sign Up">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{include file='common/footer.tpl'}
