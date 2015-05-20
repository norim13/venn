{include file="common/navbar_admin.tpl"}


<div id="page-wrapper">
    <br>
    <h3>DataBase - Posts</h3>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- /.panel -->
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <!--
                                        <th>Name</th>
                                        <th>Registration</th>
                                        <th>Gender</th>
                                        <th>Warnings</th>
                                        <th>Comments</th>
                                        <th>Reposts</th>
                                        <th>Upvotes</th>
                                        <th>Downvotes</th>-->
                                        <th>Post Date</th>
                                        <th>Start Date</th>
                                        <th>Expiration Date</th>
                                        <th>Vote Diference</th>
                                        <th>Number of Comments</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach $posts as $post}
                                        <tr>
                                            <td>{$post.id}</td>
                                            <td>{$post.name}</td>
                                            <td>{$post.post_date}</td>
                                            <td>{$post.start_date}</td>
                                            <td>{$post.expiration_date}</td>
                                            <td>{$post.votedifference}</td>
                                            <td>
                                                {if $post.number_of_comments eq null}
                                                    0
                                                {/if}
                                                {$post.number_of_comments}</td>
                                            <td>
                                                <form id="form" action="../../actions/admin/delete_post.php" method="post">
                                                    <input type="hidden" name="post_id" value={$post.id}>
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>

                                            </td>
                                        </tr>
                                    {/foreach}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="col-lg-8">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

            <!-- /.panel -->
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
{include file="common/footer.tpl"}