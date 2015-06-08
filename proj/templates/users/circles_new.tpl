<!-- Custom CSS for this page -->
<link href="../../css/circles.css" rel="stylesheet">
</head>
<body>

<div class="panel panel-default circle-group">
    <div class="row row-centered">
        <div class="">
            <div class="panel-body">
                <div class="col-md-12" style="float:left" >
                    <button class="btn btn-primary" style="float:right" id="botao_novo_circulo"> Create </button>
                    <h3>Name:</h3>
                    <input type="text" id="circle_name_content" class="form-control" name="circle_name" placeholder="Enter new circle's name">
                </div>
                <div class="col-md-12" style="float:left">
                    <h3>Members:</h3>
                    <div class="select-friends-new-circle">
                        <ul class="listrap">
                            {foreach $user_friends as $friend}
                                <div class="col-md-2">
                                    <li id="friend-{$friend.id}">
                                        {$imagePath=getProfilePic($friend.id)}
                                        <div class="listrap-toggle">
                                            <span></span>
                                            <img class="img-circle" src="../../images/users/{$imagePath}" alt="profilePic" width="40" height="40" style="border-radius:50%"/>
                                        </div>
                                        <strong> {$friend.name} </strong>
                                    </li>
                                </div>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>