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
          <a href="#" class="active">Cooperativas</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->


<section class="main-content-cooperativas">
<div class="container">
    <h1>Cooperativas</h1>

    <div class="row align-items-center">
      <div class="col-md-6">
           <p>Las cooperativas son una de las principales expresiones de asociatividad que fortalecen el desarrollo local y la economía de los territorios. <span class="celeste">SERCOTEC las apoya con financiamiento, capacitación y asistencia técnica, impulsando su competitividad y sostenibilidad.</span> Con ello promueve el trabajo colaborativo y la generación de oportunidades para sus socios y comunidades.</p>
      </div>
      <div class="col-md-6">
        <img class="img-class-coop img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cooperativa_conarec.webp" width="480" height="316" alt="Fotografía de Cooperativa Conarec, aparecen 5 integrantes">
      </div>
    </div>
</div>


    <div class="container-fluid light-blue-box-oficinas border-0 rounded-0 py-xxl">
      <h2 class="text-center">Conoce nuestros fondos concursables</h2>
      <div class="row justify-content-center">
        <div class="col-sm-6 col-lg-4">
            <div class="card-coop">
              <h3 class="color-blue-dark-1">Creación y fortalecimiento de cooperativas</h3>
              <p>Fondo concursable que busca fortalecer a las cooperativas, impulsar su gestión y fomentar la inclusión de mujeres.</p>
              <a href="<?php echo site_url('/creacion-y-fortalecimiento-de-cooperativas'); ?>" target="_self" class="btn-primary rounded-pill text-decoration-none my-3">  
                Haz clic aquí para más información <span class="material-symbols-outlined align-middle"> arrow_forward </span></a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card-coop">
              <h3 class="color-blue-dark-1">Crece</h3>
              <p>Fondo concursable que apoya a MiPymes y cooperativas en su fortalecimiento, consolidación y competitividad. </p>
              <a href="<?php echo site_url('/crece'); ?>" target="_self" class="btn-primary rounded-pill text-decoration-none my-3">  
                Haz clic aquí para más información <span class="material-symbols-outlined align-middle"> arrow_forward </span></a>
            </div>
        </div>
        </div>
    </div>
<div class="my-xxl"></div>

<div class="position-relative">
        <img class="sombrilla img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cooperativas_imagen_03.png" width="200" height="192" role="presentation" alt=""></div>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-6 p-0">       
        <img class="img-class-coop-2 img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cooperativas_imagen_02.webp" width="600" height="355" role="presentation" alt="">
      </div>
      <div class="col-md-6">
        <div class="pt-md-0 pt-4">
            <h2>Capacítate con nosotros</h2>
            <p class="p-small">Aprende en 3 módulos a crear, organizar y gestionar una cooperativa.</p>
            <p class="p-small"><strong>¡Impulsa tu proyecto con este curso práctico y gratuito!</strong> </p>
            <a href="https://capacitacion.sercotec.cl/portal" rel="noopener noreferrer" target="_blank" class="btn-primary rounded-pill text-decoration-none my-3">  Ir al Portal de Capacitación 
              <span class="material-symbols-outlined align-middle"> arrow_forward </span>
              </a>
         </div>   
      </div>
    </div>
</div>
<div class="my-xxl"></div>

<!--Noticias Escritorio-->
<section class="">
    <div class="container-noticias-inicio bg-grey-5 color-grey-5">
        <div class="mx-auto" style="max-width: 1280px; padding: 20px 0;">
            <h1 class="text-center">Noticias</h1>
            <!--NOTICIAS INICIO-->
            <div class="module-news-index">
                <div class="main-news">
                    <a href="#"><img class="main-img" src="<?php echo get_template_directory_uri(); ?>/img/fake-news-main.jpg"></a>
                    <p class="fecha-news pt-1">20/02/2024</p>
                    <h1> <a href="#">Sercotec celebra el Día del Amor y la Amistad con una muestra de Mipymes</a></h1>
                    <a href="#" class="vermas">Ver más</a>
                </div>

                <div class="main-news-2">
                    <div>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fake-news-2.jpg"></a>
                    </div>
                    <div>
                        <p class="fecha-news">20/02/2024</p>
                        <h1> <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam aoreet dolore magna.</a></h1>
                        <a href="#" class="vermas">Ver más</a>
                    </div>
                </div>

                <div class="main-news-2">
                    <div>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fake-news-3.jpg"></a>
                    </div>
                    <div>
                        <p class="fecha-news">20/02/2024</p>
                        <h1> <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam aoreet dolore magna.</a></h1>
                        <a href="#" class="vermas">Ver más</a>
                    </div>
                </div>

            </div>
        </div>
       <a href="<?php echo site_url('/noticias'); ?>" class="btn-red-wp rounded-pill my-4 mx-auto">Ver todas las noticias</a>
    </div>
    <!--NOTICIAS INICIO-->
</section>
<!--Noticias Escritorio-->
 
<!--Noticias Mobile-->
<section>
    <div class="container-noticias-inicio-mob mb-4 mx-2">
        <div class="sidebar-carrusel-mobile">
            <div id="newsCarousel" class="carousel slide mb-xl" data-bs-ride="false" aria-label="Carrusel de noticias">

              <!-- Dots -->
              <div class="carousel-indicators carousel-indicators-place mb-4">
                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Noticia 1"></button>
                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1" aria-label="Noticia 2"></button>
                <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2" aria-label="Noticia 3"></button>
              </div>

              <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                  <div class="card-last-news-mobile p-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-card-noticia.jpg" class="card-img-top" alt="Imagen Noticia 1">
                    <div class="card-body">
                      <div class="d-flex flex-row align-items-center justify-content-between mt-2">
                          <span class="small-text date">29/08/2025</span>
                          <a href="#" class="categoria">Categoria</a>
                      </div>
                    
                      <h4 class="card-title mt-2">
                        <a href="#">Firma de contratos de ayudas económicas para pymes...</a>
                      </h4>
                    </div>
                  </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                  <div class="card-last-news-mobile p-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-card-noticia-2.jpg" class="card-img-top" alt="Imagen Noticia 1">
                    <div class="card-body">
                      <div class="d-flex flex-row align-items-center justify-content-between mt-2">
                          <span class="small-text date">29/08/2025</span>
                          <a href="#" class="categoria">Categoria</a>
                      </div>
                    
                      <h4 class="card-title mt-2">
                        <a href="#">Firma de contratos de ayudas económicas para pymes...</a>
                      </h4>
                    </div>
                  </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                  <div class="card-last-news-mobile p-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-card-noticia-3.jpg" class="card-img-top" alt="Imagen Noticia 1">
                    <div class="card-body">
                      <div class="d-flex flex-row align-items-center justify-content-between mt-2">
                          <span class="small-text date">29/08/2025</span>
                          <a href="#" class="categoria">Categoria</a>
                      </div>
                    
                      <h4 class="card-title mt-2">
                        <a href="#">Firma de contratos de ayudas económicas para pymes...</a>
                      </h4>
                    </div>
                  </div>
                </div>

              </div>

              <!-- Controles opcionales (flechas) -->
              <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
              </button>
            </div>
        </div>
         <a href="<?php echo site_url('/noticias'); ?>" class="btn-red-wp rounded-pill my-4 mx-auto">Ver todas las noticias</a>
    </div>
</section>
<!--Noticias Mobile-->
<div class="my-xxl"></div>




</section>

</main>





<?php
get_footer();
?>