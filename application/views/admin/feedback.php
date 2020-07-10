<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header btn-header">
                <div id="other-btn" style="display:none"><span class="btn btn-primary btn-sm float-right list-item">back</span></div>
                <div id="list-btn"><?php /*?><span class="btn btn-primary btn-sm float-right add-item">Feedback</span><?php*/ ?></div>
            </div>
            <div class="card-body">
                <div class="container-fluid" id="content-wrap"></div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $("#content-wrap").load("/admin/feedback/list", function() {
            $('#dataTable').DataTable({
                "order": []
            });
        });

        $(document).on("click", ".list-item", function() {
            $('.btn-header').children().hide();
            $('#list-btn').show();
            $("#content-wrap").load("/admin/feedback/list", function() {
                $('#dataTable').DataTable({
                    "order": []
                });
            });
        });
        $(document).on("click", ".delete-item", function() {
            var that = this;
            if (confirm("Are you sure to delete?")) {
                $.get("/admin/feedback/delete/" + $(that).data('id'), function(data) {
                    $("#content-wrap").load("/admin/feedback/list");
                });
            }
        });
    });
</script>
