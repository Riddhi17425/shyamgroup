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
<title>Shyam Group - Blogs</title>
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

<style>
   

        
        .blog_head
        {
            display:flex;
            gap:20px
        }

      

        /* Blog Card */
        .blog_card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            border: 1px solid #eee;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .blog_card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .blog_card img {
            height: 240px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog_card:hover img {
            transform: scale(1.08);
        }

        .blog_card .card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
        }

        .blog_date {
            font-size: 14px;
            color: #999;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .blog_title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.4;
            color: #222;
            margin-bottom: 12px;
            flex-grow: 1;
        }

        .blog_title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s;
        }

        .blog_title a:hover {
            color: #ed7427;
        }

        .blog_desc {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 0;
        }

        .limit-to-4-lines {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Arrow */
       .blog_card .svg_arrow {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fdf4f4;
            border-radius: 50%;
            transition: all 0.4s ease;
            opacity: 0.8;
            flex-shrink: 0;
        }

       .blog_card .svg_arrow:hover {
            background: #ed7427;
            transform: translateX(6px);
        }

        .blog_card .svg_arrow:hover svg path {
            stroke: #fff;
        }

      
    </style>
</style>

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
              <h1 class="border-title border-left">Dholera News</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li>Dholera News</li>
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
        <div class="col-md-2 col-xs-12">
            <h3 class="call-to-action-title">Blogs</h3>
        </div>
        <div><p class="com_he_tab"> <a href="<?php echo base_url(); ?>home">Home ></a> Dholera Blogs</p> </div>
        <div class="col-md-2 col-xs-12">
          <div class="call-to-action-btn-angle">
            </div>
        </div>
      </div>
    </div>
  </section>

<section>
        <div class="container">
           <div class="row text-center">
      <h1 class="border-title">Dholera Blogs</h1>
    </div>

             <div class="row g-4 g-md-5">

                <?php if(!empty($tbl_blog)): ?>
                    <?php foreach($tbl_blog as $blog): ?>
        
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="blog_card h-100 d-flex flex-column">
        
                                <!-- BLOG IMAGE -->
                                <a href="<?php echo base_url(); ?>blog/<?php echo $blog['url']; ?>" class="d-block">
                                    <img src="<?php echo base_url(); ?>images/blogimages/<?php echo $blog['front_image']; ?>"
                                         class="img-fluid"
                                         alt="<?php echo $blog['title']; ?>">
                                </a>
        
                                <div class="card-body">
        
                                    <p class="blog_date">
                                        <?php echo date("Y-m-d", strtotime($blog['blog_date'])); ?>
                                    </p>
        
                                    <div class="blog_head mb-3">
        
                                        <!-- BLOG TITLE -->
                                        <h4 class="blog_title">
                                            <a href="<?php echo base_url(); ?>blog/<?php echo $blog['url']; ?>">
                                                <?php echo $blog['title']; ?>
                                            </a>
                                        </h4>
        
                                        <!-- ARROW ICON -->
                                        <a href="<?php echo base_url(); ?>blog/<?php echo $blog['url']; ?>" class="svg_arrow ms-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none">
                                                <path d="M7.6 17L17.6 7M17.6 7H7.6M17.6 7V17"
                                                      stroke="#ed7427"
                                                      stroke-width="2"
                                                      stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </a>
        
                                    </div>
        
                                    <!-- DESCRIPTION (4-line limit) -->
                                    <p class="blog_desc limit-to-4-lines">
                                        <?php echo strip_tags($blog['short_description']); ?>
                                    </p>
        
                                </div>
                            </div>
                        </div>
        
                    <?php endforeach; ?>
                <?php endif; ?>
        
            </div>
        </div>
    </section>


  <?php include('include/footer.php'); ?>
  
  <!-- Javascript Files
	================================================== -->
  
  <?php include('include/js.php'); ?>
</div>
<!-- Body inner end -->
</body>
</html>