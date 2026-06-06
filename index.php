<?php
get_header();
?>

<main class="main-content">
  <div class="wrapper">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_title('<h1>', '</h1>');
        the_content();
      endwhile;
    else :
      echo '<p>Контент не найден</p>';
    endif;
    ?>
  </div>
</main>

<?php
get_footer();
