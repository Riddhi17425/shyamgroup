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
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/client.jpg)">
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
        <div class="col-md-2">
            <h3 class="call-to-action-title">Testimonial</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Testimonial</p> </div>
        <div class="col-md-2">
          <div class="call-to-action-btn-angle">
               <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a>-->
            </div>
        </div>
      </div>
    </div>
  </section>

  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row text-center">
        <h1 class="border-title">Our Testimonials</h1>
        <!--What People Said-->
        <!--<p class="border-sub-title"> </p>-->
      </div>
      <!--/ Title row end -->

      <div class="row">
        <?php foreach ($tbl_testimonial as $testimonial_list): ?>
        <!--<div class="col-md-6 col-sm-6" style="margin-bottom: 4%;">-->
        <!--  <div class="quote-item quote-border">-->
        <!--    <div class="quote-text-border" style="height: 180px;"> <?php echo $testimonial_list['message']; ?> </div>-->
        <!--    <div class="quote-item-footer"> <img class="testimonial-thumb" src="<?php echo base_url(); ?>images/clients/default.png" alt="image">-->
        <!--      <div class="quote-item-info">-->
        <!--        <h3 class="quote-author"><?php echo $testimonial_list['name']; ?></h3>-->
        <!--        <span class="quote-subtext"><?php echo $testimonial_list['email_id']; ?></span> </div>-->
        <!--    </div>-->
        <!--  </div>-->
           <!--Quote item end -->
        <!--</div>-->
        <div class="col-sm-6 item">
            <div class="quote-item">
             <div>
                  <span class="quote-text"><?php echo $testimonial_list['message']; ?></span>
              <div class="quote-item-footer"> <img class="testimonial-thumb" src="<?php echo base_url(); ?>images/banner/<?php echo $testimonial_list['photo']; ?>" alt="image">
                <div class="quote-item-info">
                  <h3 class="quote-author"><?php echo $testimonial_list['name']; ?></h3>
                  <span class="quote-subtext"><?php echo $testimonial_list['email_id']; ?></span> </div>
              </div>
             </div>
            </div>
            <!-- Quote item end -->
          </div>
         <!--End col md 4 -->
        <?php endforeach; ?>
      </div>

      <!-- Content row end -->

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