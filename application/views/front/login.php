<style>
    .my-3 {
        margin-top: 2.5rem;
        margin-bottom: 2.5rem;
    }

    .col-form {
        border-left: 3px solid #42b1e7;
        padding: 1rem;
        padding-top: 0.25rem;
        box-shadow: 1px 1px 7px gray;
    }

    .col-form .form-control {
        border: none;
        border-radius: 0;
        box-shadow: none;
        border-bottom: 1px solid #ccc;
    }

    .col-form .form-control:focus {
        border-color: #42b1e7;
    }
</style>
<!--Page Title Section Satrt-->
<div id="page_title">
    <div class="container text-center">
        <div class="panel-heading">services</div>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Services</li>
        </ol>
    </div>
</div>
<!--Page Title Section End-->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 my-3">
            <div class="col-form">
                <h3>Register</h3>
                <form method="post" class="ajax-form" id="otp-form" action="/welcome/register/otp" style="display:none">
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">OTP</label>
                            <input type="hidden" name="email" value="" id="otp-email">
                            <input type="text" class="form-control" id="uname" name="otp" placeholder="UserName">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Verify</button>
                </form>
                <form method="post" class="ajax-form" action="/welcome/register/submit">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" id="uname" name="fname" placeholder="UserName">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="UserName">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" onchange="emailchange(this)" name="email" id="exampleInputEmail1" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile No.</label>
                            <input type="tel" class="form-control" name="mob" id="exampleInputEmail1" placeholder="mobile">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Register</button>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6 my-3">
            <div class="col-form">
                <h3>Login</h3>
                <form method="post" class="ajax-form" action="/welcome/login/submit">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $("body").on('submit', '.ajax-form', function(e) {
        e.preventDefault();
        var form = $(this);
        //if (formValidate(form) == false)
        //  return;
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    form[0].reset();
                    submitbtn.prop('disabled', false);
                    $.notify("Successfuly submitted", {
                        className: 'success',
                        globalPosition: 'right bottom'
                    });
                    if (data['type'] == 'register') {
                        form.hide(300);
                        $('#otp-form').show(300);
                    }
                }
            }
        });
    });

    function emailchange(m) {
        $('#otp-email').val($(m).val());
    }
</script>