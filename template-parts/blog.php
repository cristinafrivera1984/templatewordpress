<?php get_header(); ?>

<main id="main" class="site-main single-post">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article <?php post_class('post'); ?>>

    <header class="post-header">
      <h1><?php the_title(); ?></h1>

      <p class="post-meta">
        <time datetime="<?php echo get_the_date('c'); ?>">
          <?php echo get_the_date(); ?>
        </time>
        <?php if ( get_the_category() ) : ?>
          · <?php the_category(', '); ?>
        <?php endif; ?>
      </p>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
      <figure class="post-featured-image">
        <?php the_post_thumbnail('large'); ?>
      </figure>
    <?php endif; ?>

    <div class="post-content">
      <?php the_content(); ?>
    </div>

    <footer class="post-footer">
      <?php the_tags('<p class="post-tags">', ', ', '</p>'); ?>
    </footer>

  </article>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
