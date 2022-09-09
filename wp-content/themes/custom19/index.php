<!doctype html>
<html class="wide wow-animation" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

  <!-- fonts -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-Inter-Regular.woff2" as="font" type="font/woff2" crossorigin> -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-Inter-SemiBold.woff2" as="font" type="font/woff2" crossorigin> -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-Inter-ExtraBold.woff2" as="font" type="font/woff2" crossorigin> -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-Inter-Medium.woff2" as="font" type="font/woff2" crossorigin> -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-Inter-Bold.woff2" as="font" type="font/woff2" crossorigin> -->
  <!-- // <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/fonts/hinted-subset-MontserratThin-Regular.woff2" as="font" type="font/woff2" crossorigin> -->

  <!-- styles -->
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/css/separate-css/bootstrap.css" as="style">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/css/separate-css/fonts.css" as="style">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/css/separate-css/style.css" as="style">
  <!-- <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/css/main.min.css" as="style" -->

  <!-- scripts -->
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/js/separate-js/core.min.js" as="script">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/front/prod/static/js/separate-js/script.js" as="script">

  <!-- <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/js/main.min.js" as="script"> -->

  <!-- <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/front/prod/static/js/main.min.js" as="script"> -->

  <?php wp_head(); ?>
</head>

<body >
  <?php wp_body_open(); ?>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>

  <div <?php body_class('page'); ?>>

    <?php do_action('get_header'); ?>

    <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>

    <?php do_action('get_footer'); ?>
    <!-- end page footer -->
  </div>
  <!-- end page wrapper -->

  <div class="snackbars" id="form-output-global"></div>
  <?php wp_footer(); ?>
</body>
</html>
