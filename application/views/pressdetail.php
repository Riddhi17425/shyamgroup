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
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/dholera-news.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Press News Detail</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Press News Detail</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <!-- Banner area end -->

  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row text-center">
            <h2 class="border-title">Press News Detail</h2>
            <p class="border-sub-title"> </p>
          </div>
          <!-- Filter row end -->
          <div class="isotope">
            <!-- <div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item"> -->
            <div class="isotope-img-container" style="width: 50%; float: left;"> <a class="gallery-popup" href="<?php echo base_url(); ?>shyam_admin/upload/media/<?php echo $pressrelease_detail->image; ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>shyam_admin/upload/media/<?php echo $pressrelease_detail->image; ?>" alt="image"> <span class="gallery-icon"><i class="fa fa-plus"></i></span> </a>
              <!-- <div class="project-item-info">
                  <div class="project-item-info-content">
                    <h3 class="project-item-title"> <a href="#">Capital Teltway Building</a> </h3>
                    <p class="project-cat">Commercial, Interiors</p>
                  </div>
                </div> -->
            </div>
            <h3 style="margin-left: 55%;"><?php echo $pressrelease_detail->title; ?></h3>
            <p style="margin-left: 55%;"><strong>Date : <?php echo $pressrelease_detail->add_date; ?></strong></p>
            <p style="margin-left: 55%;"><?php echo $pressrelease_detail->news_detail; ?></p>
            <!-- </div> -->
            <!-- Isotope item 1 end -->
          </div>
          <!-- Isotope end -->
        </div>
        <div class="col-md-3">
          <div class="row text-center">
            <h2 class="border-title" style="font-size: 22px;">Dholera News</h2>
            <p class="border-sub-title"> </p>
          </div>
          <?php foreach ($tbl_news as $news_list): ?>
          <div class="ts-team-wrapper">
            <div class="team-img-wrapper"> <a href="<?php echo base_url(); ?>Dholera_News/detail/<?php echo $news_list['id']; ?>"><i class="fa fa-arrow-right"></i> <?php echo $news_list['title']; ?> </a> <span> </span> </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
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