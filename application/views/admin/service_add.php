<form method="post" class="ajax-form" action="/admin/service/insert" enctype='multipart/form-data'>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Add New Service</label>
            <input type="text" class="form-control required" name="name" id="name" placeholder="Service Name">
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">URL</label>
            <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/,'')" readonly class="form-control" name="url" id="url" placeholder="Service Name">
        </div>
        <br>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Add Price</label>
            <input type="number" class="form-control required" name="price" id="price" min="50" value="149" max="5000" placeholder="Service Price">
        </div>
        <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Add Service Description</label>
            <input type="text" class="form-control required" name="desc" id="desc" placeholder="Service Description">
        </div>
        <div class="form-group align-items-center col-md-6">
            <label for="exampleFormControlFile1">Add Image</label>
            <input type="file" name="image" class="form-control-file required" id="exampleFormControlFile1">
        </div>
        <div class="form-group align-items-center col-md-6">
            <label for="exampleFormControlFile1">Add Icon</label>
            <input type="file" name="icon" class="form-control-file required" id="exampleFormControlFile1">
        </div>
        <div class="form-group align-items-center col-md-6">
            <label for="exampleFormControlFile1">Add Service Banner</label>
            <input type="file" name="service_banner" class="form-control-file required" >
        </div>
        
    </div>
    <div class="form-group align-items-center">
        <button type="submit" class="btn btn-success">Add</button>
    </div>

    </div>
</form>
<script>
$('#name').add('#url').keyup(function() {
    var slug = $(this).val().trim().replace(/[^a-z0-9-]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '').toLowerCase();
    $('#url').val(slug);
  })
  </script>
