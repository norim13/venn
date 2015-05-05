<section id="register">
  <div class="blurb" id="sec4">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Not a member yet? Don't wait any longer!</h1>
          <div id="login_container" class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                  <div class="panel-body">
                    <form role="form" action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
                      <fieldset>
                        <div class="form-group">
                          <input class="form-control" placeholder="Name" name="username" type="text" autofocus>
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="E-mail" name="email" type="email">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                          <input class="form-control" placeholder="Repeat Password" name="confirmPassword" type="password" value="">
                        </div>
                        <div class="form-group">
                          <label class="radio-inline"><input type="radio" name="optradio"> Male </label>
                          <label class="radio-inline"><input type="radio" name="optradio"> Female </label>
                          <label class="radio-inline"><input type="radio" name="optradio"> Other </label>
                        </div>
                        <div id="login_btns">
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
