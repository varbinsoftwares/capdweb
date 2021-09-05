<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
        <meta charset="utf-8" />
        <title>Christian App Developer</title>
        <meta name="description" content="All apps begin with an idea. But how do you transform your idea into a real-world app? You don’t, we do. Web Development is an art. CHRISTIAN APP DEVELOPERS undertakes website solutions and designing with great functionality and looks.">
        <meta name="keywords" content="Mobile app development, web development, business automation, web hosting">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#2e2a8f">

        <link href="<?php echo base_url("public/assets/images/logo1.png"); ?>" rel="icon">

        <link href="<?php echo base_url("public/assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("public/assets/css/plugin.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("public/assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"); ?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <link href="<?php echo base_url("public/assets/css/style.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("public/assets/css/responsive.css"); ?>" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>

        <div class="onloadpage" id="page_loader">
            <div class="pre-content">
                <div class="logo-pre"><img src="<?php echo base_url("public/assets/images/logo1.png");?>" alt="Christian app developer Logo" class="img-fluid" /></div>
                <div class="pre-text- text-radius text-light text-animation bg-b">Christian App Developer - Are 2 Seconds Away. Have Patience</div>
            </div>
        </div>


        <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
            <div class="container-fluid m-pad">
                <div class="menu-header">
                    <div class="dsk-logo"><a class="nav-brand" href="<?php echo site_url("/"); ?>">
                            
                            <img  src="<?php echo $blacktheme ? base_url("public/assets/images/logo.png") : base_url("public/assets/images/white-logo.png");?>" alt="Logo" class="mega-white-logo" />
                            <img  src="<?php echo base_url("public/assets/images/logo.png");?>" alt="Logo" class="mega-darks-logo" />
                        </a>
                    </div>
                    <div class="custom-nav" roll="navigation">
                        <ul class="nav-list">
                            <li class=" rpdropdown">
                                <a href="<?php echo site_url("home")?>" class="menu-links <?php echo $blacktheme ? "blacktextitem":"" ?>" >Home</a>

                            </li>
                            <li class="rpdropdown">
                                <a href="<?php echo site_url("service")?>" class="menu-links <?php echo $blacktheme ? "blacktextitem":"" ?>">Services</a>

                            </li>

                            <li class=" rpdropdown">
                                <a href="<?php echo site_url("about")?>" class="menu-links <?php echo $blacktheme ? "blacktextitem":"" ?>">About Us</a>

                            </li>
                            <li>
                            <li class= "rpdropdown">
                                <a href="<?php echo site_url("contact-us")?>" class="menu-links <?php echo $blacktheme ? "blacktextitem":"" ?>">Contact Us</a>

                            </li>
                        </ul>
                    </div>

                    <div class="mobile-menu2">
                        <ul class="mob-nav2">
                          
                            <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                        </ul>
                    </div>

                </div>
                <!--Mobile Menu-->
                <nav id="main-nav">
                    <ul class="first-nav">
                        <li class=""><a href="home" class="menu-links">Home</a></li>
                        <li class=" "><a href="service" class="menu-links">Services</a></li>
                        <li class=" "><a href="about" class="menu-links">About Us</a></li>
                        <li class=" "><a href="contact" class="menu-links">Contact Us</a></li>
                    </ul>

                </nav>
            </div>
            <style>
                .blacktextitem{
                    color:#050748!important;
                }
            </style>
        </header>