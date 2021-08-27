<?php echo view('common_pages/header.php');
?>
<style type="text/css">
.work-card img{
  height: 100px;
  width: 100px;
}
.work-card img:hover{

  opacity:0.5;
  color:red;

}
.items img{
  padding: 20px;
  height: 100px;
  width:100px;
}

</style>


<section class="hero-card-web bg-gradient13 shape-bg3">
  <div class="hero-main-rp container-fluid">
    <div class="row">
      <div class="col-lg-5">
        <div class="hero-heading-sec" style="padding:20px">
          <h3 class="wow fadeIn" data-wow-delay="0.3s" style="color: white; font-size: 50px;"><span>Our Expert team of designers and developers. </span> <span>Ready to transform your business. <br></span><span>  let's get in touch.</span></h3>
          <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for transforming and innovating businesses.</p>
          <a href="service" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s">Our Services<i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>

        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">

          <div class="title-hero-oth">
            <p>We Provide Web Solutions<span>at Affordable price</span></p>
          </div>
        </div>
        <div class="hero-right-scmm" style="padding : 20px;">
          <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
            <div class="owl-carousel service-card-prb">

              <?php
              $service_card_loop = [
                array("background"=>"card-bg-a", "title"=>"<span>Mobile</span> Applications", "image"=>"service/app-develop.png"),
                 array("background"=>"card-bg-b", "title"=>"<span>Web</span> Development", "image"=>"service/web_dev.png"),
                 array("background"=>"card-bg-c", "title"=>"<span>Business</span> Automation", "image"=>"about/about-service.png"),
                 array("background"=>"card-bg-d", "title"=>"<span>Web</span> Hosting", "image"=>"service/webhost.png"),
                  array("background"=>"card-bg-d", "title"=>"<span>SEO & Digital Marketing</span>", "image"=>"service/seo.png"),

              ];
              foreach($service_card_loop as $key=>$value){
                ?>
                 <div class="service-slide <?php echo $value["background"];?> data-tilt" data-tilt-max="5" data-tilt-speed="1000">
                <a href="service">
                  <div class="service-card-hh">
                    <div class="image-sr-mm">
                      <img alt="custom-sport" src="public/assets/images/<?php echo $value["image"];?>">
                    </div>
                    <div class="title-serv-c"><?php echo $value["title"];?></div>
                  </div>
                </a>
              </div>

                <?php
              }
              ?>
        
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="work-category pad-tb">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <div class="common-heading">
          <span>We Are Creative Agency</span>
          <h1 class="mb30"><span class="text-second">Top-rated</span> Mobile App Development</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <div class="work-card-set">
          <div class="icon-set wow fadeIn" data-wow-delay=".2s">
            <div class="work-card cd1">
              <div class="icon-bg"><img  src="public/assets/images/shop/graph.png" alt="Industries" /></div>
              <span>BUSINESS APP</span>

            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".4s">
            <div class="work-card cd7">
              <div class="icon-bg"><img src="public/assets/images/shop/calculation.png" alt="Industries" /></div>
              <span>EDUCATION APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".6s">
            <div class="work-card cd3">
              <div class="icon-bg"><img src="public/assets/images/shop/theater.png" alt="Industries" /></div>
              <span>ENTERTAINMENT APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay=".8s">
            <div class="work-card cd4">
              <div class="icon-bg"><img src="public/assets/images/shop/money-bag.png" alt="Industries" /></div>
              <span>FINANCE APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1s">
            <div class="work-card cd5">
              <div class="icon-bg"><img src="public/assets/images/shop/music-player.png" alt="Industries" /></div>
              <span>MUSIC APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
            <div class="work-card cd6">
              <div class="icon-bg"><img src="public/assets/images/shop/picture.png" alt="Industries" /></div>
              <span>PHOTO-VIDEO APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
            <div class="work-card cd2">
              <div class="icon-bg"><img src="public/assets/images/shop/travel.png" alt="Industries" /></div>
              <span>TRAVEL APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
            <div class="work-card cd8">
              <div class="icon-bg"><img src="public/assets/images/shop/groceries.png" alt="Industries" /></div>
              <span>FOOD AND DRINK APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
            <div class="work-card cd4">
              <div class="icon-bg"><img src="public/assets/images/shop/pray-1.png" alt="Industries" /></div>
              <span>RELIGIOUS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2s">
            <div class="work-card cd10">
              <div class="icon-bg"><img src="public/assets/images/shop/boy.png" alt="Industries" /></div>
              <span>KIDS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
            <div class="work-card cd11">
              <div class="icon-bg"><img src="public/assets/images/shop/doctor.png" alt="Industries" /></div>
              <span>DOCTORS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
            <div class="work-card cd12">
              <div class="icon-bg"><img src="public/assets/images/shop/fitness.png" alt="Industries" /></div>
              <span>FITNESS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
            <div class="work-card cd9">
              <div class="icon-bg"><img src="public/assets/images/shop/text-lines.png" alt="Industries" /></div>
              <span>NEWS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2s">
            <div class="work-card cd2">
              <div class="icon-bg"><img src="public/assets/images/shop/soccer.png" alt="Industries" /></div>
              <span>SPORTS APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
            <div class="work-card cd5">
              <div class="icon-bg"><img src="public/assets/images/shop/crm-1-1.png" alt="Industries" /></div>
              <span>CRM APP</span>
            </div>
          </div>
          <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
            <div class="work-card cd7">
              <div class="icon-bg"><img src="public/assets/images/shop/share.png" alt="Industries" /></div>
              <span>SOCIAL APP</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><h4 style="text-align:center;">Contact for<a href="contact"> more...</a></h4>
  </div>
</section>



<section class="about-sec-rpb pad-tb">
  <div class="container">
    <div class="row justify-content-center text-center">

      <div class="col-lg-7">
        <div class="common-heading">

          <span>Fast and best services</span>
          <h1 class="mb30"><span class="text-radius text-light text-animation bg-b">About Us</span></h1>
          <p style="font-size: 20px; font-style: italic;">All apps begin with an idea. But how do you transform your idea into a real-world app? You don’t, we do.
            Did you know we have completed nearly 100 app projects for clients around the world! With all that experience, we know just what you need.<br><br>
            We care about your idea, and we want to see it grow and succeed. That’s why we don’t stop our partnership after release, we continue to offer insights and consultations to help you increase downloads and generate revenue. With a free consultation with an App Strategy Consultant, you can find out exactly how we can make your app a success.
          </p><br><br>

          <div >
            <img height="120px" width="180px"  src="public/assets/images/logo1.png">
          </div><br><br>

        </div>

      </div>
      <div class="col-lg-5 col-sm-6">

        <div class="img-responsive" data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img height="600px" width="450px" src="public/assets/images/service/mob1.png" alt="image" class="img-fluid"></div>
      </div>
    </div>
  </div>
</section>


<section class="service-section-prb pad-tb bg-gradient4 ">
  <h2 style="text-align: center;" class="mb30"><span class="text-radius text-light text-animation bg-b">Our Core Design & Development Services</span></h2>
  <div class="container">
    <div class="row upset">




      <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".4s">
        <div class="service-sec-list srvc-bg-nx srcl1">
          <img src="public/assets/images/icons/development.svg" alt="service">
          <h5 class="mb10">Web Development</h5>
          <ul class="-service-list">
            <li> <a href="#">PHP</a> </li>
            <li> <a href="#">Python</a> </li>
            <li> <a href="#">Java</a> </li>
            <li> <a href="#">My SQL</a></li>
          </ul>
          <p>Our team of web development experts team up to create user-friendly, informative, and attention seeking interfaces that are appealing to your target audiences and compel them to keep coming back.</p>
        </div>
      </div>


      <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus  wow fadeInUp" data-wow-delay=".8s">
        <div class="service-sec-list srvc-bg-nx srcl3">
          <img src="public/assets/images/icons/app.svg" alt="service">
          <h5 class="mb10">Mobile App Development</h5>
          <ul class="-service-list">
            
            <li> <a href="#">iOS</a> </li>
            <li> <a href="#">Android</a></li>
            <li> <a href="#">Flutter</a></li>
            <li> <a href="#">Ionic</a></li>
            <li> <a href="#">ReactNative</a></li>
          </ul>
          <p>We offer a unique expertise in Mobile Application Development for various platforms. We strive to cover each and every requirement that our customers mention and explore new avenues in mobile apps sphere.</p>
        </div>
      </div>
      <hr>
      <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".6s">
        <div class="service-sec-list srvc-bg-nx srcl2">
          <img height="120px" width="120px" src="public/assets/images/icons/business.svg" alt="service">
          <h5 class="mb10">Business Automation</h5>
          <ul class="-service-list">
            <li> <a href="#">ERP </a> </li>
            <li> <a href="#">CRM</a> </li>
            <li> <a href="#">LMS </a> </li>
            <li> <a href="#">HRM</a></li>
          </ul>
          <p>Your BPM (Business Process Management) solution must accommodate the entire range of work and support human driven system-driven, structured, unstructured and hybrid process.</p>
        </div>
      </div>
      <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay="1s">
        <div class="service-sec-list srvc-bg-nx srcl4">
          <img src="public/assets/images/icons/seo.svg" alt="service">
          <h5 class="mb10">Web Hosting</h5>
          <ul class="-service-list">
            <li> <a href="#">cPanel </a> </li>
            <li> <a href="#">WHM </a> </li>
            <li> <a href="#"> Linux </a></li>
            <li> <a href="#"> Windows </a></li>
          </ul>
          <p>All our hosting accounts come with a control panel which gives you total control of your web space, domain. Now create emails, install a blog, add sub domains and more with a click of the mouse.</p>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="portfolio-section ">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-8">
        <div class="common-heading">
          <h2 class="mb0">Our Technologies</h2><br><br>
        </div>
      </div>
    </div>
    <div class="weworkfor ">
      <div class="container">
        <div class="logo-weworkfor owl-carousel">
          <div class="items"><img src="public/assets/images/process/cordova.png" alt="Technologies" class="img100w"></div>
          <div class="items"><img src="public/assets/images/process/android.png" alt="Technologies" class="img100w">
          </div>
           <div class="items"><img height="80px" width="80px" src="public/assets/images/process/flutter.png" alt="Technologies" class="img100w"></div>
    
          <div class="items"><img src="public/assets/images/process/apple.png" alt="Technologies" class="img100w"></div>
          <div class="items"><img src="public/assets/images/process/php.png" alt="Technologies" class="img100w"></div>
          <div class="items"><img src="public/assets/images/process/mysql.png" alt="Technologies" class="img100w"></div>
         
        </div>
      </div>
    </div>
  </div>
</section>






<section class="our-office bg-gradient10" style="padding:40px; ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="common-heading">

          <span>Our Location</span>
          <h2>Our Office</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center upset shape-numm">

      <div class="col-lg-6 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
        <div class="office-card">
          <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
            <img src="public/assets/images/location/india.png" alt="sydney" class="img-fluid" />
          </div>
          <div class="office-text text-center">
            <h4>India</h4>
            <p>&nbsp; H B Nagar Plot No. 63 Nagpur,<br>
               Maharashtra, India
            </p>
            <a href="https://www.google.co.in/maps/" target="blank" class="btn-outline">View on Map</a>

          </div>
        </div>
      </div>
      <div class="col-lg-5 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">

        <div class="office-text mt-0" style="margin-left: 60px;">

          <div  data-tilt data-tilt-max="4" data-tilt-speed="1000">
            <img width="300px" src="public/assets/images/location/download.jpg" alt="sydney" class="img-fluid" />
          </div>


        </div>
      </div>
    </div>
  </section>
  <?php echo view('common_pages/footer.php');
?>