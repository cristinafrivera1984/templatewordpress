<?php
/**
 * Template Name: Cuenta pública template
 */
get_header();
?>

<main id="main-content">

<?php
/* LOOP PRINCIPAL: NO BORRAR */
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>

  <!-- CABECERA -->
   <div class="container content-cta-publica mt-4">
    <h1><?php the_title(); ?></h1>
  </div>

  <!-- CONTENIDO EDITORIAL -->

    <?php the_content(); ?>

  <!-- HISTÓRICOS -->
<?php
// Obtenemos el ID del padre
$parent_id = wp_get_post_parent_id( get_the_ID() );

// Si no tiene padre, estamos en la página padre
if ( $parent_id === 0 ) {
  $parent_id = get_the_ID();
}

$historicos = new WP_Query([
  'post_type'      => 'page',
  'post_parent'    => $parent_id,
  'posts_per_page' => -1,
  'orderby'        => 'menu_order',
  'order'          => 'ASC'
]);
?>

<section class="page-historicos my-2 my-md-5">
<div class="container content-cta-publica">
  <div class="row">    
  <h3 class="color-blue-dark-1">Encuentra nuestras Cuentas Públicas Participativas anteriores aquí </h3>

    <ul class="square-list" style="margin-left: 14px;">
    <?php if ( $historicos->have_posts() ) : ?>
      <?php while ( $historicos->have_posts() ) : $historicos->the_post(); 
        $is_current = get_the_ID() === get_queried_object_id();
      ?>
        <li class="<?php echo $is_current ? 'is-active' : ''; ?>">
          <a 
            href="<?php the_permalink(); ?>"
            <?php echo $is_current ? 'aria-current="page"' : ''; ?>
          >
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <li>No hay históricos disponibles.</li>
    <?php endif; ?>
  </ul>
  </div>
</div>
</section>

<?php
  endwhile;
endif;
?>

</main>

<?php get_footer(); ?>