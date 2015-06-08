function report(event) {
    var post_id = $("#report-modal").attr('post-id');

    var msg = $('#report-msg').val();

    $.ajax({
        url: "../../actions/admin/report.php",
        type: "post",
        data: {"post_id":post_id, "msg":msg},
        success: function (data) {
            try {
                var response = $.parseJSON(data);

                if (response.success != null) {
                    console.log('report success');
                }
            } catch(exp) {
                console.log('error occurred');
            }
        },
        error: function () {}
    });
}

$(".btn-report").click(report);

function changeReportModalID(event) {
    var post_id = $(this).attr('id').split('-')[2];
    $("#report-modal").attr('post-id',post_id);
    $('#report-modal').modal('toggle');
}

$(".btn-flag-report").click(changeReportModalID);

$('#report-modal').on('hidden.bs.modal', function () {
    $("#report-msg").val('');
});