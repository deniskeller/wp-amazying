<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/src/images/favicon.png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="bg">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/header-bg.jpg" alt="" class="img">
    </div>
    <div class="wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/src/images/header-circles.svg" alt="" class="circles">

      <div class="header-top">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-white-desktop.svg" class="logo_desktop"></img>
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo_mobile-white.svg" class="logo_mobile"></img>

        <div class="header-top__right">
          <div class="header-top__menu">
            <ul>
              <li>
                <a href="#" data-class="how-it-works">как работает</a>
              </li>
              <li>
                <a href="#" data-class="projects">запуск продукта</a>
              </li>
              <li>
                <a href="#" data-class="why">увеличение товарооборота</a>
              </li>
              <li>
                <a href="#" data-class="why">как получить</a>
              </li>
              <li>
                <a href="#" data-class="why">требования</a>
              </li>
            </ul>
          </div>
          <div class="header-top__left-items">
            <div class="btn-translator">
              <div class="btn btn-eng">ENG</div>
              <div class="btn btn-active btn-rus">РУС</div>
            </div>
            <a href="/" class="btn-investor">инвесторам</a>
          </div>
          <a href="#" class="menu-btn">
            <span></span>
          </a>
        </div>

      </div>

      <div class="menu-mobile hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo_mobile-white.svg" class="logo_white"></img>
        <div class="header-top__menu-mobile">
          <ul>
            <li>
              <a href="#" data-class="how-it-works">как работает</a>
            </li>
            <li>
              <a href="#" data-class="projects">запуск продукта</a>
            </li>
            <li>
              <a href="#" data-class="why">увеличение товарооборота</a>
            </li>
            <li>
              <a href="#" data-class="why">как получить</a>
            </li>
            <li>
              <a href="#" data-class="why">требования</a>
            </li>
          </ul>
        </div>
        <div class="header-top__left-items-mobile">
          <div class="btn-investor">инвесторам</div>

          <div class="btn-translator">
            <div class="btn btn-eng">ENG</div>
            <div class="btn btn-active btn-rus">РУС</div>
          </div>

        </div>
      </div>

      <div class="pre-h1">
        <span class="red">AmazYing</span> <span class="line"></span> финансовый партнёр по бизнесу на Amazon
      </div>

      <h1 class="h1">Получи до 50 000$ на развитие бизнеса на Amazon</h1>
      <div class="sub-h1">Выдаем деньги на увеличение товарооборота или запуск нового продукта на Amazon и помогаем правильно запустить продажи</div>
      <div class="right-block">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/header-window.svg" alt="" class="right-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/src/images/coin.svg" alt="" class="coin-bg">
        <div class="open-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/src/images/header-copy.svg" alt="" class="copy">
          <h2 class="h2">Узнайте, сколько денег вы можете привлечь на развитие бизнеса</h2>
          <div class="text">Эксперты AmazYing оценят перспективы товара и посчитают ваш лимит</div>
          <a href="#" class="button make-it-slow"><span>Заполнить анкету</span> <img src="<?php echo get_template_directory_uri(); ?>/src/images/header-arrow.svg" alt="" class="arrow"></a>
        </div>
      </div>
    </div>
  </header>
