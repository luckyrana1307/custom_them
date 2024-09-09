<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS (already enqueued in functions.php) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- WordPress head function -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="">
        <h1 class="sitename">QuickStart</h1>
      </a>

      <nav id="navmenu" class="navmenu">
      <?php
            wp_nav_menu(array(
                'theme_location' => 'primary', // Register this location in functions.php
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
            ));
            ?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>
