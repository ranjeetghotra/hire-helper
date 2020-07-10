<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user ajax-form" method="POST" action="/adminlogin/reset/submit">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user required" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password1" class="form-control form-control-user required" id="newPassword" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password2" class="form-control form-control-user required" id="confirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block text-white">
                                            Login
                                        </button>
                                        <!--<hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>-->
                                    </form>
                                    <!--<hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
    <script src="/js/notify.min.js"></script>
    <script>
        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }


        function passValidate() {
            var status = true;
            var pass1 = $('#newPassword').val();
            var pass2 = $('#confirmPassword').val();
            if (pass1 != pass2)
                status = false;
            return status;
        }

        function formValidate(form) {
            var status = true;
            $(form.find('.required').get().reverse()).each(function() {
                if ($(this).is('select') || $(this).is('input')) {
                    if ($(this).val() == '') {
                        $(this).focus();
                        status = false;
                    }
                    if ($(this).is('input[type="email"]')) {
                        var email = $(this).val();
                        if (!validateEmail(email)) {
                            okay = 'no';
                            $(this).focus();
                        }
                    }
                }
            });
            return status;
        }
        $(".ajax-form").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            if (formValidate(form) == false) {
                $.notify("Please Check Inputs", {
                    className: 'warn',
                    globalPosition: 'right top'
                });
                return;
            }
            var submitbtn = form.find(":submit");
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
                    if (data == true) {
                        window.location.href = '/admin';
                        $.notify("Login Successfully", {
                            className: 'success',
                            globalPosition: 'right top'
                        });
                    } else {
                        $.notify("Login Failed", {
                            className: 'error',
                            globalPosition: 'right top'
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>