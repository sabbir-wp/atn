<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header id="masthead" class="site-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-3 col-6">
            <div class="logo">
              <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
              <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-9 col-6">
            <div class="menu-tigger">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <nav id="site-navigation" class="main-navigation">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'Primary',
                'menu_id'        => 'menu-main-menu',
                'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0 menu-nav',
                'container'      => false,
              ));

              ?>

            </nav>
          </div>
        </div>
      </div>
    </header>
