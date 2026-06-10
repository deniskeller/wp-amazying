<?php

// генерация классов для header в зависимости от текущей страницы
function amazying_header_class()
{
  // дефолтный класс
  $classes = array('header');

  // добавляем slug в класс
  if (is_page()) {
    global $post;
    $classes[] = 'header--' . $post->post_name;
  }

  echo implode(' ', $classes);
}


// регистрацию навбаров для админки
function my_theme_register_menus()
{
  register_nav_menus(array(
    'header_investor_menu' => 'Меню инвестора (Главная)',
    'header_business_menu' => 'Меню предпринимателя (Бизнес)',
  ));
}
add_action('after_setup_theme', 'my_theme_register_menus');
