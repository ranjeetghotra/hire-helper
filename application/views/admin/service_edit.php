<form method="post" enctype='multipart/form-data' class="ajax-form4"
    action="/admin/service/update/<?=$row['service_id']?>">

    <div class="form-group">
        <label for="formGroupExampleInput">Service Name</label>
        <input type="text" value="<?=$row['service_name']?>" name="name" class="form-control" id="formGroupExampleInput"
            placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="number" class="form-control required" name="price" id="price" min="50"
            value="<?=$row['service_price']?>" max="5000" placeholder="Service Price">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Description</label>
        <textarea name="desc" class="form-control" id="formGroupExampleInput"
            placeholder="Example input"><?=$row['service_description']?></textarea>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <label for="formGroupExampleInput">Service Image</label>
            <br>
            <img src="/<?=$row['service_image']?>" class=".img-rounded" alt="Not Found" height="100px" width="100px">
            <!-- <img src="/images/services-icons/plumbing.png" class="rounded mx-auto d-block" alt="Not Found"> -->
        </div>
        <div class="form-group col-4">
            <label for="formGroupExampleInput">Service Icon</label>
            <br>
            <img src="/<?=$row['service_icon']?>" class=".img-rounded" alt="Not Found" height="100px" width="100px">
            <!-- <img src="/images/services-icons/plumbing.png" class="rounded mx-auto d-block" alt="Not Found"> -->
        </div>
        <div class="form-group col-4">
            <label for="formGroupExampleInput">Service Banner</label>
            <br>
            <img src="/<?=$row['service_banner']?>" class=".img-rounded" alt="Not Found" height="100px" width="100px">
            <!-- <img src="/images/services-icons/plumbing.png" class="rounded mx-auto d-block" alt="Not Found"> -->
        </div>
    </div>
    <div class="row">
        <div class="form-group col-4">
            <label for="exampleFormControlFile1">Change Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group align-items-center col-4">
            <label for="exampleFormControlFile1">Change Icon</label>
            <input type="file" name="icon" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group align-items-center col-4">
            <label for="exampleFormControlFile1">Change Banner</label>
            <input type="file" name="service_banner" class="form-control-file">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Save Changes</button>
    </div>
</form>
<script>
$("body").on('submit', '.ajax-form4', function(e) {
    e.preventDefault();
    var form = $(this);
    if (formValidate(form) == false) {
        $.notify("Please Check Inputs", {
            className: 'warn',
            globalPosition: 'right bottom'
        });
        return;
    }
    var submitbtn = form.children(":submit");
    var formdata = false;
    if (window.FormData) {
        formdata = new FormData(form[0]);
    }
    $.ajax({
        url: form.attr('action'),
        data: formdata ? formdata : form.serialize(),
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        beforeSend: function() {
            submitbtn.prop('disabled', true)
        },
        success: function(data) {
            if (data == "") {
                $('.btn-header').children().hide();
                $('#list-btn').show();
                $("#content-wrap").load("/admin/service/list", function() {
                    $('#dataTable').DataTable();
                });
                form[0].reset();
                submitbtn.prop('disabled', false);
                $.notify("Successfuly submitted", {
                    className: 'success',
                    globalPosition: 'right bottom'
                });
            }
        }
    });
});
</script>
