
<form accept-charset="UTF-8" action="../../actions/post/new_post.php" method="POST">

    <textarea class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;">
    </textarea>

    Url: <input class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">

    Tags: <input class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">

    <!--class="pull-right btn btn-info"-->
    <input type="submit" value="Post" class=" btn btn-info" style="margin-left:10px">

    <h6 class="pull-right" id="counter">600 characters remaining   </h6>
    <button class="btn btn-default" id="clock-panel"type=""><i class="fa fa-picture-o"></i>  Upload Photo</button>
    <button class="btn btn-default" id="clock-panel"type=""><i class="fa fa-clock-o"></i>  Set timer</button>

    <div class="dropdown">
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-form">
                {foreach $user_circles as $circle}
                    <li><input id="ex3_1" name="ex3" value="1" type="checkbox"><label for="ex3_1">{$circle.name}</label></li>
                {/foreach}
            </ul>
        </div>
    </div>
</form>