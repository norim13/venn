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
                    <input type="text" id="circle_name_content" class="form-control " name="circle_name" placeholder="Enter new circle's name">


                </div>
                <div class="col-md-12" style="float:left">
                    <h3>Members:</h3>
                    <div class="">
                        <ul class="listrap">

                            {foreach $user_friends as $friend}
                                <li id="friend-{$friend.id}">
                                    <div class="listrap-toggle">
                                        <span></span>
                                        <img src="http://lorempixel.com/40/40/people/2" class="img-circle" />
                                    </div>
                                    <strong> {$friend.name} </strong>
                                </li>
                            {/foreach}

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>