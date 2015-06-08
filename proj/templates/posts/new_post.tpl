
<form id="new_post_form" action="../../actions/post/new_post.php" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">

    <textarea id="new-post-textarea" maxlength="600" class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;" required></textarea>

    <div class="form-group"">
    <input class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">
    </div>

    <div class="form-group">
        <input class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">
    </div>

    <div class="form-inline form-group">
        <label class="datepickerdiv">   <i class="fa fa-calendar"></i> Start date:</label>
        <input class="form-control" type="text" name="dateInit" placeholder="Click to select "  id="datePicker1">
        <label class="datepickerdiv"><i class="fa fa-calendar"></i>  Expiration date:</label>
        <input class="form-control" type="text" name="dateFinal" placeholder="Click to select"  id="datePicker2">

        <div class="pull-right fileinput fileinput-new" data-provides="fileinput" style="display: inline">
            <span class="btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-picture-o"></i>  Upload Photo</span><span class="fileinput-exists">Change</span>
                <input type="file" name="image"></span>
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
                    <li><input id="circle-public-{$n}" class="input-circle-visibility" name="visibility[]" value="0" type="checkbox"><label for="circle-public-{$n}">Public</label></li>
                    {foreach $user_circles as $circle}
                        {$n = {counter}}
                        <li><input id="circle-{$circle.id}-{$n}" class="input-circle-visibility" name="visibility[]" value="{$circle.id}" type="checkbox"><label for="circle-{$circle.id}-{$n}">{$circle.name}</label></li>
                    {/foreach}
                </ul>
            </div>
        </div>

        <input id="submitNewPost" type="submit" value="Post" class="pull-right btn btn-info" style="margin-left:10px">
        <h6 class="pull-right" id="counter-remaining-chars">600 characters remaining </h6>
    </div>
</form>