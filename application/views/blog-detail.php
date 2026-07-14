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
      <meta name="description" content="Check it latest updates related to Dholera SIR 1st planned smart city of India.">
      <title>Shyam Group - Dholera SIR News</title>
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
                       <h1 class="border-title border-left">Dholera News Detail</h1>
                       <ol class="breadcrumb">
                         <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                         <li>Dholera News Detail</li>
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
                  <div>
                     <h3 class="call-to-action-title"><?= $blog_detail['title']; ?>
                  </div>
                  <div>
                     <p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> <?= $blog_detail['title']; ?></p>
                  </div>
                  <div class="col-md-2 col-xs-12">
                     <div class="call-to-action-btn-angle">
                        <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section>
            <div class="container">
               <div class="text-center">
                  <h1 class="new_details_head"><?= $blog_detail['title']; ?></h1>
                  <p>Published <?= date("M d, Y", strtotime($blog_detail['blog_date'])); ?></p>
               </div>
               <div class="mt-5">
                  <div class="row">
                    <div class="col-md-6">
                        <?= $blog_detail['short_description']; ?>
                    </div>
                     <div class="col-md-6">
                        <img width="100%"
                            src="<?= base_url(); ?>images/blogimages/<?= $blog_detail['image']; ?>"
                            alt="<?= $blog_detail['title']; ?>">
                     </div>
                  </div>
               </div>
              
            <div>
                <?= $blog_detail['brief_detail']; ?>
             </div>
              
               <div class="pro_det_banner">
                   <img width="100%"
                    src="<?= base_url(); ?>images/blogimages/<?= $blog_detail['conclusion_image']; ?>"
                    alt="<?= $blog_detail['title']; ?>">
               </div>
               <div class="pro_det_con">
                  <h3>Conclusion</h3>
                    <?= $blog_detail['conclusion_detail']; ?>
               </div>
            </div>
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