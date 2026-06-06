<?php

/**
 * Функции и настройки темы Amazying
 */

// Защита от прямого доступа к файлу через браузер
if (! defined('ABSPATH')) {
  exit;
}

if (! function_exists('amazying_theme_setup')) {
  function amazying_theme_setup()
  {
    // Позволяет WordPress автоматически управлять тегом <title> для каждой страницы
    add_theme_support('title-tag');

    // Включает поддержку миниатюр (главных изображений) для страниц
    add_theme_support('post-thumbnails');

    // Регистрируем место для динамического меню (чтобы управлять им из админки)
    register_nav_menus(array(
      'primary' => 'Главное меню шапки',
    ));
  }
}
add_action('after_setup_theme', 'amazying_theme_setup');


/**
 * Правильное подключение стилей и скриптов (взамен старых тегов link и script из HTML)
 */
function amazying_enqueue_scripts()
{
  // 1. Подключаем встроенную в WordPress библиотеку jQuery (качать из CDN больше не нужно)
  wp_enqueue_script('jquery');

  // 2. Подключаем внешние скрипты (SweetAlert), которые были у вас в верстке
  wp_enqueue_script('sweetalert', 'https://jsdelivr.net', array('jquery'), '7.29.2', true);

  // 3. РАЗДЕЛЕНИЕ СТИЛЕЙ ПО СТРАНИЦАМ

  // Если мы на Главной странице (шаблон front-page.php)
  if (is_front_page()) {
    // Подключаем стили главной страницы
    wp_enqueue_style('amazying-main-style', get_template_directory_uri() . '/style/style.css', array(), '1.0.0');
    wp_enqueue_style('amazying-media', get_template_directory_uri() . '/style/media.css', array(), '1.0.0');

    // Подключаем скрипт инжекта SVG
    wp_enqueue_script('svg-inject', get_template_directory_uri() . '/js/svg-inject.min.js', array(), '1.0.0', true);
  }
  // Если мы на странице Бизнеса (урл /business)
  elseif (is_page('business')) {
    // Подключаем стили инвесторов
    wp_enqueue_style('amazying-investor-style', get_template_directory_uri() . '/style/style_investor.css', array(), '1.0.0');

    // Подключаем Slick Carousel
    wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
  }

  // 4. Подключаем ваш основной кастомный файл JavaScript
  wp_enqueue_script('amazying-custom-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
// Привязываем функцию подключения к системному хуку WordPress
add_action('wp_enqueue_scripts', 'amazying_enqueue_scripts');
