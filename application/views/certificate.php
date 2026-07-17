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
<?php include 'include/css.php'; ?>
</head>

<body>

<div class="body-inner">
  <?php include 'include/top-nav.php'; ?>
  <?php include 'include/header.php'; ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/certificate.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Certificates</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Certificates</li>
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
            <h3 class="call-to-action-title">Certificates</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Certificates</p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
          <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row text-center">
            <h2 class="border-title">Certificates</h2>
            <!--<p class="border-sub-title"> </p>-->
          </div>
        </div>
      </div>
      <!-- Title row end -->
      <div class="row">
        <div class="col-md-6">
          <h4>ISO Certificate</h4>
          <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
            <div class="item"> <img src="<?php echo base_url(); ?>documents/Shyam Infra-cert-ispl 001.jpg" alt="image"> </div>
          </div>
          <!-- Page slider end -->
        </div>
        <!-- Slider col end -->

        <div class="col-md-6">
          <h4>Investment Intension Certificate</h4>
          <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
            <div class="item"> <img src="<?php echo base_url(); ?>documents/Vibrant Gujarat - Shyamgroup.jpg" alt="image"> </div>
          </div>
          <!-- Page slider end -->
        </div>
        <!-- Slider col end -->

      </div>
      <!-- Row end -->
      <hr>
      <div class="row">
        <div class="col-md-12">
          <h4>Crisil Certificate</h4>
          <div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">
            <div class="item"> <img src="<?php echo base_url(); ?>documents/Crisil-Certificate.jpg" width="100%" height="100%" alt="image"> </div>
          </div>
          <!-- Page slider end -->
        </div>
        <!-- Slider col end -->

      </div>
      <!-- Row end -->

    </div>
    <!-- Conatiner end -->
  </section>
  <!-- Main container end -->

  <?php include 'include/footer.php'; ?>

  <!-- Javascript Files
	================================================== -->

  <?php include 'include/js.php'; ?>
</div>
<!-- Body inner end -->
</body>
</html>