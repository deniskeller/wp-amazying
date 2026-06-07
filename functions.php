<?php
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

// подключение стилей и скриптов
function amazying_enqueue_scripts()
{
  if (is_front_page()) {
    // стили
    wp_enqueue_style('amazying-main-style', get_template_directory_uri() . '/style/style.css', array(), '1.0.0');
    wp_enqueue_style('amazying-media', get_template_directory_uri() . '/style/media.css', array(), '1.0.0');
  } elseif (is_page('business')) {
    // стили
    wp_enqueue_style('amazying-investor-style', get_template_directory_uri() . '/style/style_investor.css', array(), '1.0.0');
    wp_enqueue_style('amazying-media', get_template_directory_uri() . '/style/media.css', array(), '1.0.0');

    // слайдер
    wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
  }
  // главный файл скриптов
  wp_enqueue_script('amazying-custom-js', get_template_directory_uri() . '/js/script.js', array(), filemtime(get_template_directory() . '/js/script.js'), true);
}
// Привязываем функцию подключения к системному хуку WordPress
add_action('wp_enqueue_scripts', 'amazying_enqueue_scripts');
