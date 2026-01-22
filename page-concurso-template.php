<?php
/**
 * Template Name: Concurso publico template
 */
get_header();
?>










<main id="main-content" class="site-main">


  <div class="container">
      <div class="row justify-content-start main-content-oficinas">

  <?php
  while ( have_posts() ) :
    the_post();

    // 🔥 Quita los <p> y <br> automáticos SOLO en este template
    remove_filter('the_content', 'wpautop');
    remove_filter('the_content', 'wptexturize');
  ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php
        // Imprime el contenido EXACTO como lo pegaste en el editor
        the_content();
      ?>
    </article>

      </div>
      </div>

  <?php endwhile; ?>

</main>

<?php
get_footer();




