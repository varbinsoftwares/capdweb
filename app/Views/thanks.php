<?php echo view('common_pages/header.php', array("blacktheme" => true)); ?>

<section class="breadcrumb-areav2" data-background="<?php echo base_url("public/assets/images/banner/4.jpg"); ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bread-titlev2">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">Thank you to write us</h1>
                    <p class="mt20 wow fadeInUp" data-wow-delay=".4s">We truly appreciate you asking for information about our service.</p>
                    <div class="email-subs-form mt60">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

setInterval(function(){
    window.location = "<?php site_url("contact-us");?>"
},3000);

</script>

<?php echo view('common_pages/footer.php'); ?>