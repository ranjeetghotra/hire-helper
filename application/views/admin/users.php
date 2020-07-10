<div class="row">
  <div class="col-12">
    <div class="card shadow">
      <div class="card-header btn-header">
        <div id="other-btn" style="display:none"><span class="btn btn-primary btn-sm float-right list-item">back</span></div>
        <div id="list-btn"><?php /*?><span class="btn btn-primary btn-sm float-right add-item">Add User</span><?php*/ ?></div>
      </div>
      <div class="card-body">
        <div class="container-fluid" id="content-wrap"></div>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body" id="userModalContent">
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
    $("#content-wrap").load("/admin/users/list", function() {
      $('#dataTable').DataTable();
    });
    $(document).on("click", ".edit-item", function() {
      var that = this;
      $('.btn-header').children().hide();
      $('#other-btn').show();
      $("#content-wrap").load("/admin/users/edit/" + $(that).data('id'));
    });
    $(document).on("click", ".add-item", function() {
      $('.btn-header').children().hide();
      $('#other-btn').show();
      $("#content-wrap").load("/admin/users/add");
    });
    $(document).on("click", ".list-item", function() {
      $('.btn-header').children().hide();
      $('#list-btn').show();
      $("#content-wrap").load("/admin/users/list");
    });
    $(document).on("click", ".delete-item", function() {
      var that = this;
      if (confirm("Are you sure to delete?")) {
        $.get("/admin/users/delete/" + $(that).data('id'), function(data) {
          $("#content-wrap").load("/admin/users/list");
        });
      }
    });
    $(document).on("click", ".view-item", function() {
      var that = this;
      $("#userModalContent").load("/admin/users/view/"+ $(that).data('id'));
      $('#userModal').modal('show');
    });
  });
</script>
