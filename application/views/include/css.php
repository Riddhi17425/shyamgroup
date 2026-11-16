<!-- canonical tag -->
<?php
$canonical = strtok(current_url(), '?'); // Remove query parameters
$canonical = str_replace("index.php", "", $canonical); // Remove index.php
$canonical = rtrim($canonical, '/'); // Remove trailing slash
$canonical = preg_replace('#(?<!:)//+#', '/', $canonical); // Remove duplicate slashes except https://
?>
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<!-- canonical tag end -->

<!--Favicon-->
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/x-icon">

<!-- CSS
	================================================== -->

<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">-->
<!-- Template styles-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
<!-- Responsive styles-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css">
<!-- FontAwesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<!-- Animation -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.theme.default.min.css">
<!-- Colorbox -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->
<!-- Meta Pixel Code -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '878307505662219');
fbq('track', 'PageView');
</script>

<!-- End Meta Pixel Code -->