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
              <h1 class="border-title border-left">Press Realese</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Press Realese</li>
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
                            <h3 class="call-to-action-title">Media News</h3>
                        </div>
                        <div>
                            <p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Media News</p>
                        </div>
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row text-center">
                                <h2 class="border-title mb-5">Press Realese</h2>
                            </div>
                            <div class="row">
                                <?php foreach ($tbl_pressrelease as $Pressrelease_list): ?>
                                <div class="col-sm-4 mb-5">
                                    <div class="ts-team-wrapper">
                                        <div class="team-img-wrapper mb-4" style="float: none;"> <img alt="image"
                                                src="<?php echo base_url(); ?>shyam_admin/upload/media/<?php echo $Pressrelease_list['image']; ?>"
                                                class="img-responsive" style="height:400px;"> </div>
                                        <div class="ts-team-content-classic" style="margin-left: 0;">
                                            <p class="ts-designation"><?php echo substr($Pressrelease_list['title'], 0, 80); ?></p>
                                            <p class="ts-description">Date : <?php echo $Pressrelease_list['add_date']; ?></p>
                                            <a href="<?php echo base_url(); ?>Pressrelease/detail/<?php echo $Pressrelease_list['id']; ?>">Read
                                                More...</a>
                                        </div>
                                    </div>
                                    <!--/ Team wrapper 3 end -->
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
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
