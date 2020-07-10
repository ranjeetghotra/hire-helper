<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header btn-header">
                <div id="other-btn" style="display:none"><span
                        class="btn btn-primary btn-sm float-right list-item">back</span></div>
                <div id="list-btn"><?php /*?><span
                        class="btn btn-primary btn-sm float-right add-item">Order</span><?php*/?></div>
            </div>
            <div class="card-body">
                <div class="container-fluid" id="content-wrap"></div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" id="orderModalContent">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("#content-wrap").load("/admin/orders/list", function() {
        $('#dataTable').DataTable({
            "order": [],
            "columnDefs": [{
                "type": "num",
                "targets": 0
            }]
        });
    });
    $(document).on("click", ".edit-item", function() {
        var that = this;
        $('.btn-header').children().hide();
        $('#other-btn').show();
        $("#content-wrap").load("/admin/orders/edit/" + $(that).data('id'));
    });
    $(document).on("click", ".add-item", function() {
        $('.btn-header').children().hide();
        $('#other-btn').show();
        $("#content-wrap").load("/admin/orders/add");
    });
    $(document).on("click", ".list-item", function() {
        $('.btn-header').children().hide();
        $('#list-btn').show();
        $("#content-wrap").load("/admin/orders/list", function() {
            $('#dataTable').DataTable({
                "order": []
            });
        });
    });
    $(document).on("change", ".status-item", function() {
        var that = this;
        $.get("/admin/orders/status/" + $(that).data('id'), {
            status: $(that).val()
        }).done(function(data) {
            // $("#content-wrap").load("/admin/orders/list");
        });
    });
    $(document).on("click", ".view-item", function() {
        var that = this;
        $('#orderModal').modal('show');
        $("#orderModalContent").load("/admin/orders/view/" + $(that).data('id'));
    });
});
</script>
