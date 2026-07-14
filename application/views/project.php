<!DOCTYPE html>
<html lang="en">
<head>

<!-- Basic Page Needs
	================================================== -->
<meta charset="utf-8">

<?php 
  if($project_detail['id']==2)
  {
?>
<meta name="keywords" content="NA NOC Residential Plots, Residential Plots in Dholera, Shyam Villa Residential plots, Plots at Smart City, Affordable Plots at Dholera">
<meta name="description" content="Shyam Group is developing a residential plotting scheme named Shyam Villa @ Dholera SIR. Make your dreams come true in the first smart city of India.">
<title>Affordable Plots at Dholera SIR | Dholera Residential Plots</title>
<?php
  }
  else if($project_detail['id']==5) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Invest in Dholera">
<meta name="description" content="Pinnacle City is a residential plotting projects specially designed for the people who are willing to in small amounts. Buying and Invest plots at Pinnacle City Dholera SIR. Booking Open Call us at 9725045819">
<title>Pinnacle City Developed by Shyam Buildcon | Invest in Dholera</title>
<?php
  }
  else if($project_detail['id']==6) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Dholera Smart City Project, Dholera smart city">
<meta name="description" content="Shyam Ananta is a project by Shyam Group, having plots starting from 100 sq. ft. to 570 sq. ft. Yards and the most affordable rates in the vicinity.">
<title>Shyam Ananta | A Project by Shyam Group</title>
<?php
  }
  else if($project_detail['id']==9)
  {
?>
<meta name="keywords" content="Residential plot development, residential housing schemes, Residential Plots in Dholera, Weekend Homes near Ahmedabad, Plots Near Ahmedabad, Lands Near Ahmedabad">
<meta name="description" content="Shyam Sanidhya is a project by Shyam Group, having plots starting from 100 sq. ft. to 570 sq. ft. Yards and most affordable rates in the vicinity.">
<title>Shyam Sanidhya | A Project by Shyam Group</title>
<?php
  }
   else if($project_detail['id']==10) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Invest in Dholera">
<meta name="description" content="Shyam Serene is a project by Shyam Group located near Dholera SIR. With a clear NOC, this becomes the ideal project for investment purposes.">
<title>Shyam Serene | A Project Near Dholera SIR</title>
<?php
  }
   else if($project_detail['id']==11) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Invest in Dholera">
<meta name="description" content="Shyam Group is developing a residential plotting scheme named Shyam Villa, the best Residential Plotting Project near the future metro city Dholera SIR. ">
<title>Shyam Villa | Residential Plotting Scheme</title>
<?php
  }
   else if($project_detail['id']==12) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Invest in Dholera">
<meta name="description" content="Shyam Group has launched a scheme called Dholera Global City, which has an array of projects at Dholera SIR and a strategic location near 6 Lane Express Highway.">
<title>Dholera Global City | Shyam Group</title>
<?php
  }
   else if($project_detail['id']==13) 
  {
?>
<meta name="keywords" content="Residential plotting projects, buying plots in Dholera SIR, Residential Plots in Dholera, Invest in Dholera">
<meta name="description" content="Smart City Dholera 2 is a project by Shyam Group near SIR With a complete title clear and NOC, this becomes the ideal project for investment purposes.">
<title>Smart City Dholera 2 | Shyam Group</title>
<?php
  }
  else
  {
?>
<title><?php echo $project_detail['name'];?></title>
<?php
  }
?>
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
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9NJ9JS3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="body-inner">
  <?php include('include/top-nav.php'); ?>
  <?php include('include/header.php'); ?>

  <?php if($project_detail['id']==2) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/banner6.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <?php } else if($project_detail['id']==6) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/banner6.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <?php } else if($project_detail['id']==9) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/banner6.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>  
  <?php } else if($project_detail['id']==10) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/banner6.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <?php } else if($project_detail['id']==11) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/shyamvilla_banner.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  
    <?php } else if($project_detail['id']==12) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/dholera-globalcity-banner.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    </div>
    <?php } else if($project_detail['id']==13) { ?>
  <div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/smart_city_2_banner.png)">
    <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li><?php echo $project_detail['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div> -->
     </div>
     <?php } else if($project_detail['id']==14) { ?>
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url(); ?>images/banner/banner6.png)">
</div>
  <?php } else { } ?>
  <!-- Banner area end -->
  
  <section class="call-to-action">
    <div class="container">
      <div class="coman_routs">
        <div  class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">Projects</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>">Home ></a> Projects</p> </div>
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
                <h1 class="border-title border-left"><?php echo $project_detail['name'];?></h1>
                
                <div class="widget">
                  <ul>
                    <li><b style="color:#151616;">Developed by :</b> <?php echo $project_detail['developed_by']; ?></li>
                    <li><b style="color:#151616;">Project by :</b> <?php echo $project_detail['project_by']; ?></li>
                  </ul>
                </div>
                
                <div class="row">
                    <div class="col-sm-9 coman_mb">
                        <!--<p>Shyam Group is developing a residential plotting scheme named Shyam Villa at Dholera SIR. Make your dreams come true by at first smart city of India.</p>-->
                        <!--<p>Shyam Group bring to you Shyam Villa, a best Residential Plotting Project near future's metro city Dholera SIR. Which means surety of your investment's appreciation. We are offering NA.NOC residential plots in Dholera starting from 180 Square Yards to 500 Square Yards At the beginning of the twenty-first century, a group of designers and aviation instrument specialists beginning cooperating on the bold and ambitious project.</p>-->
                        <p><?php echo $project_detail['project_brief'];?></p>
                        <div style="margin-top:20px;"><a class="btn btn-primary" href="<?php echo base_url('documents/project_images/' . $project_detail['project_brochure']); ?>" target="_black">View our brochure</a></div>
                    </div>
                    <div class="col-sm-3 "><img src="<?php echo base_url(); ?>documents/project_images/<?php echo $project_detail['image'];?>" style="width:100%;" alt="image"></div>
                </div>
       <!--Main row end -->
    </div>
     <!--Conatiner end -->
  </section>
  
  <section style="padding-top: 0px;">
     <div class="container">
          <div class="row">
          <div class="col-lg-12">
             <div class="row">
                  <div class="col-sm-7 coman_mb">
                  <img src="<?php echo base_url(); ?>documents/project_images/<?php echo $project_detail['layout_plan'];?>" alt="image" style="width: 100%;" />
              </div>
              <div class="col-sm-5">
                 <div class="project_des">
                      <h2 class="cmpy_title">Project Description</h2>
                  <ul>
                                      <?php foreach ($advantage as $row_adv) { ?>
                <p><i class="fa fa-arrow-right"></i> <?php echo $row_adv['benefit'];?></p>
                <?php } ?>
                  </ul>
                 </div>
              </div>
             </div>
          </div>
      </div>
     </div>
  </section>
  
  <?php
$amenityHtml = $project_detail['amenities'];
$amenities = [];

if (!empty($amenityHtml)) {
    // Extract only the <li> text
    preg_match_all('/<li[^>]*>(.*?)<\/li>/i', $amenityHtml, $matches);
    $amenities = $matches[1]; // Array of amenity names
}
?>

<?php if (!empty($amenities)): ?>
  <section style="padding-top: 0px;">
    <div class="container">
        <div style="margin-bottom:34px;">
            <h2 class="cmpy_title" style="margin-bottom:10px">Amenities at <?php echo $project_detail['name'];?>:</h2>
            <p>Book your own NA /NOC Title Clear Affordable Plots at Dholera Future Smart city of India.</p>
        </div>

        <div class="row">
            <?php foreach ($amenities as $amenity): ?>
                <?php 
                    $name = trim($amenity);
                    $img_file = strtolower($name);
                    $img_file = str_replace([' ', '\'', '&', ',', '.', '-'], ['_', '', 'and', '', '', '_'], $img_file) . '.png';
                    $img_path = base_url('images/amenities/' . $img_file);
                ?>
                <div class="col-lg-3 col-sm-4">
                    <div class="project_amenities" style="display:flex; align-items:center; gap:10px;">
                        <img src="<?php echo $img_path; ?>" alt="<?php echo htmlspecialchars($amenity); ?>">
                        <p style="margin:0;"><?php echo htmlspecialchars($amenity); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
  </section>
<?php endif; ?>

  

  
  <section style="padding-top: 0px;">
      <div class="container">
          <h2 class="border-title text-center mb-5">Video And Location Map</h2>
          <div class="row">
              <div class="col-sm-6 coman_mb">
                  <div class="project_video">
                      <img src="<?php echo base_url(); ?>images/new_images/project_video.png" alt="image" style="width:100%">
                      <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="project_video_play" target="_blank"><img src="<?php echo base_url(); ?>images/new_images/project_play.png" alt="image" style="width:70px"></a>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="project_location">
                        <?php if($project_detail['map_img']!='') { ?>
                <div class="embed-responsive">
                  <iframe src="<?php echo $project_detail['map_img']; ?>" width="100%" height="100%" allowfullscreen></iframe>
                </div>
                <?php } ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog vertical-align-center" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php if($project_detail['video_url']!='') { ?>
    <div class="embed-responsive">
      <?php
        $video_url = $project_detail['video_url'];
        $is_youtube = (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false);
      ?>
      <?php if ($is_youtube) { ?>
          <iframe src="<?php echo $video_url; ?>" width="100%" height="281" allowfullscreen></iframe>
      <?php } else { ?>
          <video width="100%" height="281" controls>
              <source src="<?php echo base_url('documents/' . $video_url); ?>" type="video/mp4">
              Your browser does not support the video tag.
          </video>
      <?php } ?>
    </div>
<?php } ?>
      </div>
    </div>
  </div>
</div>
  
  
  
  <!--<section id="main-container" class="main-container">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->

  <!--      <div class="col-lg-3 col-md-3 col-sm-12">-->
  <!--        <div class="sidebar sidebar-left">-->

  <!--          <div class="widget">-->
  <!--            <div class="quote-item quote-border">-->
  <!--              <img src="<?php echo base_url(); ?>documents/project_images/<?php echo $project_detail['image'];?>" style="width:100%;" alt="image">-->
  <!--            </div>-->
  <!--          </div>-->
            
  <!--          <div class="widget">-->
  <!--            <ul class="nav nav-tabs nav-stacked service-menu">-->
  <!--              <li><a><b>Developed by :</b> <?php echo $project_detail['developed_by']; ?></a></li>-->
  <!--              <li><a><b>Project  by :</b> <?php echo $project_detail['project_by']; ?></a></li>-->
  <!--            </ul>-->
  <!--          </div>-->
             
  <!--        </div>-->
           <!--Sidebar end -->
  <!--      </div>-->
         <!--Sidebar Col end -->
        
  <!--      <div class="col-lg-9 col-md-9 col-sm-12">-->
  <!--        <div class="content-inner-page">-->
  <!--          <div class="row">-->
  <!--            <div class="col-md-7">-->
  <!--              <h2 class="border-title border-left"><?php echo $project_detail['name'];?></h2>-->
  <!--              <p><?php echo $project_detail['project_brief'];?></p>-->
  <!--            </div>-->
               <!--col end -->
  <!--            <div class="col-md-5">-->
  <!--              <h2 class="border-title border-left" style="font-size: 22px;">Video And Location Map</h2>-->
  <!--              <?php if($project_detail['video_url']!='') { ?>-->
  <!--              <div class="embed-responsive">-->
  <!--                <iframe src="<?php echo $project_detail['video_url']; ?>" width="100%" height="281" allowfullscreen></iframe>-->
  <!--              </div>-->
  <!--              <?php } ?>-->
  <!--              <hr>-->
  <!--              <?php if($project_detail['map_img']!='') { ?>-->
  <!--              <div class="embed-responsive">-->
  <!--                <iframe src="<?php echo $project_detail['map_img']; ?>" width="100%" height="281" allowfullscreen></iframe>-->
  <!--              </div>-->
  <!--              <?php } ?>-->
  <!--              <br><br>-->
  <!--              <h2 class="border-title border-left" style="font-size: 22px;">Project Description</h2>-->
  <!--              <?php foreach ($advantage as $row_adv) { ?>-->
  <!--              <p><i class="fa fa-arrow-right"></i> <?php echo $row_adv['benefit'];?></p>-->
  <!--              <?php } ?>-->
  <!--            </div>-->
               <!--col end -->
  <!--          </div>-->
             <!--1st row end-->
  <!--        </div>-->
           <!--Content inner end -->
  <!--      </div>-->
         <!--Content Col end -->
  <!--      <?php if($project_detail['layout_plan']!='') { ?>        -->
  <!--      <div class="col-xs-12">-->
  <!--        <h2 class="border-title border-left" style="font-size: 22px;">Layout Plan</h2>-->
  <!--        <img src="<?php echo base_url(); ?>documents/project_images/<?php echo $project_detail['layout_plan'];?>" alt="image" style="width: 100%;" />-->
  <!--      </div>-->
  <!--      <?php } ?>-->
  <!--    </div>-->
       <!--Main row end -->
  <!--  </div>-->
     <!--Conatiner end -->
  <!--</section>-->
  <!-- Main container end -->
  
  <?php include('include/footer.php'); ?>
  
  <!-- Javascript Files
	================================================== -->
  
  <?php include('include/js.php'); ?>
</div>
<!-- Body inner end -->
</body>
</html>