{include file='common/header.tpl' title="Venn - Settings"}

<!-- Custom CSS for this page -->
<link href="../../css/profile.css" rel="stylesheet">

</head>
<body>

{include file='common/navbar.tpl'}

<div id="page-wrapper">

    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row row-centered">
            <div class="col-sm-10">

            </div>


            <div class="col-sm-6 col-md-offset-3">
                <h2 class=""><i class="fa fa-gear"></i> Profile Settings</h2>
                <br>

                <button type="button" class="btn btn-transparent centered" style="marin-left:auto; margin-right:auto" data-toggle="modal" data-target="#myModal">
                    <div class="itemsContainer">
                        <img class="centered-and-cropped profilePic " width="150" height="150" style="border-radius:50%" src="../../images/users/{$profilePicS}" alt="profilePic">
                    </div>
                </button>

                <h1 align="center">{$user.name}</h1>

                <div class="form-group"">
                <form id="new_post_form" action="../../actions/users/profileSet.php" accept-charset="UTF-8" method="POST" >
<div>
                <label>Name:</label><input class="form-control" name="newName" placeholder="Change Name" style="margin-bottom:10px;">


                    <label>New Password:</label><input type="password" class="form-control" name="pass1" placeholder="New Password" style="margin-bottom:10px;">
                    <label>Repeat Password:</label><input type="password" class="form-control" name="pass2" placeholder="Rewrite New Password" style="margin-bottom:10px;">

                    <input type="submit" value="Change" class="pull-right btn btn-info" style="margin-left:10px">


                </form>
            </div>
            </div>
            </div>

        </div>
        <br>
    </div>
</div>

{include file='users/uploadProfilePicModal.tpl'}

{include file='common/footer.tpl'}
