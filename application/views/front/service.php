
  <!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">Our services</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Services</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Service Page Start-->
  <section id="service_page">
    <div class="container text-center">
      <div class="row">
        <?php foreach($services as $s){ ?>
          <div class="col-md-3 col-sm-6 col-xs-12"><div style="height:100%" class="srevice_img">
          <a href="/<?=$s['service_url']?>">
          <img style="object-fit: cover; transform: scale(0.8); border-radius: 10px" src="/<?=($s['service_image']!=''?$s['service_image']:'images/service/default.png')?>" class="img-circle htw" alt="cleaning"></a>
          <h4><a href="/<?=$s['service_url']?>"><?=$s['service_name']?></a></h4>
          <p></p></div>
        </div><?php } ?>
      </div>
    </div>
  </section>
  <!--Service Page End--> 
  
  <!--Service Provider Satrt-->
  
  <section id="service_provider">
    <div class="container text-center">
      <h1 class="panel-heading">Worldwide largest home service provider</h1>
      <div class="row">
        <div class="col-md-12"> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">20000</span>+</div>
              <h4 class="counter_name">HAPPY CUSTOMERS</h4>
            </div>
          </div>
          <!--counter box end--> 
          <!--counter box-->
          <div class="counter_box">
            <div class="counter_number_right">
              <div class="counter_number counter"><span class="stat-count">10000</span>+</div>
              <h4 class="counter_name">SERVICE PROVIDERS</h4>
            </div>
          </div>
          <!--counter box end--> 
        </div>
      </div>
    </div>
  </section>
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
  <!--/Service Provider Satrt End--> 
  
  <!--Testimonails Section Satrt-->
  <!-- <section id="testimonails">
    <div class="container text-center">
      <h1 class="panel-heading">Testimonails</h1>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel "> Indicators -->
            <!-- <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol> -->
            <!-- Wrapper for slides -->
            <!-- <div class="carousel-inner text-center">
              <div class="item active">
                <div class="avatar"><img class="img-circle" src="/images\clinte1.png" alt="clinte1"></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
              <div class="item">
                <div class="avatar"><img class="img-circle" src="/images\testimonails2.png" alt="clinte2"></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
              <div class="item">
                <div class="avatar"><img class="img-circle" src="/images\testimonails3.png" alt="clinte3"></div>
                <h3>Kevin Austin</h3>
                <strong>Lorem Ipsum</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, a</p>
              </div>
            </div> -->
            <!-- Controls --> 
            <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="fa fa-angle-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="fa fa-angle-right"></span> </a> </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--Testimonails Section End--> 
  