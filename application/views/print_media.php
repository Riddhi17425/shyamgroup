<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Language" content="EN" />
        <meta name="author" content="Shyam Group" />
        <meta name="distribution" content="Global" />
        <?php include 'include/meta.php'; ?>

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Site CSS -->
        <?php include 'include/css.php'; ?>

        <!-- Fancybox CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox/fancybox.css" />

        <!-- Custom Gallery CSS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

    </head>

    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT69FTP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="body-inner">

            <?php include 'include/header.php'; ?>

            <!-- Banner -->
            <div id="banner-area" class="banner-area"
                style="background-image:url(<?php echo base_url(); ?>images/banner/dholera-news.png)">
            </div>

            <!-- Breadcrumb -->
            <section class="call-to-action">
                <div class="container">
                    <div class="coman_routs">
                        <div class="col-md-2 col-xs-12">
                            <h3 class="call-to-action-title">Print Media</h3>
                        </div>
                        <div>
                            <p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Print Media</p>
                        </div>
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
            <!--                  <a href="<?php echo base_url('documents/print_media/' . $img->image); ?>" data-fancybox="print-media" data-caption="Image">-->
            <!--                      <img class="img-fluid" src="<?php echo base_url('documents/print_media/' . $img->image); ?>" alt="Image" />-->
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

                    <div class="news_main_div print-media-masonry">
                        <?php foreach ($print_images as $img): ?>
                        <div class="gallery-item">
                            <a href="<?php echo base_url('documents/print_media/' . $img->image); ?>" data-fancybox="print-media">
                                <img class="img-fluid" src="<?php echo base_url('documents/print_media/' . $img->image); ?>" alt="<?php echo htmlspecialchars($img->alt_text); ?>" />
                            </a>
                            <h4><?php echo $img->title; ?></h4>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <?php include 'include/footer.php'; ?>
            <?php include 'include/js.php'; ?>

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
