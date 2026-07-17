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
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
</head>

<body>

<div class="body-inner">
  <?php include 'include/top-nav.php'; ?>
  <?php include 'include/header.php'; ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/thank-you.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Thanks</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Thanks</li>
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
        <div  class="col-md-2">
            <h3 class="call-to-action-title">Thank You</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Thank you</p> </div>
        <div class="col-md-2">
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
            <h2 class="border-title">Thanks</h2>
            <p class="mb-3">Your enquiry has been submitted successfully.</p><br/>
            <p class="border-sub-title">We will get in touch with you shortly.</p>
          </div>
          <div class="text-center"><img src="<?php echo base_url(); ?>documents/thanks.jpg" alt="image" style="width: 50%;"></div>
      </div>
    </div>
    <!-- Container end -->
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