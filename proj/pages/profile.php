<!-- Custom CSS for this page -->
<link href="assets/css/profile.css" rel="stylesheet">
</head>
<body>

	<? include 'navbar.php'; ?>
	<!-- based on http://www.bootply.com/AdHpVL3xRF-->
	<div id="page-wrapper">

		<hr class="">
		<!--header profile-->
		<div class="container target">
			<div class="row">
				<div class="col-sm-10">
					<h1 class="">Mira</h1>
					<!--
					<button type="button" class="btn btn-success">Friend Request</button>  
					<button type="button" class="btn btn-info">Send me a message</button>
				-->
				<button type="button" class="btn btn-primary"><i class="fa fa-gear "></i> Settings</button>
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
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
					<li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
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
							 <form accept-charset="UTF-8" action="" method="POST">
			                    <textarea class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;"></textarea>
			                    Url: <input class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">
			                    Tags: <input class="form-control" name="url" placeholder="Write post tags here, separated by commas" style="margin-bottom:10px;">
			                    <button class="pull-right btn btn-info" type="submit" style="margin-left:10px">Post</button>
			                    <h6 class="pull-right" id="counter">600 characters remaining   </h6>
			                    <button class="btn btn-default" id="clock-panel"type="submit"><i class="fa fa-picture-o"></i>  Upload Photo</button> 
			                    <button class="btn btn-default" id="clock-panel"type="submit"><i class="fa fa-clock-o"></i>  Set timer</button> 
			                    
			                    <div class="dropdown">
				                    <div class="btn-group">
		                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
		                                <ul class="dropdown-menu dropdown-menu-form">
			                                <li><input id="ex3_1" name="ex3" value="1" type="checkbox"><label for="ex3_1">FEUP</label></li>
			                                <li><input id="ex3_2" name="ex3" value="2" type="checkbox"><label for="ex3_2">Family</label></li>
			                                <li><input id="ex3_3" name="ex3" value="3" type="checkbox"><label for="ex3_3">Best friends</label></li>
			                                <li><input id="ex3_4" name="ex3" value="4" type="checkbox"><label for="ex3_4">Football friends</label></li>
			                                <li><input id="ex3_5" name="ex3" value="5" type="checkbox"><label for="ex3_5">Public</label></li>
		                                </ul>
		                            </div>
	                            </div>
			                </form>
						</div> 
					</div>
					
					<!--publication-->
					<div class="panel panel-default   " id="panel-feed">
						<!-- user's name -->
						<div class="panel-heading ">
							Mira
						</div>

						<div class="panel-body"  >
							<!-- voting section -->
							<div class="vote-section" >
								<table style="text-align:center;">
									<tr>
										<td><i class="fa fa-sort-asc"></i></td>
									</tr>
									<tr>
										<td>6</td>
									</tr>
									<tr>
										<td><i class="fa fa-sort-desc"></i></td>
									</tr>
								</table>
							</div>

							<!-- publication -->
							<p>Eux maudite pendant eparses ces facteur general ans legumes. Habitent ete fillette continue cantines galopent ils ces.
								Nos rouge passa rirez </p>
							</div> 

							<!--footer-->
							<div class="panel-footer clearfix ">
								<!-- section with the time and comments button -->
								<div class="fill-flow">
									<a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
									<button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
										<i class="fa fa-comments"></i> Comments
									</button>
									<button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
									<button class="btn btn-default" id="btn-comment"><i class="fa fa-trash-o"></i> Delete</button>
								</div>

								<!-- comment section-->
								<div class="collapse" id="comments">
									<div class="col-lg-20" id="comments_section" >
										<h4>Comments</h4>
										(....)
										<br>
										<br>
										<!-- write a comment -->
										<div class="input-group">
											<textarea class="form-control" rows="1" style="resize:none"></textarea> 
											<span class="input-group-addon btn btn-primary">Send</span>
										</div>
									</div>
								</div>
							</div>
					</div>

					<!--publication-->
					<div class="panel panel-default   " id="panel-feed">
						<!-- user's name -->
						<div class="panel-heading ">
							Mira
						</div>

						<div class="panel-body"  >
							<!-- voting section -->
							<div class="vote-section" >
								<table style="text-align:center;">
									<tr>
										<td><i class="fa fa-sort-asc"></i></td>
									</tr>
									<tr>
										<td>6</td>
									</tr>
									<tr>
										<td><i class="fa fa-sort-desc"></i></td>
									</tr>
								</table>
							</div>

							<!-- publication -->
							<p>Eux maudite pendant eparses ces facteur general ans legumes. Habitent ete fillette continue cantines galopent ils ces.
								Nos rouge passa rirez </p>
							</div> 

							<!--footer-->
							<div class="panel-footer clearfix ">
								<!-- section with the time and comments button -->
								<div class="fill-flow">
									<a href="" class="btn btn-default" id="clock-panel"><i class="fa fa-clock-o"></i> 3 days ago</a>
									<button class="btn btn-default" id="btn-comment"type="button" data-toggle="collapse" data-target="#comments" aria-expanded="false" aria-controls="comments">
										<i class="fa fa-comments"></i> Comments
									</button>
									<button class="btn btn-default" id="btn-comment"><i class="fa fa-retweet"></i> Repost</button>
									<button class="btn btn-default" id="btn-comment"><i class="fa fa-trash-o"></i> Delete</button>
								</div>

								<!-- comment section-->
								<div class="collapse" id="comments">
									<div class="col-lg-20" id="comments_section" >
										<h4>Comments</h4>
										(....)
										<br>
										<br>
										<!-- write a comment -->
										<div class="input-group">
											<textarea class="form-control" rows="1" style="resize:none"></textarea> 
											<span class="input-group-addon btn btn-primary">Send</span>
										</div>
									</div>
								</div>
							</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
