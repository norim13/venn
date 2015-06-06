
<form accept-charset="UTF-8" action="../../../../lbaw/actions/post/new_post.php" method="POST" enctype="multipart/form-data">

    <textarea id="new-post-textarea" maxlength="600" class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;"></textarea>

    <div class="form-group"">
    <input class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">
    </div>

    <div class="form-group">
      <input class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">
    </div>

    <!--class="pull-right btn btn-info"-->
    <div class="form-inline form-group">
        <label for="label3" class="datepickerdiv">   <i class="fa fa-calendar"></i> Start date:</label>
        <input  class="form-control" type="text" name="dateInit" placeholder="Click to select "  id="example1">
        <label for="label3"  class="datepickerdiv"><i class="fa fa-calendar"></i>  Expiration date:</label>
        <input  class="form-control" type="text" name="dateFinal" placeholder="Click to select"  id="example2">
       <!-- <button class="pull-right btn btn-default" id="clock-panel"type="file" name="image" style="display: inline"></button>
        -->

        <div class="pull-right fileinput fileinput-new" data-provides="fileinput" style="display: inline">
            <span class="btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-picture-o"></i>  Upload Photo</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
            <span class="fileinput-filename"></span>
            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
        </div>
    </div>





    <div class=form-inline">

        <div class="dropdown" style="display: inline">
            <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-form">
                    {counter start=0 skip=1 print=false}
                    {$n = {counter}}
                    <li><input id="ex3_{$n}" name="ex3" value="{$n}" type="checkbox"><label for="ex3_{$n}">Public</label></li>
                    {foreach $user_circles as $circle}
                        {$n = {counter}}
                        <li><input id="ex3_{$n}" name="ex3" value="{$n}" type="checkbox"><label for="ex3_{$n}">{$circle.name}</label></li>
                    {/foreach}
                </ul>
            </div>
        </div>

        <input type="submit" value="Post" class="pull-right btn btn-info" style="margin-left:10px">

        <h6 class="pull-right" id="counter-remaining-chars">600 characters remaining   </h6>




    </div>

    <!-- <button class="btn btn-default" id="clock-panel"type=""><i class="fa fa-clock-o"></i>  Set timer</button>-->


</form>