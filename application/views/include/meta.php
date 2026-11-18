<?php
    $default_title = "Shyam Group | Residential Plots in Dholera SIR";
    $default_desc  = "Shyam Groups offers advanced residential plots in Dholera SIR, and provides a wide range of options to own property in Dholera.";
    $default_image = base_url('images/og-default.jpg');

    $page_title = isset($meta_title) ? $meta_title : $default_title;
    $page_desc  = isset($meta_description) ? $meta_description : $default_desc;
    $page_image = isset($meta_image) ? $meta_image : $default_image;
?>
<title><?php echo $page_title; ?></title>
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
})(window,document,'script','dataLayer','GTM-WT69FTP');</script>
<!-- End Google Tag Manager -->
<meta name="description" content="<?php echo $page_desc; ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Shyam Group">
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_desc; ?>">
<meta property="og:image" content="<?php echo $page_image; ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:url" content="<?php echo str_replace('/index.php', '', current_url()); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title; ?>">
<meta name="twitter:description" content="<?php echo $page_desc; ?>">
<meta name="twitter:image" content="<?php echo $page_image; ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "RealEstateAgent",
  "name": "Shyam Group",
  "image": "https://www.shyamgroups.co.in/images/logo.svg",
  "@id": "",
  "url": "https://www.shyamgroups.co.in/",
  "telephone": "08511332200",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "107-108, First Floor, I Square Corporate Park, Nr. CIMS Hospital, Science City Road, Sola",
    "addressLocality": "Ahmedabad",
    "postalCode": "380060",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.070851,
    "longitude": 72.5175253
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "10:00",
    "closes": "19:00"
  },
  "sameAs": [
    "https://www.facebook.com/shyamgroups",
    "https://www.instagram.com/shyamgroup.official/",
    "https://www.linkedin.com/company/shyam-infrazone-private-limited/"
  ] 
}
</script>
<!-- canonical tag -->
<?php
$canonical = strtok(current_url(), '?'); // Remove query parameters
$canonical = str_replace("index.php", "", $canonical); // Remove index.php
$canonical = rtrim($canonical, '/'); // Remove trailing slash
$canonical = preg_replace('#(?<!:)//+#', '/', $canonical); // Remove duplicate slashes except https://
?>
<link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>" />
<!-- canonical tag end -->