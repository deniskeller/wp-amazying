<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon.png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="<?php amazying_header_class(); ?>">
    <div class="container">
      <div class="header-top">
        <svg class="logo">
          <use href="#icon-logo"></use>
        </svg>

        <div class="header-top__menu">
          <ul>
            <li>
              <a href="#" data-class="how-it-works">как работает</a>
            </li>
            <li>
              <a href="#" data-class="projects">проекты</a>
            </li>
            <li>
              <a href="#" data-class="why">почему амазон</a>
            </li>
          </ul>
        </div>

        <div class="header-top__left-items">
          <div class="btn-translator">
            <div class="btn btn-eng">ENG</div>
            <div class="btn btn-active btn-rus">РУС</div>
          </div>
          <a href="/business" class="btn-investor">предпринимателям</a>
        </div>

        <a href="#" class="menu-btn">
          <span></span>
        </a>
      </div>

      <div class="menu-mobile hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo_mobile-white.svg" class="logo_white"></img>
        <div class="header-top__menu-mobile">
          <ul>
            <li>
              <a href="#" data-class="how-it-works">как работает</a>
            </li>
            <li>
              <a href="#" data-class="projects">проекты</a>
            </li>
            <li>
              <a href="#" data-class="why">почему амазон</a>
            </li>
          </ul>
        </div>
        <div class="header-top__left-items-mobile">
          <div class="btn-investor">предпринимателям</div>
          <div class="btn-translator">
            <div class="btn btn-eng">ENG</div>
            <div class="btn btn-active btn-rus">РУС</div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <!--
    - переверстать шапку
    - вывести список меню в  админке
    - сделать флаг для стилей меню
  -->
