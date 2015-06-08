<section id="register">
    <div class="blurb" id="sec4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Not a member yet? Don't wait any longer!</h1>
                    <div id="register_container" class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form id="registerForm" role="form" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name" name="username" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                                </div>
                                                <div id="inputPasswordDiv" class="form-group">
                                                    <input id="register-password" class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                                </div>
                                                <div class="form-group" id="inputPasswordConfirmDiv">
                                                    <input id="register-confirm-password" class="form-control" placeholder="Repeat Password" name="confirmPassword" type="password" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="radio-inline"><input type="radio" name="gender" value="M"> Male </label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="F"> Female </label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="O"> Other </label>
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
