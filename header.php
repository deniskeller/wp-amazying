<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="wrapper">
      <div class="header-top">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_desktop.svg" class="logo_desktop"></img>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_mobile.svg" class="logo_mobile"></img>
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_mobile-white.svg" class="logo_white"></img>
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
      <div class="header-content">
        <div class="header-content__left">
          <div class="second-title">Новый способ умножить инвестиции вместе с Амазон</div>
          <div class="title">Инвестируйте в бизнес на амазон</div>
          <div class="text">Получите доступ к проектам, инвестируйте в торговый оборот, зарабатывайте от 36-60% на инвестициях в реальный бизнес на Амазон.</div>
          <div class="btn-mail">
            <input type="email" name="login" class="enter-mail" placeholder="Введите email">
            <div class="btn_check-in">регистрация <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_white.svg" class="arrow_white">
            </div>
          </div>
          <div class="statistics">
            <div class="item">
              <div class="title">оборот амазон</div>
              <div class="numbers">411 000 000$</div>
            </div>

            <div class="item">
              <div class="title">товаров в базе</div>
              <div class="numbers">321</div>
            </div>

            <div class="item">
              <div class="title">инвесторов</div>
              <div class="numbers">67</div>
            </div>
          </div>
        </div>
        <div class="header-content__right">
          <img src="<?php echo get_template_directory_uri(); ?>/images/gardener.svg" class="gardener"></img>
          <img src="<?php echo get_template_directory_uri(); ?>/images/gardener-mobile.svg" class="gardener-mobile"></img>
        </div>
      </div>
    </div>
  </header>
