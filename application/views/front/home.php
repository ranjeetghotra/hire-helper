 <!--Banner Start-->
 <section id="banner" class="home-one">
   <div class="container text-center parallax-section">
     <div class="row text-center">
       <div class="col-md-12">
         <h1 class="panel-heading">Ready to Live Smarter?</h1>
         <p class="caption">Book Expert home cleaners and handymen at a moment's notice. just pick a<br>
           time and we'll do the rest</p>
         <form class="form-inline book-now-home" id="form-1" action="" method="post">
           <div class="form-group">
             <div class="input-group">
               <div class="dropdown category-dropdown text-left"> <a data-toggle="dropdown" href="#"><i class="fa fa-list" aria-hidden="true"></i> <span class="change-text" id="serviceText" style="white-space:nowrap">Select Service</span> <i class="fa fa-caret-down pull-right" aria-hidden="true"></i> </a>
                 <ul class="dropdown-menu category-change">
                   <?php foreach ($services as $s) {?>
                     <li data-url="<?=$s['service_url']?>"><a data-url="<?=$s['service_url']?>"><?=$s['service_name']?></a></li>
                   <?php }?></ul>
               </div>
             </div>

           </div>
           <div class="form-group">
             <div class="input-group location-code">
               <input type="text" class="form-control zipcode" value="<?=$postal?>" id="zipcode" name="postal" placeholder="Pincode">
             </div>
           </div>
           <button type="button" id="form-btn-1" class="btn btn-primary booknow btn-skin">Book now</button>

         </form>
       </div>
     </div>
   </div>
 </section>

 <!--/Banner End-->

 <!--How it works Section Satrt-->
 <section id="howitwork">
   <div class="container text-center">
     <h1 class="panel-heading">How it works</h1>
     <div class="row">
       <div class="col-md-3 col-xs-offset-0 " style="padding:15px 0"> <img src="images\Book.png" alt="Book" class="img-circle htw">
         <h4>Book</h4>
         <p>Select the date and time like<br>
           your perofessional to show up</p>
       </div>
       <div class="col-md-1 hidden-xs hidden-sm"> </div>
       <div class="col-md-3 " style="padding:15px 0"> <img src="images\Schedule.png" alt="Schedule" class="img-circle">
         <h4>Schedule</h4>
         <p>Certified Taskers comes over<br>
           and done your task</p>
       </div>
       <div class="col-md-1 hidden-xs hidden-sm"> </div>
       <div class="col-md-3" style="padding:15px 0"> <img src="images\Relax.png" alt="Relax" class="img-circle">
         <h4>Relax</h4>
         <p>your task is completed to your<br>
           satisfaction - guranteed</p>
       </div>
     </div>
   </div>
 </section>
 <!--How it works Section End-->

 <!--Our services Section Satrt-->
 <section id="services">
   <div class="container text-center">
     <h1 class="panel-heading">Our services</h1>
     <ul class="services-list">
       <?php foreach ($services as $s) {?>
         <li><a href="/<?=$s['service_url']?>">
             <img style="margin:auto; height:49px;" class="img-responsive" src="/<?=$s['service_icon']?>" alt="cleaning"><br>
             <?=$s['service_name']?></a></li>
       <?php }?>
     </ul>
   </div>
 </section>
 <!--Our services Section End-->

 <!--Trust Security Section Satrt-->
 <section id="trust-security">
   <div class="container text-center">
     <h1 class="panel-heading">Your Trust and Security</h1>
     <div class="row text-left">
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\time.png" alt="SAVES"></div>
           <div class="box_content">
             <h4>SAVES YOU TIME</h4>
             <p>We helps you live smarter, giving you time to focus on what's most important.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\Safety.png" alt="Safety"></div>
           <div class="box_content">
             <h4>For Your Safety</h4>
             <p>All of our Helpers undergo rigorous identity checks and personal interviews. Your safety is even our concern too.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\best.png" alt="Best"></div>
           <div class="box_content">
             <h4>Best-Rated Professionals</h4>
             <p>Our experienced taskers perform their tasks with dedication and perfection. We appreciate your reviews about the service.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\Equipped.png" alt="Equipped"></div>
           <div class="box_content">
             <h4>We Are Well Equipped</h4>
             <p>Let us know if you have any specific equirement, otherwise our guys carry their own supplies.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\touch.png" alt="Always"></div>
           <div class="box_content">
             <h4>Always In Touch</h4>
             <p>Book your service online on one tap, keep a track of your service status and also keep in touch with your Helper.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
       <div class="col-md-4 col-sm-6 col-xs-12">
         <div class="icon_box_one">
           <div class="icons"><img src="images\cash.png" alt="cash"></div>
           <div class="box_content">
             <h4>Cash-Free Facility</h4>
             <p>Pay through secure online mode only after your job is done.</p>
             <a href="#" class="read-more">Read More <span class="glyphicon glyphicon-menu-right"></span></a>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--Trust Security Section End-->

 <!--Our Numbers Satrt-->
 <section id="numbers">
   <div class="container text-center">
     <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-6">
         <!--counter box-->
         <div class="counter_box text-center">
           <div class="counter_icon"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>
           <div class="counter_number counter"><span class="stat-count">100</span>%</div>
           <h4 class="counter_name">Quality</h4>
         </div>
         <!--counter box end-->
       </div>
       <div class="col-md-3 col-sm-6 col-xs-6">
         <!--counter box-->
         <div class="counter_box text-center">
           <div class="counter_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
           <div class="counter_number counter"><span class="stat-count">2500</span>+</div>
           <h4 class="counter_name">People Working</h4>
         </div>
         <!--counter box end-->
       </div>
       <div class="col-md-3 col-sm-6 col-xs-6">
         <!--counter box-->
         <div class="counter_box text-center">
           <div class="counter_icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></div>
           <div class="counter_number counter"><span class="stat-count">8</span> Years</div>
           <h4 class="counter_name">Years Experience</h4>
         </div>
         <!--counter box end-->
       </div>
       <div class="col-md-3 col-sm-6 col-xs-6">
         <!--counter box-->
         <div class="counter_box text-center">
           <div class="counter_icon"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
           <div class="counter_number counter"><span class="stat-count">900</span>+</div>
           <h4 class="counter_name">Happy Smiles</h4>
         </div>
         <!--counter box end-->
       </div>
     </div>
   </div>
 </section>
 <!--/Our Numbers Satrt End-->

 <!--Features Section Satrt-->
 <section id="features">
   <div class="container text-center features-section">
     <div class="row text-left">
       <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <img src="images\qualit_work.png" alt="Meet the Hire Pros"> </div>
       <div class="col-md-6 col-sm-12 col-xs-12">
         <h2><u>Meet the Hire Pros:-</u></h2>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>Experienced Technisions</h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>On Time and Quality Work</h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>Vetted and background-checked professionals </h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>Backed by the Handy Happiness Guarantee. </h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>Affordable pricing</h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>No Travelling Fees</h4>
           </div>
         </div>
         <div class="icon_box_one"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
           <div class="box_content">
             <h4>Friendly 24/7 customer service</h4>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--Features Section End-->

 <!--Testimonails Section Satrt-->
 <section id="testimonails">
   <div class="container text-center">
     <h1 class="panel-heading">Testimonails</h1>
     <div class="row">
       <div class="col-md-12">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel ">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
           </ol>
           <!-- Wrapper for slides -->
           <div class="carousel-inner text-center">
             <div class="item active">
               <div class="avatar"><img class="img-circle" src="/images/clinte1.png" alt="Client 1"></div>
               <h3>Ranjeet Singh</h3>
               <strong>Hire a Helper</strong>
               <p>Hi my name is Ranjeet and I've been a home cleaner for 3 years. I clean small and large homes also Airbnb rentals. I look forward to making your life a little bit easier.
             </div>

             <div class="item">
               <div class="avatar"><img class="img-circle" src="/images/testimonails2.png" alt="Client 2"></div>
               <h3>Geeta Arora</h3>
               <strong>Hire A Helper</strong>
               <p>I'm Geeta! I have over 8 years of experience in housekeeping. My goal is to delight my customers by providing a deep, thorough cleaning. Dusted surfaces, baseboards, ceiling fans, and polished appliances are a big deal to me. I pay close detail to all the nooks and cranies!

             </div>

           </div>

         </div>
         <!-- Controls --> <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="fa fa-angle-right"></span> </a>
       </div>
     </div>
   </div>
   </div>
 </section>
 <!--Testimonails Section End-->


 <!--Features Section End-->
<?php /*?>
<!--Trusted Section Satrt-->
<section id="trusted">
<div class="container text-center">
<div class="row text-left">
<div class="col-md-2 col-sm-3 col-xs-12">
<h3 class="panel-heading">TRUSTED BY</h3>
</div>
<div class="col-md-10 col-sm-12 col-xs-12">
<ul class="trusted_logo owl-carousel" id="trusted-slider">
<li><img src="images\Trusted_logo3.png" alt="Logo 3"></a></li>
<li><img src="images\Trusted_logo1.png" alt="Logo 4"></a></li>
<li><img src="images\Trusted_logo1.png" alt="Logo 1"></a></li>
<li><img src="images\Trusted_logo2.png" alt="Logo 2"></a></li>
<li><img src="images\Trusted_logo2.png" alt="Logo 5"></a></li>
<li><img src="images\Trusted_logo2.png" alt="Logo 6"></a></li>
<li><img src="images\Trusted_logo3.png" alt="Logo 7"></a></li>
<li><img src="images\Trusted_logo1.png" alt="Logo 8"></a></li>
</ul>
</div>
</div>
</div>
</section><?php*/?>
 <!--Trusted Section End-->

 <!--Call To Action Start-->
 <section id="call-to-action">
   <div class="container free_consultation">
     <div class="row">
       <div class="col-md-8 col-sm-8 col-xs-12 text-left">
         <h2>Want to Hire a Team For Shifting?</h2>
         <p>we are always ready to welcome you!</p>
       </div>
       <div class="col-md-4 col-sm-4 col-xs-12 m-text-center text-right"> <a class="btn btn-primary btn-outline">Hire A Team</a> </div>
     </div>
   </div>
 </section>
 <!--Call To Action End-->
 <script>
   //Preload images first
   $.fn.preload = function() {
     this.each(function() {
       $('<img/>')[0].src = this;
     });
   }
   var images = Array(
     "/images/description/lur.jpg",
     "/images/description/bnnr.jpg",
     "/images/description/plumbingbnr.png",
     "/images/description/vhicle2.jpg",
     "/images/description/cln.jpg",
   );

   $([images[0], images[5], images[2], images[3],images[4],,images[1]]).preload();

   // Usage:

   var currimg = 0;

   $(document).ready(function() {

     function loadimg() {

       $('#banner').animate({
         opacity: 1
       }, 500, function() {

         //finished animating, minifade out and fade new back in
         $('#banner').animate({
           opacity: 0.7
         }, 100, function() {

           currimg++;

           if (currimg > images.length - 1) {

             currimg = 0;

           }

           var newimage = images[currimg];

           //swap out bg src
           $('#banner').css("background-image", "url(" + newimage + ")");

           //animate fully back in
           $('#banner').animate({
             opacity: 1
           }, 400, function() {

             //set timer for next
             setTimeout(loadimg, 5000);

           });

         });

       });

     }
     setTimeout(loadimg, 5000);

   });

   $('.category-change li').click(function() {
     $('#serviceText').html($(this).html());
     $('#form-1').attr('action', '/' + $(this).data('url'))
   });
   $('#form-btn-1').click(function(e) {
     e.preventDefault;
     $.get("/welcome/login/valid", function(data) {
       if (data == true) {
         $('#form-1').submit();
         window.location.href = $(that).data('href');
       } else {
         $('#loginModal').modal('show');
       }
     });
   })
 </script>
