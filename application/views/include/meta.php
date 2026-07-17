<?php
    $default_title = "Shyam Group | Residential Plots in Dholera SIR";
    $default_desc  = "Shyam Groups offers advanced residential plots in Dholera SIR, and provides a wide range of options to own property in Dholera.";
    $default_image = base_url('images/og-default.jpg');

    $page_title = isset($meta_title) ? $meta_title : $default_title;
    $page_desc  = isset($meta_description) ? $meta_description : $default_desc;
    $page_image = isset($meta_image) ? $meta_image : $default_image;
?>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_desc; ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Shyam Group">
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_desc; ?>">
<meta property="og:image" content="<?php echo $page_image; ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:url" content="<?php echo current_url(); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $page_title; ?>">
<meta name="twitter:description" content="<?php echo $page_desc; ?>">
<meta name="twitter:image" content="<?php echo $page_image; ?>">