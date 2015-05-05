<?php /* Smarty version Smarty-3.1.15, created on 2015-05-05 23:15:22
         compiled from "../../templates/users/circles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18536193865549162558dcd8-43500815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f095cc3a28ad07c03e05de77f6d4003511c4ac82' => 
    array (
      0 => '../../templates/users/circles.tpl',
      1 => 1430858239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18536193865549162558dcd8-43500815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55491625631474_43906087',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55491625631474_43906087')) {function content_55491625631474_43906087($_smarty_tpl) {?><!-- Custom CSS for this page -->

<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



    <link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

    <?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- based on http://www.bootply.com/AdHpVL3xRF-->
	<div id="page-wrapper">

		<div>
			<h1 class=""> Circles </h1>
		</div>

		<div class="panel panel-default target circle-group">
			<div class="panel-headding"> 
				<button type="button" class="btn btn-primary" id="btn-newCircle"><i class="fa  fa-circle-o "></i> Create Circle
				</button></div>
				<div class="panel-body">
					<div class="row">

						<div class="col-md-3">
							<div class="thumbnail">
								<a href=""><img alt="300x300" class="img-circle img-responsive"src="http://lorempixel.com/100/100/people"></a>
								<div class="caption">
									<h3 class="fill-flow"> FEUP <br/>
										<button class="btn " id="btn-transparent"type="button" data-toggle="collapse" data-target="#circle-members" aria-expanded="false" aria-controls="comments">
											Show more	
										</button></h3>
										<p>
											<button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
											<button type="button" class="btn " id="btn-transparent" >
												<i class="fa fa-pencil-square-o "></i> Write to this Circle
											</button>
										</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="thumbnail">
									<a href=""><img alt="300x300" class="img-circle img-responsive"src="http://lorempixel.com/100/100/people/10"></a>
									<div class="caption">
										<h3 class="fill-flow">Family <br/>
											<button class="btn " id="btn-transparent"type="button" data-toggle="collapse" data-target="#circle-members2" aria-expanded="false" aria-controls="comments">
												Show more	
											</button></h3>
											<p>
												<button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
												<button type="button" class="btn " id="btn-transparent" >
													<i class="fa fa-pencil-square-o "></i> Write to this Circle
												</button>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members">
						<div class="panel-heading" contenteditable="false"> 
							<h3>FEUP - 17 Members
								<button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
								<button type="button" class="btn " id="btn-transparent" ><i class="fa fa-pencil-square-o "></i> Write to this Circle</button>
							</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
									<p>John</p>
								</div>
								<div class=" col-md-1 profile-thumbnail"style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/2">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail"style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/3">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>


							</div>

						</div>
					</div>

					<div class="panel panel-default target col-md-12 circle-members collapse" id="circle-members2">
						<div class="panel-heading" contenteditable="false"> 
							<h3>Family - 17 Members
								<button type="button" class="btn " id="btn-comment" ><i class="fa fa-gear "></i> Edit</button>
								<button type="button" class="btn " id="btn-transparent" ><i class="fa fa-pencil-square-o "></i> Write to this Circle</button>
							</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
									<p>John</p>
								</div>
								<div class=" col-md-1 profile-thumbnail"style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/2">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail"style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/3">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>
								<div class="col-md-1 profile-thumbnail" style="float:left">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people/4">
									<p>John</p>
								</div>


							</div>

						</div>
					</div>



					<div>
						<h1 class="">Friend Requests</h1>

					</div>


					<div class="panel panel-default target col-md-12 circle-members" id="circle-members">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-1 profile-thumbnail">
									<img alt="200x200" class="profile-circles img-circle img-responsive"  src="http://lorempixel.com/70/70/people">
									<p>John L.</p>
									<table  cellpadding="0" cellspacing="0" style="width: 100%; text-align:center" class="col-md-2">
										<tr>
											<td><a href=""><i class="fa fa-check"></i></a></td>
											<td><a href=""><i class="fa fa-times"></i></a></td>
										</tr>
									</table>
								</div>


							</div>

						</div>
					</div>


				</div>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
