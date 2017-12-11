<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="description" content="">
    <meta name="author" content="">-->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo('name'); ?>
    </title>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Hind|Open+Sans" rel="stylesheet">

    <!-- Icons from Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >

    <div class="tagline-upper text-center text-heading text-white mt-5 d-none d-lg-block" style="font-size:4rem;">Common Goods Co-operative Grocery</div>
    <div class="tagline-lower text-center text-expanded text-white text-uppercase mb-5 d-none d-lg-block" style="font-size:1.25rem;">744 South Main Street | South Bend, IN 46618</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <?php
            $args = array(
                'menu'        =>  'header-menu',
                'menu_class'  =>  'nav navbar-nav mx-auto',
                'container'   =>  'false'
            );
            wp_nav_menu( $args );
          ?>
<!--
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="membership.php">Membership</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="meet-the-farmers.php">Meet the Farmers</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="educational-resources.php">Education</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="FAQ.php">FAQ</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            </li>
          </ul>-->
        </div>
      </div>
    </nav>