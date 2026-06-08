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
