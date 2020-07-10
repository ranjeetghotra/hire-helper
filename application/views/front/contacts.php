<section id="Contact_form">
    <div class="contacts_mape">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13601.565857929065!2d75.49908752477215!3d31.540869639568097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391bb2b916caec39%3A0xcb8003a0f999a89!2sBholath%2C+Punjab!5e0!3m2!1sen!2sin!4v1563465791254!5m2!1sen!2sin" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="booking_form">
            <div class="container-fluid">
              <div class="row">
                <form action="/contactus/submit" class="ajax-form" method="post">
                  <h2>Contact Form</h2>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control required" id="name" name="name" placeholder="Full Name" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control required" id="Email" name="email" placeholder="Email" type="email">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control required" id="Subject" name="subject" placeholder="Subject*" type="text">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control" id="Phone_number" name="phone" placeholder="Phone Number" type="tel">
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="input-group">
                      <textarea class="form-control required" rows="6" name="message" placeholder="message"></textarea>
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn-primary btn-skin" name="submit" type="submit"> Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="about_info">
            <h2>Contact info</h2>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Hire A Helper</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> hireHelper@gmail.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +919876537798</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Form End-->   
  
  
</div>
<script>
$("body").on('submit','.ajax-form',function(e) {
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
        if (data == "") {
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
