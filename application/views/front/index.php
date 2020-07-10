<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hire A Helper</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/vendor/bootstrap-material-design/dist/css/bootstrap-material-design.min.css" rel="stylesheet">-->
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/js/notify.min.js"></script>
    <style>
    body {
        background-color: #F8F8F8;
    }

	a{
		cursor: pointer;
	}

    .icon-inr:before {
        content: '\20B9';
    }

    .dropdown-menu li {
        display: inherit;
    }

    .modal {
        text-align: center;
        padding: 0 !important;
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
        /* Adjusts for spacing */
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <!--Wrapper Start-->
    <div id="wrapper" class="<?php echo ($page == "booking" ? 'inner_page booking_page' : '') ?>">
        <!--Header Section Start-->
        <header id="header" data-spy="affix" data-offset-top="60" data-offset-bottom="60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8  col-sm-12 col-xs-12 col-sm-12">
                        <nav class="navbar">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span
                                        class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="navbar-brand" href="/"><img class="logo-dark hidden-xs" src="/images/logo.png"
                                        alt=""> <img class="logo-dark hidden-lg hidden-md hidden-sm"
                                        src="images\mobile_logo.png" alt=""></a> </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="main-menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-left">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/service">Service</a></li>
                                    <li><a href="/contactus">Contact</a></li>

                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="col-md-4  col-sm-12 col-xs-12 col-sm-12 hidden-xs">
                        <ul class="right-contact">
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +91 9876537798</li>
                            <?php if ($islogged == false) {?>
                            <a class="btn btn-primary btn-skin" data-toggle="modal" data-target="#loginModal">LOGIN</a>
                            <?php } else {?>
                            <li class="dropdown"><a href="/welcome/logout"
                                    class="btn btn-primary btn-skin dropdown-toggle" data-toggle="dropdown">Profile</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="/profile">Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/welcome/logout">Logout</a></li>
                                </ul>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </header><?php include $page . '.php';?><footer>
            <div class="container-fluid footerbg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"> <a href="#" class="footer-logo"> <img class="logo-dark"
                                    src="/images/logo2.png" alt="Hire A Helper"> </a>
                            <div class="about_info">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> VOP. Bholath ,Dist.-kpt.</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> hireHelper@gmail.com</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> +919876537798</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Services</h4>
                            <ul>
                                <?php foreach ($services as $s) {?>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="/<?=$s['service_url']?>">
                                        <?=$s['service_name']?></a></li>
                                <?php }?>
                            </ul>

                        </div>
                        <div class="col-md-2">
                            <h4>About Us</h4>
                            <ul>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="/">Home</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">About us</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Services</a></li>
                                <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Singn up Newsletter</h4>
                            <form action="#" method="post" class="newsletter">
                                <div class="input-group">
                                    <input type="text" id="newsletter-email" class="form-control"
                                        placeholder="Enter Email Address">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-newsletter" type="button"><i
                                                class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    </span> </div>
                                <!-- /input-group -->
                            </form>
                            <p>Hire A Helper will fulfill your any requirement for repair or replacement of any
                                electrical appliance or related work, plumbing, home cleaning & painting, pest control
                                etc at your home, offices, apartments etc by making a phone call or by visiting our
                                website.</p>
                        </div>
                    </div>
                    <div class="top_awro pull-right" style="margin-bottom:30px;" id="back-to-top"><i
                            class="fa fa-chevron-up" aria-hidden="true"></i> </div>
                </div>
            </div>

            <!--Boottom Footer-->
            <div class="container-fluid bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="copyright pull-left">&copy; Hire A Helper 2019 All Right Reserved</p>
                            <ul class="footer-scoails pull-right">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/Footer-->

    </div>
    <!--/Wrapper End-->
    <div class="modal fade" id="loginModal" style="z-index = 200" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" class="login-form" action="/welcome/login/submit">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control required" id="exampleInputEmail1"
                                placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="pass" class="form-control required" id="exampleInputPassword1"
                                placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary btn-default">Submit</button>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-6"> <button type="button"
                                    class="btn pass-reset  btn-block btn-default">Reset</button></div>
                            <div class="col-xs-6"> <button type="button"
                                    class="btn open-register  btn-block btn-default">Register</button></div>
                        </div>
                    </form>
                    <form method="post" class="reset-form" action="/welcome/forgot_password/reset" style="display:none">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control required" id="exampleInputEmail1"
                                placeholder="Email" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary btn-default">Submit</button>
                        <button type="button" class="btn open-login btn-block btn-default">Login</button>
                    </form>
                    <form method="post" class="otp-form" id="otp-form" action="/welcome/forgot_password/otp"
                        style="display:none">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>OTP</label>
                                <input type="hidden" name="email" value="" id="otpFormEmail">
                                <input type="text" class="form-control required" id="uname" name="otp" placeholder="otp">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control required" id="otpPass1" name="password1"
                                    placeholder="password">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <input type="password" class="form-control required" id="otpPass2" name="password2"
                                    placeholder="password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Reset</button>
                    </form>
                    <form method="post" class="otp-form2" id="otp-form2" action="/welcome/register/otp"
                        style="display:none">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>OTP</label>
                                <input type="hidden" name="email" value="" id="otpFormEmail2">
                                <input type="text" class="form-control required" id="uname" name="otp" placeholder="otp">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <form method="post" style="display:none" class="register-form" action="/welcome/register/submit">
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control required" id="uname" name="fname"
                                        placeholder="First Name">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control required" id="lname" name="lname"
                                        placeholder="Last Name">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control required" onchange="emailchange(this)" name="email"
                                        id="exampleInputEmail1" placeholder="Email">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control required" name="pass" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile No.</label>
                                    <input type="tel" class="form-control required" name="mob" id="exampleInputEmail1"
                                        placeholder="mobile">
                                </div>
                            </div>
							<button type="submit" class="btn btn-default btn-primary">Register Now</button>
							<button type="button" class="btn open-login btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script src="/vendor/bootstrap-material-design/dist/js/bootstrap-material-design.min.js"></script>-->
    <script src="/js/custom.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5d2c6f65bfcb827ab0cbd444/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
    $('.pass-reset').click(function() {
        $('.modal-body form').hide();
        $('.modal-body .reset-form').show();
    });
    $('.open-register').click(function() {
        $('.modal-body form').hide();
        $('.modal-body .register-form').show();
    });
		$('.open-login').click(function() {
        $('.modal-body form').hide();
        $('.modal-body .login-form').show();
    });

	function validateEmail2($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
  }

  function formValidate2(form) {
    var status = true;
    $(form.find('.required').get().reverse()).each(function() {
      if ($(this).is('select') || $(this).is('input')) {
        if ($(this).val() == '') {
          $(this).focus();
          status = false;
        }
        if ($(this).is('input[type="email"]')) {
          var email = $(this).val();
          if (!validateEmail2(email)) {
            status = false;
            $(this).focus();
          }
        }
      }
    });
	if(status == false){
		$.notify("Please Check Inputs", {
        className: 'warn',
        globalPosition: 'right bottom'
      });
	}
    return status;
  }

    $("body").on('submit', '.login-form', function(e) {
        e.preventDefault();
        var form = $(this);
        if (formValidate2(form) == false)
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    window.location.reload();
                    form[0].reset();
                    $('#loginModal').modal('hide');
                    $.notify("Successfuly submitted", {
                        className: 'success',
                        globalPosition: 'right bottom'
                    });
                    if (data['type'] == 'register') {
                        form.hide(300);
                        $('#otp-form').show(300);
                    }
                } else {
                    $.notify("Unsuccessful", {
                        className: 'error',
                        globalPosition: 'right bottom'
                    });
                }
                submitbtn.prop('disabled', false);
            }
        });
    });

    $("body").on('submit', '.register-form', function(e) {
        e.preventDefault();
        var form = $(this);
        if (formValidate2(form) == false)
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    $('#otpFormEmail2').val(data['email']);
                    form[0].reset();
                    $.notify("Successfuly submitted", {
                        className: 'success',
                        globalPosition: 'right bottom'
                    });
                    form.hide(300);
                    $('#otp-form2').show(300);
                } else {
                    $.notify("Unsuccessful", {
                        className: 'error',
                        globalPosition: 'right bottom'
                    });
                }
                submitbtn.prop('disabled', false);
            }
        });
    });

    $("body").on('submit', '.reset-form', function(e) {
        e.preventDefault();
        var form = $(this);
        if (formValidate2(form) == false)
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    $('#otpFormEmail').val(data['email']);
                    $('.otp-form').show(300);
                    $('.reset-form').hide(300);
                } else {
                    $.notify("Unsuccessful", {
                        className: 'error',
                        globalPosition: 'right bottom'
                    });
                }
                submitbtn.prop('disabled', false);
            }
        });
    });

    $("body").on('submit', '.otp-form', function(e) {
        e.preventDefault();
        var form = $(this);
        if (formValidate2(form) == false)
          return;
        if (otpFormValid() == false) {
            return false;
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    $('.otp-form').hide(300);
                    $('.login-form').show(300);
                } else {
                    $.notify("Unsuccessful", {
                        className: 'error',
                        globalPosition: 'right bottom'
                    });
                }
                submitbtn.prop('disabled', false);
            }
        });
    });

    $("body").on('submit', '.otp-form2', function(e) {
        e.preventDefault();
        var form = $(this);
        if (formValidate2(form) == false)
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
                data = JSON.parse(data)
                if (data['status'] == true) {
                    window.location.reload();
                } else {
                    $.notify("Unsuccessful", {
                        className: 'error',
                        globalPosition: 'right bottom'
                    });
                }
                submitbtn.prop('disabled', false);
            }
        });
    });

    function otpFormValid() {
        var val1 = $('#otpPass1').val(),
            val2 = $('#otpPass2').val();
        console.log(val1);
        console.log(val2);

        if ((val1 != val2) || val1.length < 4) {
            $.notify("Check All Feilds", {
                className: 'error',
                globalPosition: 'right bottom'
            });
            return false;
        } else {
            return true;
        }
    }

    function emailchange(m) {
        $('#otp-email').val($(m).val());
    }
    $('.btn-newsletter').click(function() {
        var email = $('#newsletter-email').val();
        $('#newsletter-email').val('');
        $.get("/welcome/newsletter?email=" + encodeURIComponent(email), function(data) {
            $.notify("Email Subscribed Successfully", {
                className: 'success',
                globalPosition: 'right bottom'
            });
        });
    })

		function checkLogin(){
			$.get("/welcome/login/valid", function(data) {
       if (data == true) {
				return true;
       } else{
				 return false;
			 }
     });
		}

    $.material.init();
    </script>
</body>

</html>
