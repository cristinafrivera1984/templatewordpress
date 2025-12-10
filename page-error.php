<?php
get_header();
?>




<main class="my-1">
  <!--MIGAS DE PAN-->
  <div class="container">
      <div class="d-flex justify-content-between flex-column flex-md-row">
        <div class="breadcrumbs flex-grow-1">
          <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
            Inicio</a> /
          <a href="#" class="active">Página Error</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->

  <div class="container">
    <div class="row justify-content-center main-content-error my-4">
        <div class="col-lg-4">
            <img class="img-fluid me-2" src="<?php echo get_template_directory_uri(); ?>/img/Ilustracion_404.svg" width="316" height="374" alt="Ilustración error">
        </div>
        <div class="col-lg-6">
          <h1>¡Oh!</h1>
          <h2>Hasta los mejores sitios se pierden a veces, pero volver al inicio e intentarlo de nuevo es importante.</h2>
             <a href="<?php echo site_url('/'); ?>" class="btn-primary rounded-pill text-decoration-none"><span class="material-symbols-outlined align-middle">home </span> ¿Regresamos al home? </a>

        </div>

    </div>
  </div>


<div class="mt-xxl"></div>


<div class="mt-xxl"></div>



</main>





<?php
get_footer();
?>