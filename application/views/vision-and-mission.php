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
<meta name="keywords" content="Best Residential Plots, Best Residential Plots at Dholera, Best Residential Plots Dholera, Residential Plots, Residential Plots in India, Residential Plots in Gujarat, Dholera Property, Ahmedabad Property">
<meta name="description" content="Shyam Groups vision is to bring growth to the community, deliver successful projects to our customers and make their dreams becoming reality. Buy Residential Plots Near Ahmedabad.">
<title>ShyamGroup Infrastructure Development Company Vision & Mission</title>
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
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/vision-and-mission.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Vision and Mission</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Vision and Mission</li>
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
            <h2 class="border-title">Vision and Mission</h2>
            <p class="border-sub-title"> </p>
          </div>
          <!-- <p><?php echo $vision_detail->body_text; ?></p> -->
          <h4>Vision</h4>
          <p>Shyam Group's vision is to bring growth to the community, deliver successful projects to our customers and make their dreams becoming reality.</p>
          <h4>Mission</h4>
          <p>To safely deliver any project, on timely basis keeping in mind the safety of our environment and at the same time provide benefits to our customers, shareholders, employees and the communities we serve.</p>
          <?php if($vision_detail->brochure!='') { ?>
          <a href="<?php echo base_url(); ?>documents/cms_data/<?php echo $vision_detail->brochure; ?>" target="_new" style="float: right;"><i class="fa fa-download"></i> Download Document</a>
          <?php } ?>
        </div>
        <div class="col-md-3">
          <div class="row text-center">
            <h2 class="border-title" style="font-size: 22px;">Featured Projects</h2>
            <p class="border-sub-title"> </p>
          </div>
          <?php 
          foreach($tbl_cms as $cms_list):
            $pname = strtolower($cms_list['name']);
            $pname = str_replace(" ", "-", $pname);
          ?>
          <div class="ts-team-wrapper">
            <div class="team-img-wrapper"> <a href="<?php echo base_url().$pname; ?>"> <img src="<?php echo base_url(); ?>documents/project_images/<?php echo $cms_list['image'];?>" alt="image" class="img-responsive" style="border: 2px solid #ddd; border-radius: 15px; margin-bottom: 10%;" /> </a> </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- Container end --> 
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