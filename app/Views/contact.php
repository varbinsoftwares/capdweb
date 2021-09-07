<?php echo view('common_pages/header.php', array("blacktheme"=>true)); ?>

<section class="breadcrumb-area banner-6 ">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">

                        </div>
                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h1 class="mb30" style="text-align:center;"><span class="text-radius text-light text-animation bg-b">CONTACT</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-page pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 contact2dv">
                <div class="info-wrapr">
                    <h3 class="mb-4">Contact us</h3>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Address:</span>Nagpur, Maharashtra, India</p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Phone:</span> <a href="tel://91-9960877313">+91-9960877313</a></p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Email</span>  <a href="">christianappdevelopers@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Website</span> <a href="#">https://christianappdevelopers.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 m-mt30 pr30 pl30">
                <div class="common-heading text-l">
                    <h2 class="mt0 mb0">Get in touch</h2>
                    <p class="mb60 mt10">We will catch you as early as we receive the message</p>
                </div>
                <div class="form-block">
                    <form id="contactForm" data-toggle="validator" class="shake" action="<?php echo site_url("Contact") ?>" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="name" placeholder="Enter name" name="name" required data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" id="email" placeholder="Enter email" name="email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="tel" id="mobile" placeholder="Enter mobile" name="mobile_no" required data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <select  id="Dtype" name="subject" required>
                                    <option value="Information">Select Requirement</option>
                                    <option value="Mobile app">Mobile app</option>
                                    <option value="Web development">Web development</option>
                                    <option value="Business Automation">Business Automation</option>
                                    <option value="Web Hosting">Web Hosting</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row" style="   margin: 20px 0px;">

                            <div class="recaptcha col-md-7">
                                <div class="captchaarea" style=" ">
                                    <div class="input-group divcenter">
                                        <div class="input-group-prepend">

                                            <img src="<?php echo BASESEURLFUNCTION . ("Contact/createCaptha") ?>" id='captchaimg' style="height: fit-content;" /> 

                                        </div>

                                        <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required="" placeholder="Type Here">

                                    </div>

                                    <small class='details'>Can't read the image?  <b><a href="javascript:void(0);" onclick="refreshCaptcha()">click here</a></b> to refresh</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="form-submit" name="submitdata" class="btn lnk btn-main bg-btn" value="submit">Submit <span class="circle"></span></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="contact-location">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="map-div">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246247!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1611838825763!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function refreshCaptcha()
    {
        var img = document.images['captchaimg'];
        img.src = img.src;
    }
</script>

<?php echo view('common_pages/footer.php'); ?>