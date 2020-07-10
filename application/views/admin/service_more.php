<div class="container">
    <div class="row">
        <div class="card-columns">
            <?php foreach ($rows as $row) {?><div class="card">
                <img class="card-img-top" src="/<?=$row['f_bg']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$row['f_title']?></h5>
                    <p class="card-text"><?=$row['f_desc']?></p>
				</div>
				<div class="card-footer text-muted"><button class="btn btn-danger delete-more" data-id="<?=$row['f_id']?>">Delete</button></div>
            </div><?php }?>
        </div>
    </div>
    <div class="row">
        <form method="post" enctype='multipart/form-data' class="ajax-form3" action="/admin/service/more_add/<?=$sid?>">
            <div class="form-group col-md-12">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control required" name="title" id="name" placeholder="Service Name">
            </div>
            <div class="form-group col-md-12">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control required" name="desc" id="desc"
                    placeholder="Service Description">
            </div>
            <div class="form-group align-items-center col-md-6">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image" class="form-control-file required" id="exampleFormControlFile1">
            </div>
            <div class="form-group align-items-center">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
</div>
<script>
$("body").on('submit', '.ajax-form3', function(e) {
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
                form[0].reset();
                service_more( <?= $sid ?> );
                submitbtn.prop('disabled', false);
                $.notify("Successfuly submitted", {
                    className: 'success',
                    globalPosition: 'right bottom'
                });
            }
        }
    });
});
$(document).on("click", ".delete-more", function(e) {
	e.stopImmediatePropagation();
	e.preventDefault();
      var that = this;
      if (confirm("are you sure to delete")) {
		  $(that).parent().parent().remove();
        $.get("/admin/service/more_delete/" + $(that).data('id'), function(data) {
          //$("#content-wrap").load("/admin/service/list");
        });
      }
    });
</script>
