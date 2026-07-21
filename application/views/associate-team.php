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
                style="background-image:url(<?php echo base_url(); ?>images/banner/team.png)">
                <!-- <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="banner-heading">
              <h1 class="border-title border-left">Associate Team</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Associate Team</li>
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
                                <h2 class="border-title">Our Leadership</h2>
                                <p class="border-sub-title"> </p>
                            </div>
                            <div class="col-md-6">
                                <div class="ts-team-wrapper">
                                    <div class="ts-team-content-classic">
                                        <h3 class="ts-name" style="font-size: 22px; color: #f47c35;">Ms. Sapna Dharmani
                                        </h3>
                                        <p class="ts-designation">Director for Panache Consults, Channel Partner for
                                            Shyam Group</p>
                                        <p class="ts-designation" style="color: #f47c35;">Education :</p>
                                        <p class="ts-description">B.Com, M.B.A.</p>
                                        <p class="ts-designation" style="color: #f47c35;">Experience :</p>
                                        <p class="ts-description" style="text-align: justify;">14 years of experience in
                                            Business Development with deep knowledge of Media and IT industry, Was
                                            heading a national sales Team in previous job, Focused on delivering quality
                                            to Clients, and always known as relationship builder for organization</p>
                                        <!-- <p class="ts-description" style="text-align: justify;">Mr. Sudhir A Patel is the Chairman and Managing Director of Shyam Group of Companies. He is a Science Graduate and has completed M.Sc in Chemistry from Gujarat University. He is extremely foresighted and insightful due to his vast experience in corporate like Intas, Zydus, Astron Research and Amneal Pharma Etc. He is very focused and dynamic in his decision making process as an Entrepreneur. Scaling up strategies, investment life cycle, cost reduction, creative ways to improve productivity and institutionalizing organization with best practices and processes is his forte.</p> -->
                                    </div>
                                </div>
                                <!--/ Team wrapper 3 end -->
                            </div>
                            <div class="col-md-6">
                                <div class="ts-team-wrapper">
                                    <div class="ts-team-content-classic">
                                        <h3 class="ts-name" style="font-size: 22px; color: #f47c35;">Mr. Kashish Doshi
                                        </h3>
                                        <p class="ts-designation">Founder – Volk & Whitefield</p>
                                        <p class="ts-designation" style="color: #f47c35;">Education :</p>
                                        <p class="ts-description">M.B.A.</p>
                                        <p class="ts-designation" style="color: #f47c35;">Experience :</p>
                                        <p class="ts-description" style="text-align: justify;">4 Years Experience in
                                            Real Estate, 7 Years of overall Work Experience</p>
                                        <!-- <p class="ts-description" style="text-align: justify;">Mr. Sudhir A Patel is the Chairman and Managing Director of Shyam Group of Companies. He is a Science Graduate and has completed M.Sc in Chemistry from Gujarat University. He is extremely foresighted and insightful due to his vast experience in corporate like Intas, Zydus, Astron Research and Amneal Pharma Etc. He is very focused and dynamic in his decision making process as an Entrepreneur. Scaling up strategies, investment life cycle, cost reduction, creative ways to improve productivity and institutionalizing organization with best practices and processes is his forte.</p> -->
                                    </div>
                                </div>
                                <!--/ Team wrapper 3 end -->
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row text-center">
                                <h2 class="border-title" style="font-size: 22px;">Featured Projects</h2>
                                <p class="border-sub-title"> </p>
                            </div>
                            <?php
                                foreach ($tbl_cms as $cms_list):
                                    $pname = strtolower($cms_list['name']);
                                    $pname = str_replace(" ", "-", $pname);
                            ?>
                            <div class="ts-team-wrapper">
                                <div class="team-img-wrapper"> <a href="<?php echo base_url() . $pname; ?>"> <img
                                            src="<?php echo base_url(); ?>documents/project_images/<?php echo $cms_list['image']; ?>"
                                            alt="image" class="img-responsive"
                                            style="border: 2px solid #ddd; border-radius: 15px; margin-bottom: 10%;" />
                                    </a> </div>
                            </div>
                            <?php endforeach; ?>
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
