<!-- Custom CSS for this page -->
<link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div>
			<span>Venn</span><br>
			Your social network
		</div>
	</div>

	<div id="login_container" class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
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
									<a href="index.php?page=signUp" class="btn btn-lg btn-success">Sign up</a>
									<input class="btn btn-lg btn-success" type="button" value="Login">
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
