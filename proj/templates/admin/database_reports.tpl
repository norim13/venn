{include file="common/navbar_admin.tpl"}


<div id="page-wrapper">
    <br>
    <h3>DataBase - Reports</h3>
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
                                        <th>Post</th>

                                        <th>Post's User</th>
                                        <th>Text</th>
                                        <th>URL</th>
                                        <th>Report's Date</th>
                                        <th>Report's Message</th>
                                        <th>Processed</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    {foreach $reports as $report}
                                    <tr>
                                        <td>
                                            <a href="{$BASE_URL}pages/posts/single_post.php?post_id={$report.post_id}">
                                            View Post</a>
                                        </td>
                                        <td>
                                            {$report.username}
                                        </td>
                                        <td>
                                            {$report.text}
                                        </td>
                                        <td>
                                            <a href={$report.url}>{$report.url}</a>
                                        </td>
                                        <td>
                                            {$report.date}
                                        </td>
                                        <td>
                                            {$report.message}
                                        </td>
                                        {if $report.processed}
                                        <td>
                                            Yes
                                        </td>
                                        {/if}
                                        {if !$report.processed}
                                        <td>
                                            No
                                        </td>
                                        {/if}


                                        <td>
                                            <form id="form" action="../../actions/admin/process_report.php" method="post">
                                                <input type="hidden" name="report_id" value="{$report.id}">
                                                <input type="submit" value="Ignore Post" class="btn">
                                            </form>

                                        </td>
                                        <td>
                                            <form id="form" action="../../actions/admin/delete_post.php" method="post">
                                                <input type="hidden" name="post_id" value={$report.post_id}>
                                                <input type="submit" value="Delete Post" class="btn btn-danger">
                                            </form>

                                        </td>
                                        </tr>{/foreach}
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