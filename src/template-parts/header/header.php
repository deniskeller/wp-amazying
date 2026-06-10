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
    <!-- <div class="header__container">
      <div class="navbar">
        <svg class="navbar__logo">
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

      <div class="menu-mobile">
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
    </div> -->

    <div class="header__container">
      <a href="#" class="header__logo">
        <svg class="navbar__logo">
          <use href="#icon-logo"></use>
        </svg>
      </a>

      <button class="header__burger" id="burgerToggle" aria-label="Открыть меню">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <div class="header__menu" id="headerMenu">
        <nav class="header__nav">
          <ul class="header__list">
            <li><a href="#" class="header__link">как работает</a></li>
            <li><a href="#" class="header__link">проекты</a></li>
            <li><a href="#" class="header__link">почему амазон</a></li>
          </ul>
        </nav>

        <div class="header__actions">
          <a href="#" class="header__btn">Войти</a>

          <div class="header__lang">
            <select name="lang" id="langSelect" aria-label="Выбор языка">
              <option value="ru">RU</option>
              <option value="en">EN</option>
            </select>
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
