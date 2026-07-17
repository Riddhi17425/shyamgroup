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
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/our-project.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Our Projects</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Our Projects</li>
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
            <h3 class="call-to-action-title">Our Projects</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Our Projects</p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
               <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
            </div>
        </div>
      </div>
    </div>
  </section>

  <!--<a class="btn btn-primary" href="https://www.intelliworkz.co.in/shyamgroup/our-projects">View All Projects</a>-->

  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
        <div class="row text-center">
          <h1 class="border-title">Our Projects</h1>
          <!--<p class="border-sub-title"> </p>-->
        </div>
        <?php
            foreach ($tbl_projects as $projects_list):
                $pname = strtolower($projects_list['name']);
                $pname = str_replace(" ", "-", $pname);
        ?>
        <div class="col-md-4" style="margin-bottom: 5%;">
          <div class="ts-service-box">
            <div class="ts-service-image-wrapper image-angle"> <img class="img-responsive" src="<?php echo base_url(); ?>documents/project_images/<?php echo $projects_list['image']; ?>" alt="image" style="width: 100%; height: 200px;" /> </div>
            <!--<div class="ts-service-box-img pull-left"> <img src="<?php echo base_url(); ?>images/icon-image/service-icon1.png" alt="image" /> </div>-->
            <div class="ts-service-info">
              <!--<h3 class="service-box-title"><a href="<?php echo base_url(); ?>documents/project_images/<?php echo $projects_list['project_brochure']; ?>" target="_new"> Brochure</a></h3>-->
              <p><strong>Developed by:</strong> <?php echo $projects_list['developed_by'] ?></p>
              <p><strong>Project  by:</strong> <?php echo $projects_list['project_by'] ?></p>

              <!--<p><a class="learn-more" href="<?php echo base_url() . $pname; ?>"><i class="fa fa-caret-right"></i> Read More</a></p>-->
            </div>

            <div class="row mt-5">
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>documents/project_images/<?php echo $projects_list['project_brochure']; ?>" target="_new">View Brochure</a>
                </div>
                 <div class="col-sm-6">
                    <a class="btn btn-primary Our_Projects_btn2" href="<?php echo base_url() . $pname; ?>">Read More</a>
                </div>
            </div>
          </div>
          <!-- Service1 end -->
        </div>
        <?php endforeach; ?>
        <!-- <div class="gap-30"></div> -->
      </div>
      <!-- Main row end -->
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