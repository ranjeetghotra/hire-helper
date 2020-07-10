<style>
  .extras_services .checkbox-active {
    border-color: #42b1e7;
  }

  .extras_services input {
    display: none;
  }

  .how_often li.radiobox-active {
    color: white;
    background-color: #42b1e7;
  }

  .how_often input {
    display: none;
  }

  .how_often li.radiobox-active a {
    color: white;
  }

  .form-control[readonly] {
    background-color: #fff
  }

  .form-control[readonly]:focus {
    box-shadow: none;
    outline: 0;
    border-color: #dddddd;
  }
</style>
<!--Page Title Section Satrt-->
<div id="page_title">
  <div class="container text-center">
    <div class="panel-heading">book now</div>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Book Now</li>
    </ol>
  </div>
</div>
<!--Page Title Section End-->

<!--Contact Information Start-->
<section id="contact_information">
  <div class="container">
    <form method="post" id="form-2" action="/welcome/user_order">
      <div class="row">

        <!--Left Form Part-->
        <div class="col-md-8 col-sm-8 col-xs-12">

          <!--Contact Information-->
          <div class="contact_information_left ">

            <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
            <div class="booking_form">
              <div class="container-fluid">
                <div class="row">
                  <form method="post">
                    <input type="hidden" id="totalPrice" value="0">
                    <input type="hidden" data-type="" data-price="0" id="couponDiscount" value="0">
                    <input type="hidden" id="servicePrice" value="<?= $row['service_price'] ?>">
                    <input type="hidden" name="serviceid" value="<?= $row['service_id'] ?>">
                    <h2>Contact Information</h2>
                    <p>This information will be used to contact you about your service</p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="uname1" value="<?= $user['user_fname'] ?>" name="firstname" placeholder="First Name" type="text">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <input class="form-control" id="uname2" value="<?= $user['user_lname'] ?>" name="lastname" placeholder="Last Name" type="text">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="uemail" value="<?= $user['user_email'] ?>" name="email" placeholder="Email*" type="email">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <input class="form-control" id="uphone" name="phn" value="<?= $user['user_mobile'] ?>" placeholder="Phone Number*" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <!--Service Address-->
                    <h2>Service Address</h2>
                    <p>Where would you like us to clean?</p>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12 ">
                      <input class="form-control" id="address" name="address" placeholder="Address*" type="text">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="city" name="city" placeholder="City*" value="<?= (isset($address['Block']) ? $address['Block'] : '') ?>" type="text">
                    </div>

                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control" id="pincode" name="pincode" value="<?= (isset($address['Pincode']) ? $address['Pincode'] : '') ?>" placeholder="Postcode*" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <hr><?php if ($row['service_parts'] != '') {
                          $service_parts = (array) json_decode($row['service_parts'], true) ?>
                      <!--Choose Service-->
                      <h2>Choose Your Service</h2>
                      <p>Tell us about your home.</p>
                      <?php foreach ($service_parts as $sp) { ?>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <div class="input-group-addon spart-decrease">
                              <i class="fa fa-minus" aria-hidden="true" id="minus_bed"></i></div>
                            <input type="hidden" class="inputparts" name="parts[<?= $sp['name'] ?>]" data-price="<?= $sp['price'] ?>" data-name="<?= $sp['name'] ?>" value="1">
                            <input type="text" readonly class="form-control" id="bedroom" value="1 <?= $sp['name'] ?>">
                            <div class="input-group-addon spart-increase"><i class="fa fa-plus" aria-hidden="true" id="add_bed"></i></div>
                          </div>
                        </div><?php } ?>
                      <div class="clearfix"></div>
                      <hr><?php } ?>
                    <!--Select Extras Services-->
                    <h2>Select Extras</h2>
                    <p>Adds extra time.</p>
                    <div class="form-group col-md-12 padding-r">
                      <ul class="extras_services">
                        <?php foreach ($subservices as $subs) { ?><li><a>
                              <div class="services_img my-checkbox"><input type="checkbox" name="extra_service[]" value="<?= $subs['cservice_id'] ?>" data-price="<?= $subs['c_price'] ?>"><img src="/<?= $subs['c_icon'] ?>" alt="booking"></div>
                              <br>
                              <?= $subs['c_name'] ?>
                            </a></li><?php } ?>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <!--Select Date Time-->
                    <h2>When would you like us to come?</h2>
                    <p></p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <div class='input-group date' id='datetimepicker1'>
                        <input type='date' class="form-control">
                        <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 padding-r">
                      <div class='input-group date' id='datetimepicker3'>
                        <input type='time' class="form-control">
                        <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <!--How often?-->
                    <h2>How often?</h2>
                    <p>it's all about matching you with the perfect cleaner for your home.<br>
                      Scheduling is flexible. Cancel or reschedule anytime.</p>
                    <div class="form-group col-md-12 padding-r">
                      <input type="hidden" name="how_opten" id="how_opten">
                      <ul class="how_often">
                        <li class="my-radiobox"><input name="often" type="radio" value="1" data-value="1 time service"><a>1 time service</a></li>
                        <li class="my-radiobox"><input name="often" type="radio" value="7" data-value="Every week"><a>Every week</a></li>
                        <li class="my-radiobox"><input name="often" type="radio" value="14" data-value="Every 2 weeks"><a>Every 2 weeks</a></li>
                        <li class="my-radiobox"><input name="often" type="radio" value="28" data-value="Every 4 weeks"><a>Every 4 weeks</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <!--Promo Code-->
                    <div class="form-group col-md-8 col-sm-8 col-xs-12">
                      <input class="form-control" id="promo-code" onkeyup="this.value = this.value.toUpperCase();" placeholder="Promo code (optional)" style="text-transform:uppercase" type="text">
                      <input type="hidden" name="code" value="" id="promo-code-hidden">
                    </div>
                    <div class="form-group col-md-4 col-sm-4 col-xs-12 padding-r">
                      <button class="btn btn-primary promo_apply" name="Apply" type="button"> Apply </button>
                    </div>
                    <div id="promoResult"></div>
                    <div class="clearfix"></div>
                    <hr>

                    <div class="booking_summary hidden-lg  hidden-md hidden-sm">
                      <h1>Booking Summary</h1>
                      <ul class="summary">
                        <li><i class="fa fa-home" aria-hidden="true"></i><?= $row['service_name'] ?></li>
                        <li class="date"><i class="fa fa-calendar" aria-hidden="true"></i><span>Cleaning date</span></li>
                        <li class="often"><i class="fa fa-refresh" aria-hidden="true"></i><span>Every 2 weeks</span></li>
                      </ul>
                      <div class="price_totle">
                        <div class="subtotal">
                          <div class="heading text-left">SUBTOTAL</div>
                          <div class="price text-right subTotal icon-inr">---</div>
                        </div>
                        <div class="subtotal">
                          <div class="heading text-left">DISCOUNT</div>
                          <div class="price text-right discount icon-inr">---</div>
                        </div>
                        <div class="subtotal">
                          <div class="heading text-left">TOTAL:</div>
                          <div class="price text-right grandTotal icon-inr">---</div>
                        </div>
                      </div>
                    </div>
                    <p>By clicking the Book Now button you are agreeing to our Terms of Service and Privacy Policy.</p>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <button class="btn btn-primary btn-skin" id="rzp-button1" type="button">Pay and Contiue</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Contact Information-->

        </div>
        <!--/Left Form Part-->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="contact_information_right text-center">
            <div class="booking_summary">
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\time3.png" alt="time3"></div>
                <div class="box_content">
                  <h4>SAVES YOU TIME</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\Safety3.png" alt="Safety3"></div>
                <div class="box_content">
                  <h4>For Your Safety</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\best3.png" alt="best3"></div>
                <div class="box_content">
                  <h4>Best-Rated Professionals</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\Equipped3.png" alt="Equipped3"></div>
                <div class="box_content">
                  <h4>We Are Well Equipped</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\touch3.png" alt="touch3"></div>
                <div class="box_content">
                  <h4>Always In Touch</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="icon_box_one">
                <div class="icons"><img src="/images\booking\cash3.png" alt="cash3"></div>
                <div class="box_content">
                  <h4>Cash-Free Facility</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                </div>
              </div>
              <div class="box_btn">
                <button class="btn btn-primary booknow btn-skin">LEARN MORE</button>
              </div>
            </div>
            <div class="booking_summary hidden-xs">
              <h1>Booking Summary</h1>
              <ul class="summary">
                <li><i class="fa fa-home" aria-hidden="true"></i><?= $row['service_name'] ?></li>
                <li class="date"><i class="fa fa-calendar" aria-hidden="true"></i><span>Cleaning date</span></li>
                <li class="often"><i class="fa fa-refresh" aria-hidden="true"></i><span>Every 2 weeks</span></li>
              </ul>
              <div class="price_totle">
                <div class="subtotal">
                  <div class="heading text-left">SUBTOTAL</div>
                  <div class="price text-right subTotal icon-inr">---</div>
                </div>
                <div class="subtotal">
                  <div class="heading text-left">DISCOUNT</div>
                  <div class="price text-right discount icon-inr">---</div>
                </div>
                <div class="subtotal">
                  <div class="heading text-left">TOTAL:</div>
                  <div class="price text-right grandTotal icon-inr">---</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!--Contact Information End-->
<script>
  $('.my-checkbox').click(function() {
    var that = this;
    $(that).find("input").click();
    if ($(that).find("input").prop("checked") == true) {
      $(that).addClass('checkbox-active');
    } else {
      $(that).removeClass('checkbox-active');
    }
    priceCalc();

  });
  $('.my-radiobox').click(function() {
    var that = this;
    console.log('ok');
    $('.my-radiobox').removeClass('radiobox-active');
    $(that).find("input").prop('checked', true);
    $(that).addClass('radiobox-active');
    $('.summary .often span').html($("input[name='often']:checked").data('value'));
  });
  $('.spart-increase').click(function() {
    var that = this;
    var hiddenInput = $(that).parent().find("input[type=hidden]");
    hiddenInput.val(eval(hiddenInput.val()) + 1);
    $(that).parent().find("input[type=text]").val(hiddenInput.val() + ' ' + hiddenInput.data('name'));
    priceCalc();
  });
  $('.spart-decrease').click(function() {
    var that = this;
    var hiddenInput = $(that).parent().find("input[type=hidden]");
    if (eval(hiddenInput.val()) > 1) {
      hiddenInput.val(eval(hiddenInput.val()) - 1);
      $(that).parent().find("input[type=text]").val(hiddenInput.val() + ' ' + hiddenInput.data('name'));
    }
    priceCalc()
  });

  function priceCalc() {
    var price = 0,
      discount = 0,
      discountType = $('#couponDiscount').data('type'),
      discountValue = $('#couponDiscount').val();
    price = eval($('#servicePrice').val());
    $("input[name='extra_service[]']:checked").each(function() {
      price += eval($(this).data('price'));
    })
    $(".inputparts").each(function() {
      price += eval($(this).val()) * eval($(this).data('price'));
    })

    discount = (discountType == 'flat' ? discountValue : (price / 100 * discountValue));
    $('#couponDiscount').data('price', discount);
    //alert(discountType);
    $('.subTotal').html(price);
    $('.discount').html(discount);
    $('.grandTotal').html(price - discount);

    //$('#couponDiscount').val(price);
    $('#totalPrice').val(price);
    //alert(price);
  }

  $('.promo_apply').click(function() {
    $.get("/welcome/promocode/" + encodeURIComponent($('#promo-code').val()), function(data) {
      data = JSON.parse(data);
      if (data.status == true) {
        $('#couponDiscount').val(data.discount);
        $('#couponDiscount').data('type', data.type);
        var d = (data.type == 'flat' ? 'Rupees ' + data.discount : data.discount + '%')
        $('#promoResult').html('Promo Code <b>' + $('#promo-code').val() + '</b> for ' + d + ' discount are applied');
        $('#promo-code-hidden').val($('#promo-code').val());
      } else {
        $('#couponDiscount').val('0');
        $('#couponDiscount').data('type', '');
        $('#promo-code-hidden').val('');
        $('#promoResult').html('Invalid Promo Code');
      }
      priceCalc();
    });

  });
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $('#rzp-button1').click(function(e) {
    e.preventDefault();
    var options = {
      "key": "rzp_test_7iSGJ7YiJLEuUn", // Enter the Key ID generated from the Dashboard
      "amount": (eval($('#totalPrice').val()) - eval($('#couponDiscount').data('price'))) * 100, // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.
      "currency": "INR",
      "name": "Hire a Helper",
      "description": "Service Booking",
      "image": "/images/h.png",
      //"order_id": "order_9A33XWu170gUtm",//Order ID is generated as Orders API has been implemented. Refer the Checkout form table given below
      "handler": function(response) {
        orderFinish(response)
      },
      "prefill": {
        "name": $('#uname1').val() + " " + $('#uname2').val(),
        "email": $('#uemail').val(),
        "contact": eval($('#uphone').val()),
      },
      "theme": {
        "color": "#45ade7"
      }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
  });

  function orderFinish(response) {
    $('#form-2').submit();
    console.log(response.razorpay_payment_id);
  }
  priceCalc();
</script>