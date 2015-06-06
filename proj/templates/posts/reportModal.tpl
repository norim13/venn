<div id="report-modal" class="modal report-modal fade" post-id="" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label"> Tell us why you are reporting: </label>
                        <div class="question-text form-group-lg">
                            <input type="text" class="form-control" size="100" placeholder="Write report message" required autocomplete="off">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary btn-report" data-dismiss="modal" id="report-btn-{$post.id}">Send Report</button>
            </div>
        </div>
    </div>
</div>