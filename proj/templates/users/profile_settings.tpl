{include file='common/header.tpl'}

<!-- Custom CSS for this page -->
<link href="../../css/profile.css" rel="stylesheet">

</head>
<body>

{include file='common/navbar.tpl'}

<div id="page-wrapper">

    <hr class="">
    <!--header profile-->
    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                <h1 class=""><i class="fa fa-gear"></i> Profile Settings</h1>
                <h4>Check for making visible to others</h4>
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
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> <input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span><input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Shares</strong></span><input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Upvotes</strong></span><input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span><input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Friends</strong></span><input type="checkbox" value=""> Friends  <input type="checkbox" value=""> Public</li>
                </ul>
            </div>

            <div class="col-sm-9" contenteditable="false" style="">
                <!--bio collum-->

                <div class=" col-lg-12 clearfix">
                    <h2 id="myPostsh2">My posts</h2><input type="checkbox" value="">  Friends  <input type="checkbox" value="">  Public

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


{include file='common/footer.tpl'}