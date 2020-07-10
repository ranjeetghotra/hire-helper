<div class="row">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-header btn-header">
        <div id="other-btn" style="display:none"><span class="btn btn-primary btn-sm float-right list-item">back</span></div>
        <div id="list-btn"><span class="btn btn-primary btn-sm float-right add-item">insert</span></div>
      </div>
      <div class="card-body">
        <div class="container-fluid" id="content-wrap"></div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $("#content-wrap").load("/admin/subservice/list", function() {
      $('#dataTable').DataTable();
    });
    $(document).on("click", ".edit-item", function() {
      var that = this;
      $('.btn-header').children().hide();
      $('#other-btn').show();
      $("#content-wrap").load("/admin/subservice/edit/" + $(that).data('id'));
    });
    $(document).on("click", ".add-item", function() {
      $('.btn-header').children().hide();
      $('#other-btn').show();
      $("#content-wrap").load("/admin/subservice/add");
    });
    $(document).on("click", ".list-item", function() {
      $('.btn-header').children().hide();
      $('#list-btn').show();
      $("#content-wrap").load("/admin/subservice/list", function() {
      $('#dataTable').DataTable();
    });
    });
    $(document).on("click", ".delete-item", function() {
      var that = this;
      if (confirm("are you sure to delete")) {
        $.get("/admin/service/delete/" + $(that).data('id'), function(data) {
          $("#content-wrap").load("/admin/subservice/list");
        });
      }
    });
  });
</script>