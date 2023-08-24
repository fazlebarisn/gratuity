<?php
/** 
* Header template file
* @package gratuity
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <?php
      if( function_exists('wp_body_open')){
          wp_body_open();
      }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1> -->
      <?php
        $site_logo = get_theme_mod('custom_logo');
        $home_page = esc_url(get_home_url());

        if ( function_exists( 'the_custom_logo' ) && $site_logo ) {
          // Display the logo if it's set
          the_custom_logo();
        }else{
          // Display the site title if no logo is set
          echo '<h1 class="logo me-auto"> <a href="'. $home_page .'">' . esc_html(get_bloginfo('name')) . '</a></h1>';
        }
      ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->
      <?php get_template_part( "template-parts/header/nav" ) ?>

      <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php get_template_part( "template-parts/header/hero" ) ?>
  <!-- End Hero -->