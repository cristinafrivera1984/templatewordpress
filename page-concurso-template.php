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
            remove_filter('the_content', 'wpautop');
            remove_filter('the_content', 'wptexturize');
          ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <h1 class="pt-md-4 pt-2"><?php the_title(); ?></h1>
            <p style="color: red;">Migas de pan pendientes (desarrollo)</p>
          <?php
  
            the_content();
          ?>
        </article>

      </div>
      </div>

  <?php endwhile; ?>

</main>

<?php
get_footer();




