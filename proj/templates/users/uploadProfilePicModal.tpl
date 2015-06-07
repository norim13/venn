<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Change profile pic</h4>
            </div>
            <div class="modal-body">

                <form accept-charset="UTF-8" action="../../actions/users/profileSettings.php" method="POST" enctype="multipart/form-data">

                    <input type="submit" value="Change Pic" class="pull-right btn btn-info" style="margin-left:10px">
                    <div class=" fileinput fileinput-new" data-provides="fileinput" style="display: inline">
                        <span class="btn btn-default btn-file"><span class="fileinput-new"><i class="fa fa-picture-o"></i>  Upload Photo</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>