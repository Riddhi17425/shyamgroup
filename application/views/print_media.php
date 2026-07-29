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
                    <h1 class="border-title">Media Coverage</h1>
                </div>

                <!-- Tabs -->
                <ul class="nav nav-tabs media-tabs text-center" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#print-media" aria-controls="print-media" role="tab" data-toggle="tab">
                            Print Media
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#online-media" aria-controls="online-media" role="tab" data-toggle="tab">
                            Online Media
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">

                    <!-- Print Media -->
                    <div role="tabpanel" class="tab-pane fade in active" id="print-media">

                        <div class="news_main_div print-media-masonry">

                            <?php foreach ($print_images as $img): ?>
                                <div class="gallery-item">

                                    <a href="<?php echo base_url('documents/print_media/' . $img->image); ?>"
                                        data-fancybox="print-media">
                                        <img class="img-fluid"
                                            src="<?php echo base_url('documents/print_media/' . $img->image); ?>"
                                            alt="<?php echo htmlspecialchars($img->alt_text); ?>">
                                    </a>

                                    <h4><?php echo $img->title; ?></h4>

                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>

                    <!-- Online Media -->
                    <div role="tabpanel" class="tab-pane fade" id="online-media">

                        <div class="row">
                                                            
                                                            <div class="col-md-5">
                                                                <div id="website_project_54">
	                                                                <img src="https://dholera.gujarat.gov.in/web/image?model=media.print&field=article_image&id=54" alt="Trains at 220 kmph on Indian Railways soon! Cabinet approves Ahmedabad-Dholera semi high-speed rail project." class="img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 read-more-container mt-3 mt-md-0">
                                                                <div class="card-block px-6">
                                                                    <div class="d-flex justify-content-between align-items-center mb8 w-100">
                                                                        <div>
                                                                            <p class="font16 text-muted mb-0">
                                                                                13-05-2026
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex flex-wrap gap-1">
                                                                            
                                                                                <span class="badge bg-primary rounded-pill px-2 py-1 mr8">
                                                                                    <i class="fa fa-tag me-1"></i>
                                                                                    Times of India
                                                                                </span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                        <a target="_blank" href="https://timesofindia.indiatimes.com/business/india-business/trains-at-220-kmph-on-indian-railways-soon-cabinet-approves-ahmedabad-dholera-semi-high-speed-rail-project-check-details/articleshow/131062621.cms">
                                                                            <h3 class="p_heading_normal">Trains at 220 kmph on Indian Railways soon! Cabinet approves Ahmedabad-Dholera semi high-speed rail project.</h3>
                                                                        </a>
                                                                    
                                                                    
                                                                        <p class="p_text text-truncate-6 text-truncate-3" id="scope_desc_54" data-lines="6">
                                                                            Trains at the speed of 220 kmph may soon run on Indian Railways  with the Cabinet Committee on Economic Affairs, led by PM Narendra Modi, approving a new railway line. The CCEA gave its go ahead for Ahmedabad (Sarkhej) – Dholera semi high-speed double line project on Wednesday.  Sabarmati to Dholera travel time will come down to 48 minutes with the new railway line, Railway minister Ashwini Vaishnaw said.
                                                                        </p>
                                                                    
                                                                   <a class="btn btn-primary"> read more</a>
                                                                </div>
                                                            </div>
                                                        </div>

                    </div>

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