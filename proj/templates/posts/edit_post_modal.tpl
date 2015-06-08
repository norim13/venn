<div id="editModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">

                <form id="edit_post_form" action="../../actions/post/edit_post.php" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">

                    <textarea id="edit-post-textarea" maxlength="600" class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;" required></textarea>

                    <div class="form-group"">
                    <input id="edit-post-url" class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">
            </div>

            <div class="form-group">
                <input class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">
            </div>

            <div class="form-inline form-group">
                <label class="datepickerdiv">   <i class="fa fa-calendar"></i> Start date:</label>
                <input class="form-control" type="text" name="dateInit" placeholder="Click to select "  id="datePickerEdit1">
                <label class="datepickerdiv"><i class="fa fa-calendar"></i>  Expiration date:</label>
                <input class="form-control" type="text" name="dateFinal" placeholder="Click to select"  id="datePickerEdit2">
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

                <input id="submitNewPost" type="submit" value="Edit post" class="pull-right btn btn-info" style="margin-left:10px">
                <h6 class="pull-right" id="counter-remaining-chars">600 characters remaining </h6>
            </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close</button>
            </div>
        </div>
    </div>
</div>