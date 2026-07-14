<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Language" content="EN" />
<meta name="author" content="Shyam Group" />
<meta name="distribution" content="Global" />
<meta name="development" content="Intelliworkz.com"/>
<meta name="keywords" content="Best Residential Plots, Best Residential Plots at Dholera, Best Residential Plots Dholera, Residential Plots, Residential Plots in India, Residential Plots in Gujarat, Dholera Property, Ahmedabad Property">
<meta name="description" content="Explore our print-media coverage at Shyam Groups. Our press articles and media mentions showcase our projects, milestones, and corporate achievements.">
<title>Our Print Media at Shyam Group</title>

<!-- Google Analytics -->
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
<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Site CSS -->
<?php include('include/css.php'); ?>

<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.css" />

<!-- Custom Gallery CSS -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9NJ9JS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="body-inner">


  <?php include('include/header.php'); ?>

  <!-- Banner -->
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/dholera-news.png)">
  </div>

  <!-- Breadcrumb -->
  <section class="call-to-action">
    <div class="container">
      <div class="coman_routs">
        <div class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">Print Media</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Print Media</p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
               <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fancybox print media -->
  <!--<section>-->
  <!--  <div class="container">-->
  <!--    <div class="row text-center">-->
  <!--      <h2 class="border-title">Print Media</h2>-->
  <!--    </div>-->
  <!--    <div class="row">-->

  <!--     <?php foreach ($print_images as $img): ?>-->
  <!--          <div class="col-lg-4 mb-5">-->
  <!--              <div class="gallery_card">-->
  <!--                  <a href="<?= base_url('documents/print_media/' . $img->image); ?>" data-fancybox="print-media" data-caption="Image">-->
  <!--                      <img class="img-fluid" src="<?= base_url('documents/print_media/' . $img->image); ?>" alt="Image" />-->
  <!--                  </a>-->
  <!--              </div>-->
  <!--          </div>-->
  <!--      <?php endforeach; ?>-->
        <!--<div class="col-lg-4">-->
        <!--    <div class="gallery_card">-->
                <!-- Image 1 -->
        <!--        <a href="https://dholera.gujarat.gov.in/web/image?model=media.print&field=article_image&id=54" data-fancybox="gallery" data-caption="Image 1">-->
        <!--          <img class="img-fluid" src="https://dholera.gujarat.gov.in/web/image?model=media.print&field=article_image&id=54" alt="Image 1" />-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-lg-4">-->
        <!--    <div class="gallery_card">-->
                <!-- Image 1 -->
        <!--        <a href="https://dholera.gujarat.gov.in/web/image?model=media.print&field=article_image&id=54" data-fancybox="gallery" data-caption="Image 1">-->
        <!--          <img class="img-fluid" src="https://dholera.gujarat.gov.in/web/image?model=media.print&field=article_image&id=54" alt="Image 1" />-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
  <!--  </div>-->
  <!--  </div>-->
  <!--</section>-->
  
<section>
  <div class="container">
    <div class="row text-center">
      <h1 class="border-title">Print Media</h1>
    </div>

    <div class="row news_main_div">
      <?php 
      // Custom split for 52 images: 18, 17, 17
$column1 = array_slice($print_images, 0, 16);        // index 0–16 ✅
$column2 = array_slice($print_images, 17, 18);       // index 17–34 ✅
$column3 = array_slice($print_images, 34, 19); 

      $columns = [$column1, $column2, $column3];

      foreach ($columns as $column): ?>
        <div class="col-lg-4">
          <div class="row">
            <?php foreach ($column as $img): ?>
              <div class="col-md-12">
                <div class="gallery-item">
                  <a href="<?= base_url('documents/print_media/' . $img->image); ?>" data-fancybox="print-media">
                    <img class="img-fluid" src="<?= base_url('documents/print_media/' . $img->image); ?>" alt="Image" />
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



  <?php include('include/footer.php'); ?>
  <?php include('include/js.php'); ?>

  <!-- Fancybox JS -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.umd.js"></script>

  <!-- Fancybox Initialization -->
  <script>
    Fancybox.bind("[data-fancybox='print-media']", {
      Thumbs: {
        autoStart: true
      }
    });
  </script>

</div>
</body>
</html>
