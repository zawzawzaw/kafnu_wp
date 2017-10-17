<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="shortcut icon" href="<?php echo THEMEROOT; ?>/favicon.ico" type="image/x-icon" />

  <title><?php echo wp_title(''); ?></title>
  <meta name="description" content="Kafnu is a community of creators and innovators, a place for collaboration and productivity.">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui"/>

  <!-- Critical Css -->
  <?php if(DEBUG): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEROOT; ?>/kafnu_assets/css/critical_style.css">
  <?php else: ?>

    <style type="text/css">
        <?php require_once('kafnu_assets/css/critical_style.css'); ?>
    </style>
  <?php endif; ?>
  
  <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->


  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php // wordpress head functions ?>
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <!-- 
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TBJZVPD');</script>
  -->
  <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

  <?php include "includes/preloader.php"; ?>

  <?php include "includes/header_desktop.php"; ?>
  <?php include "includes/header_mobile.php"; ?>


  <div id="page-wrapper">
    <div id="page-wrapper-content">
      
      <div id="page-home-nav-trigger"></div>
