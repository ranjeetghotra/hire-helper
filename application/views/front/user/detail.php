<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <form class="profileForm" action="/welcome/user/detail/update">
                <div class="form-group col-lg-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="" value="<?=$user['user_fname']?>">
                </div>
                <div class="form-group col-lg-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="" value="<?=$user['user_lname']?>">
                </div>
                <div class="form-group col-lg-12">
                    <label>Phone</label>
                    <input type="tel" class="form-control" name="phone" placeholder="" value="<?=$user['user_mobile']?>">
                </div>
                <div class="form-group col-lg-12">
                    <label>EMail</label>
                    <input type="email" class="form-control" name="email" placeholder="" value="<?=$user['user_email']?>">
                </div>
                <div class="col-lg-12"><button type="submit"
                        class="btn btn-default btn-primary btn-skin">Update</button></div>
            </form>
        </div>
        <div class="col-xs-12 col-lg-6">
            <form class="profileForm" data-type="password" action="/welcome/user/detail/password">
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" id="pass1" class="form-control" name="password" placeholder="">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" id="pass2" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-default btn-primary btn-skin">Change</button>
            </form>
        </div>
    </div>
</div>
<script>
function formValidate(val) {
    var status = true;
    if (val == "password" && $('#pass1').val() != $('#pass2').val()) {
        status = false;
        $.notify("Confirm Password Not Match", {
            className: 'error',
            globalPosition: 'right top'
        });
    }
    if (val == "password" && $('#pass1').val().length < 6) {
        status = false;
        $.notify("Password Length small", {
            className: 'error',
            globalPosition: 'right top'
        });
    }
    return status;
}
$("body").on('submit', '.profileForm', function(e) {
    e.preventDefault();
    var form = $(this);
    if (formValidate(form.data('type')) == false)
        return;
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
            submitbtn.prop('disabled', false);
            if (form.data('type') == 'password') {
                form.reset();
            }
            $.notify("Successfully Submit", {
                className: 'success',
                globalPosition: 'right top'
            });
        }
    });
});
</script>
