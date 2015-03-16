<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="assets/css/home.css" rel="stylesheet">
</head>
<body>
  <div class="header vert">
    <div class="container">
      <a href="#sec1" class="btn btn-default btn-lg">Log In</a>
    </div>
  </div>

  <div id="sec1" class="blurb">
    <div class="container">
      <div id="login_container" class="container">
        <h1>Log In</h1>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="login-panel panel panel-default">
              <div class="panel-body">
                <form role="form">
                  <fieldset>
                    <div class="form-group">
                      <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>

                    <div id="login_btns">
                      <a id="signup_back" href="#sec4"> Create an account </a>
                      <input class="btn btn-lg btn-success" type="button" value="Login">
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
                    <form role="form">
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
                          <!--<a id="signup_back" href="index.php?page=login"> Back </a>-->
                          <input class="btn btn-lg btn-success" type="button" value="Sign Up">
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
  