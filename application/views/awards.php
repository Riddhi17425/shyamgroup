<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="EN" />
    <meta name="author" content="Shyam Group" />
    <meta name="distribution" content="Global" />
    <?php include 'include/meta.php'; ?>

    <!-- Mobile Specific Metas
	================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <?php include 'include/css.php'; ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
</head>

<body>

    <div class="body-inner">
        <?php include 'include/top-nav.php'; ?>
        <?php include 'include/header.php'; ?>
        <div id="banner-area" class="banner-area"
            style="background-image:url(<?php echo base_url(); ?>images/banner/awards.jpg)">
            <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Testimonials</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Testimonials</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
        </div>
        <!-- Banner area end -->

      <section class="call-to-action">
    <div class="container">
      <div class="coman_routs">
        <div class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">Awards</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Awards</p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
          <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

        <section id="project-area" class="project-area">
            <!--/ Container end -->

            <div class="container">

                <div class="row text-center">
                    <h1 class="border-title" >Awards</h1>
                    <!--<p class="border-sub-title"></p>-->
                </div>
                <div id="isotope" class="isotope">

                <?php foreach ($tbl_awards as $awards): ?>
                <div class="col-md-4 col-sm-6 col-xs-12 shyamvilla isotope-item isotope-item-award_page">
                     <a data-fancybox="gallery"  href="<?php echo base_url(); ?>shyam_admin/upload/awards/<?php echo $awards['image']; ?>">
                       <img class="img-responsive" src="<?php echo base_url(); ?>shyam_admin/upload/awards/<?php echo $awards['image']; ?>" alt="image">
                     </a>

                    <!--<div class="isotope-img-container">-->
                    <!--    <a class="gallery-popup"-->
                    <!--        href="<?php echo base_url(); ?>shyam_admin/upload/awards/<?php echo $awards['image']; ?>">-->
                    <!--        <img class="img-responsive" src="<?php echo base_url(); ?>shyam_admin/upload/awards/<?php echo $awards['image']; ?>" alt="image">-->
                    <!--        <span class="gallery-icon"><i class="fa fa-plus"></i></span>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>
                <?php endforeach; ?>
                <!-- <div class="col-md-3 col-sm-6 col-xs-12 shyamvilla isotope-item">
                    <div class="isotope-img-container">
                        <a class="gallery-popup" href="<?php echo base_url(); ?>images/awards/1.jpg">
                            <img class="img-responsive" src="<?php echo base_url(); ?>images/awards/1.jpg" alt="image">
                            <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                        </a>
                         <div class="project-item-info">
                          <div class="project-item-info-content">
                              <h3 class="project-item-title"><a> Roads and Club House Construction</a> </h3>
                              <p class="project-cat">Shyam Villa</p>
                          </div>
                        </div>
                    </div>
                </div> -->


            </div>
                <!--/ Title row end -->


                <!-- Filter row end -->
            </div>
            <!-- Isotope end -->

        </section>
        <!-- Main container end -->
        <!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

        <?php include 'include/footer.php'; ?>

        <!-- Javascript Files
	================================================== -->

        <?php include 'include/js.php'; ?>
    </div>
    <!-- Body inner end -->
</body>

</html>