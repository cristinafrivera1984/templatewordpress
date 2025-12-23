<?php
get_header();
?>


<main class="container my-1">

  <div class="content-wrapper d-flex flex-column flex-lg-row justify-content-between">
    
    <section class="main-content inner-news pe-lg-4">
        <!--MIGAS DE PAN--> 
          <div class="d-flex justify-content-between flex-column flex-md-row">           
            <div class="breadcrumbs flex-grow-1">
                <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
                  Inicio</a> /
                <a href="#" class="active">Categoria</a>
            </div>
          </div> 
       <!--MIGAS DE PAN--> 

      <h1>Categoría: Región Metropolitana</h1>
       <div class="card-resultado">
          <div class="d-flex flex-column flex-md-row">
            <div class="me-3 mb-2 mt-2"><img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_01.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores" class="img-fluid">
            </div>
            <div>
              <div class="d-flex flex-column flex-sm-row mb-2 mt-2">
                    <span class="small-text me-3">29/08/2025</span>
                    <a href="#" class="categoria"> Nacional</a> 
                    <a href="#" class="categoria">Metropolitana</a>
                    <a href="#" class="categoria">Destacada</a>
                </div>  
                  <h2><a href="">15 pymes del país son reconocidas con el nuevo Sello Impacta Sustentable</a></h2>
                  <p>Es un fondo concursable de Sercotec que promueve la creación de nuevos negocios con oportunidad de participar..</p>
            </div>
          </div>
 
        </div>

    <!--Div botones de categorías-->
</section>


    <aside class="sidebar sidebar-news">
        <h3>Últimas noticias</h3>
        <div class="ultimas-noticias">
            <!--Ultimas 6 noticias-->
                  <div class="d-flex flex-row card-last-news">
                      <div class="me-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/noticia-1-ejemplo.png"></div>
                      <div class=""> 
                        <span class="small-text me-3 date">29/08/2025</span>
                        <a href="#" class="categoria">Los Lagos</a>
                        <h4><a href="">Firma de contratos de ayudas económicas para pymes tras tornado en Puerto..</a></h4>
                      </div>
                  </div>
                  <div class="d-flex flex-row card-last-news">
                      <div class="me-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/noticia-1-ejemplo.png"></div>
                      <div class=""> 
                        <span class="small-text me-3 date">29/08/2025</span>
                        <a href="#" class="categoria">Los Lagos</a>
                        <h4><a href="">Firma de contratos de ayudas económicas para pymes tras tornado en Puerto..</a></h4>
                      </div>
                  </div>                                       

            <!--Ultimas 6 noticias-->
            <a href="#" class="link-blue_01 text-center">Ver todas las noticias </a>
        <!--SIGUENOS EN REDES SOCIALES-->
        <div class="my-xxl">  
            <h3 class="my-4">Síguenos en redes sociales:</h3>
            <div class="d-flex flex-row justify-content-start align-items-center gap-3">
                    <a class="social-link" href="https://www.facebook.com/sercotec" target="_blank" aria-label="Ir a Facebook de Sercotec (se abre en una nueva pestaña)">
                        <img class="icon-link" src="http://localhost/sercotec/wp-content/themes/sercotec/img/icon_facebook.svg" width="26" height="26" alt="Sercotec Facebook" title="Sercotec Facebook">
                    </a>
                    <a class="social-link" href="https://www.instagram.com/sercotec_cl" target="_blank" aria-label="Ir a Instagram de Sercotec (se abre en una nueva pestaña)">
                        <img class="icon-link" src="http://localhost/sercotec/wp-content/themes/sercotec/img/icon_instagram.svg" width="26" height="26" alt="Sercotec Instagram" title="Sercotec Instagram">
                    </a>
                    <a class="social-link" href="https://twitter.com/Sercotec_Chile" target="_blank" aria-label="Ir a X / Twitter de Sercotec (se abre en una nueva pestaña)">
                        <img class="icon-link" src="http://localhost/sercotec/wp-content/themes/sercotec/img/icon_twitter.svg" width="22" height="23" alt="Sercotec Twitter" title="Sercotec Twitter" >
                    </a>
                    <a class="social-link" href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank" aria-label="Ir a canal de Youtube de Sercotec (se abre en una nueva pestaña)">
                        <img class="icon-link" src="http://localhost/sercotec/wp-content/themes/sercotec/img/icon_youtube.svg" width="28" height="19" alt="Sercotec Youtube" title="Sercotec Youtube">
                    </a>
                    <a class="social-link" href="https://cl.linkedin.com/company/sercotecchile" target="_blank" aria-label="Ir a Linkedin de Sercotec (se abre en una nueva pestaña)">
                        <img class="icon-link" src="http://localhost/sercotec/wp-content/themes/sercotec/img/icon_linkedin.svg" width="24" height="25" alt="Sercotec Linkedin" title="Sercotec Linkedin">
                    </a>                        
                </div>
        </div>
        <!--SIGUENOS EN REDES SOCIALES-->      
        </div>
        


        <!--acá va carrusel que va a aparecer en versión mobile-->
        <div class="sidebar-carrusel-mobile">
            <div id="newsCarousel" class="carousel slide mb-xl" data-bs-ride="false" aria-label="Carrusel de noticias">

              <!-- Dots -->
              <div class="carousel-indicators carousel-indicators-place my-2">
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
        <!--acá va carrusel que va a aparecer en versión mobile-->

    </aside>

  </div>
</main>



<?php
get_footer();
?>