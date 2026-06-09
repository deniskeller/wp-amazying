<?php
// Защита от прямого доступа к файлу через браузер
if (! defined('ABSPATH')) {
  exit;
}

require_once get_template_directory() . '/src/inc/helpers.php';

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
  // Определяем, запущен ли режим разработки Vite (проверяем доступность сервера Vite)
  $is_dev = false;
  $fp = @fsockopen('localhost', 5173, $errno, $errstr, 0.1);
  if ($fp) {
    $is_dev = true;
    fclose($fp);
  }

  if ($is_dev) {
    // подключаем клиент Vite
    wp_enqueue_script('vite-client', 'http://localhost:5173/@vite/client', array(), null, true);

    // подключаем главный js файл
    wp_enqueue_script('amazying-vite-main', 'http://localhost:5173/src/js/main.js', array(), null, true);

    // настрйоки для страниц
    if (is_page('business')) {
      wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    }
  } else {
    $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';

    if (file_exists($manifest_path)) {
      $manifest = json_decode(file_get_contents($manifest_path), true);

      // Подключаем скомпилированный главный JS
      $js_file = $manifest['src/js/main.js']['file'];
      wp_enqueue_script('amazying-prod-js', get_template_directory_uri() . '/dist/' . $js_file, array(), filemtime(get_template_directory() . '/dist/' . $js_file), true);

      // Подключаем скомпилированные CSS стили
      if (isset($manifest['src/js/main.js']['css'])) {
        foreach ($manifest['src/js/main.js']['css'] as $css_file) {
          wp_enqueue_style('amazying-prod-css-' . md5($css_file), get_template_directory_uri() . '/dist/' . $css_file, array(), null);
        }
      }
    }
  }
}
// Привязываем функцию подключения к системному хуку WordPress
add_action('wp_enqueue_scripts', 'amazying_enqueue_scripts');


/**
 * Перехватываем тег скрипта Vite и добавляем ему type="module"
 */
function amazying_set_script_attributes(string $tag, string $handle, ?string $src): string
{
  // Массив с ID скриптов, которым нужен тип модуля
  $vite_scripts = array('vite-client', 'amazying-vite-main');

  if (in_array($handle, $vite_scripts)) {
    return '<script type="module" src="' . esc_url((string) $src) . '"></script>' . "\n";
  }

  return $tag;
}
add_filter('script_loader_tag', 'amazying_set_script_attributes', 10, 3);
