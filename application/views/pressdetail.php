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
<meta name="development" content="Intelliworkz.com"/>
<meta name="keywords" content="Best Residential Plots, Residential Plots at Dholera, Residential Plots Dholera, Residential Plots, Residential Plots in India, Residential Plots in Gujarat, Dholera Property Investment">
<meta name="description" content="Check it out updates related to Dholera SIR. Shyam Group is one of the prominent real estate developers at Dholera SIR Gujarat.">
<title>Media Release about Dholera SIR – Shyam Group</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112329903-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112329903-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P9NJ9JS3');</script>
<!-- End Google Tag Manager -->
<!-- Mobile Specific Metas
	================================================== -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include('include/css.php'); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9NJ9JS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="body-inner">
  <?php include('include/top-nav.php'); ?>
  <?php include('include/header.php'); ?>
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
            <div class="isotope-img-container" style="width: 50%; float: left;"> <a class="gallery-popup" href="<?php echo base_url(); ?>shyam_admin/upload/media/<?php echo $pressrelease_detail->image;?>"> <img class="img-responsive" src="<?php echo base_url(); ?>shyam_admin/upload/media/<?php echo $pressrelease_detail->image;?>" alt="image"> <span class="gallery-icon"><i class="fa fa-plus"></i></span> </a> 
              <!-- <div class="project-item-info">
                  <div class="project-item-info-content">
                    <h3 class="project-item-title"> <a href="#">Capital Teltway Building</a> </h3>
                    <p class="project-cat">Commercial, Interiors</p>
                  </div>
                </div> --> 
            </div>
            <h3 style="margin-left: 55%;"><?php echo $pressrelease_detail->title;?></h3>
            <p style="margin-left: 55%;"><strong>Date : <?php echo $pressrelease_detail->add_date; ?></strong></p>
            <p style="margin-left: 55%;"><?php echo $pressrelease_detail->news_detail;?></p>
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
          <?php foreach($tbl_news as $news_list): ?>
          <div class="ts-team-wrapper">
            <div class="team-img-wrapper"> <a href="<?php echo base_url(); ?>Dholera_News/detail/<?php echo $news_list['id'];?>"><i class="fa fa-arrow-right"></i> <?php echo $news_list['title'];?> </a> <span> </span> </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- Conatiner end --> 
  </section>
  <!-- Main container end -->
  
  <?php include('include/footer.php'); ?>
  
  <!-- Javascript Files
	================================================== -->
  
  <?php include('include/js.php'); ?>
</div>
<!-- Body inner end -->
</body>
</html>