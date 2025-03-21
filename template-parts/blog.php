<div class="card" style="width: 18rem;">
    <img src="<?php the_post_thumbnail_url( ) ?>" class="img-fluid">
  <div class="card-body">
   <a href="<?php the_permalink(); ?>"> 
        <h5 class="card-title"><?php the_title( ); ?></h5>
   </a>
    <p class="card-text"><?php the_excerpt( ); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver más</a>
  </div>
</div>
