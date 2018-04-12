<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#" itemtype="http://schema.org/Article">
<head>
  <!-- Meta Charset & Media Device View -->
  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico"/>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Meta Robots -->
  <meta name="robots" content="noindex,nofollow" />
  <!-- Title -->
  <title> <?php bloginfo('name'); ?> </title>
  <!-- Meta Description -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- Meta Keywords -->
  <meta name="keywords" content="digital marketing, seo, ux ui design, graphic design, website, development">
  <meta name="author" content="Mifer Dang">
  <meta name="copyright" content="Mifer Dang">
  <!-- Meta Geography -->
  <meta name="geo.region" content="VN" />
  <meta name="geo.position" content="14.058324;108.277199" />
  <meta name="ICBM" content="14.058324, 108.277199" />
  <!-- Meta Href Language -->
  <link rel="alternate" href="http://miferdang.freetzi.com/" hreflang="vi-vn" />
  <!-- Declare Canonical Link Page -->
  <link rel="canonical" href="http://miferdang.freetzi.com/" />
  <!-- Meta Open Graph Data For Social Media -->
  <meta property="fb:page_id" content="100012218890824" />
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="article" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/web_social_media.jpg" />
  <meta property="og:url" content="http://miferdang.freetzi.com/" />
  <!-- Meta Twitter Card Data -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
  <meta name="twitter:creator" content="miferdang">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/web_social_media.jpg" />
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="<?php bloginfo('name'); ?>">
  <meta itemprop="description" content="<?php bloginfo('description'); ?>">
  <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/web_social_media.jpg">
  <!-- XXX Declare Schema Data -->
  <!-- XXX Meta Google Site Verification -->

  <!-- Materialize CSS 1.0.0 beta -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <!--Import Font Awesome-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <!-- Wordpress Header -->
  <?php wp_head() ?>
</head>

<body>
  <!-- Navbar -->
  <navbar>
    <!-- Navbar default for medium & large screen -->
    <nav id="navbar-default">
      <div class="container">
        <!-- This button just show on mobile screen -->
        <button class="btn-menu" data-id="navbar-mobile" onclick="showMenuMobile(this.getAttribute('data-id'))">
          <i class="fas fa-bars"></i>
        </button>
        <div class="brand-logo">
          <a title="home-page" href="/" >
            <img class="img-logo" alt="mifer-logo" title="img-logo"
              src="<?php echo get_template_directory_uri(); ?>/assets/mifer_logo.jpg"/>
          </a>
        </div>
        <div class="list-menu right hide-on-med-and-down">
          <?php wp_nav_menu( array( 'theme_location' => 'navbar' ) ); ?>
        </div>
      </div>
    </nav>
    <!-- List Menu Navbar just show on mobile screen -->
    <div id="navbar-mobile" class="center">
      <?php wp_nav_menu( array ('theme_location' => 'navbar' ) ); ?>
    </div>
  </navbar>
