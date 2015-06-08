<section id="password_recovery">
    <div class="blurb" id="sec5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Forgot your password? Don't worry!</h1>
                    <div id="login_container" class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form id="registerForm" action="../../actions/users/pw_recovery.php" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                                </div>

                                                <div id="error_message"></div>
                                                <div class="login_btns col-md-4">
                                                    <input class="btn btn-lg btn-success" type="submit" value="Send">
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
