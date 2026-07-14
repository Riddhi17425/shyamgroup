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
    <meta name="development" content="Intelliworkz.com" />
    <meta name="keywords"
        content="residential plotted development projects, affordable residential plots, housing schemes in Ahmedabad, dholera sir, dholera plots, dholera lands, dholera investment, dholera properties">
    <meta name="description" content="Stay updated with us, follow our social media channels for the latest project news, development updates, announcements & community posts.">
    <title>Our Social Media Feeds | Shyam Group</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112329903-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
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
    
    <!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <?php include('include/css.php'); ?>
    <style>
        
        .social_wrapper img,
        .social_wrapper video
        {
            width:100%;
            height:450px;
        }
        
        .social_wrapper
        {
            display:flex;
            flex-wrap:wrap;
        }
    </style>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    
</head>
<?php include 'instagram_basic_display_api.php'; ?>
 
 
 
<?php

#$this->load->library('instagram_basic_display_api');

$accessToken = 'IGAAUKgmIzGAdBZAFJ3WnJnWGlpZAGRXWGs4NmZAZAQkdwLWowZADVMR253dDVtSTczTjVqLTRHRHlQTnAzYml2c2dWRGVtay1zZAjhRR0tLT3JKem1Rel9jbFUzY196cWptX2pIV2NRMWk1ZAmVDRGVwQnE1NEdBczNWR1BFaHJ3eDY0WQZDZD';

$params = [

    'get_code' => isset($_GET['code']) ? $_GET['code'] : '',

    'access_token' => $accessToken,

    'user_id' => '31821283454183593',

];

$ig = new Instagram_basic_display_api($params);
 
$instagramTokenData = [

    'user' => $ig->getUser(),

    'media' => $ig->getUsersMedia()

];

#echo '<pre>';print_r($instagramTokenData['media']['data']);die; 

?>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9NJ9JS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="body-inner">
        <?php include('include/top-nav.php'); ?>
        <?php include('include/header.php'); ?>
        <div id="banner-area" class="banner-area"
            style="background-image:url(<?php echo base_url(); ?>images/banner/socail-media.jpg)">
    
        </div>
        <!-- Banner area end -->
      
      <section class="call-to-action">
    <div class="container">
      <div class="coman_routs">
        <div class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">We Are Social</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a>We Are Social </p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle"> 
          <!--<a href="<?php echo base_url(); ?>contact-us"><i class="fa fa-phone"></i>Contact Us</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
        
        <section id="project-area" class="project-area">
    <div class="container">

        <div class="row text-center">
            <h1 class="border-title">Our Social Media Feeds</h1>
        </div>

        <div class="social_wrapper">
            <?php 
            if (!empty($instagramTokenData['media']['data'])) {
                foreach ($instagramTokenData['media']['data'] as $d) { 
                    if (!empty($d['media_url']) && $d['media_type'] == 'IMAGE') { ?>
                        <div class="inner_side_grid col-lg-4 mb-4">
                            <div class="single_instagram">
                                <a href="<?= $d['media_url'] ?>" target="_blank">
                                    <img src="<?= $d['media_url'] ?>" class="we-are-social-img" alt="image">
                                </a>
                            </div>
                        </div>
                    <?php } elseif (!empty($d['media_url']) && $d['media_type'] == 'VIDEO') { ?>
                        <div class="inner_side_grid col-lg-4 mb-4">
                            <div class="single_instagram">
                                <a href="<?= $d['media_url'] ?>" target="_blank">
                                    <video controls>
                                        <source src="<?= $d['media_url'] ?>">
                                    </video>
                                </a>
                            </div>
                        </div>
                    <?php } 
                }
            } else { ?>
                <!-- Fallback "Coming Soon" message -->
                <div class="inner_side_grid col-12 text-center">
                    <h3>Coming Soon!</h3>
                    <p>Our social media feed will appear here shortly.</p>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

        <!-- Main container end -->
        <!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

        <?php include('include/footer.php'); ?>

        <!-- Javascript Files
	================================================== -->

        <?php include('include/js.php'); ?>
    </div>
    <!-- Body inner end -->
</body>

</html>