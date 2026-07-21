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

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT69FTP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="body-inner">
            <?php include 'include/top-nav.php'; ?>
            <?php include 'include/header.php'; ?>
            <div id="banner-area" class="banner-area"
                style="background-image:url(<?php echo base_url(); ?>images/banner/dholera-news.png)">
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
                            <h3 class="call-to-action-title"><?php echo $blog_detail['title']; ?>
                        </div>
                        <div>
                            <p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> <?php echo $blog_detail['title']; ?></p>
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
                        <h1 class="new_details_head"><?php echo $blog_detail['title']; ?></h1>
                        <p>Published <?php echo date('M d, Y', strtotime($blog_detail['blog_date'])); ?></p>
                    </div>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $blog_detail['short_description']; ?>
                            </div>
                            <div class="col-md-6">
                                <img width="100%" src="<?php echo base_url(); ?>images/blogimages/<?php echo $blog_detail['image']; ?>"
                                    alt="<?php echo $blog_detail['title']; ?>">
                            </div>
                        </div>
                    </div>

                    <div>
                        <?php echo $blog_detail['brief_detail']; ?>
                    </div>

                    <div class="pro_det_banner">
                        <img width="100%" src="<?php echo base_url(); ?>images/blogimages/<?php echo $blog_detail['conclusion_image']; ?>"
                            alt="<?php echo $blog_detail['title']; ?>">
                    </div>
                    <div class="pro_det_con">
                        <h3>Conclusion</h3>
                        <?php echo $blog_detail['conclusion_detail']; ?>
                    </div>
                </div>
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
