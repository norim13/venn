{include file="common/navbar_admin.tpl"}


<div id="page-wrapper">
    <br>
    <h3>DataBase - Users</h3>
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
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Last Login</th>
                                        <th>Signup Date</th>
                                        <th>Number of Posts</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {foreach $users as $user}
                                        <tr>
                                            {$userHash=getHashID($user.id)}
                                            <td> <a href="{$BASE_URL}pages/users/profile.php?user={$userHash.hashid}">{$user.id}</a></td>
                                            <td>{$user.name}</td>
                                            <td>{$user.email}</td>
                                            <td>{$user.gender}</td>
                                            <td>{$user.last_login}</td>
                                            <td>{$user.signup_login}</td>
                                            <td>{$user.number_of_post}</td>
                                            <td>
                                                {if $user.id neq 1}


                                                    <form id="form" action="../../actions/admin/delete_user.php" method="post">
                                                        <input type="hidden" name="user_id" value={$user.id}>
                                                        <input type="submit" value="Delete" class="btn btn-danger">
                                                    </form>
                                                {/if}

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