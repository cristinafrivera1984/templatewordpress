<?php
get_header();
?>


<!-- Hero Banner Inicio -->
<div class="hero-banner-wrapper">
  <div class="hero-banner-slider" id="heroSlider" role="region" aria-label="Banner principal con actualizaciones con información relevante y convocatorias abiertas">
    <div class="hero-slide">
      <a href="#" target="_self" rel="noopener noreferrer"  aria-label="Llamado concurso público 2025 Operadores de Centros de Desarrollo de Negocios - Pueblos Originarios - Botón: Postula Aquí, se abre en la misma pestaña">
         <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/banner_catastro_escritorio.webp" alt="Llamado concurso público 2025 Operadores de Centros de Desarrollo de Negocios - Pueblos Originarios - Botón: Postula Aquí" class="desktop-img">     
          <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/banner_catastro_celu.webp" alt="Llamado concurso público 2025 Operadores de Centros de Desarrollo de Negocios - Pueblos Originarios - Botón: Postula Aquí (version celular)" class="tablet-img">
     </a>
  </div>    
    <div class="hero-slide">
      <a href="https://www.sercotec.cl/sercotec-invita-a-utilizar-sus-canales-de-atencion-puntos-mipe/" target="_self" rel="noopener noreferrer"  aria-label="Postula ahora, se abre en la misma pestaña">
         <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/banner_navidad_escritorio.webp" alt="Atención al cliente - ¿Necesitas saber cómo contactarnos? Punto MIPE - Botón: Más información" class="desktop-img">     
          <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/banner_navidad_mobile.webp" alt="Atención al cliente - ¿Necesitas saber cómo contactarnos? Punto MIPE - Botón: Más información - (version celular)" class="tablet-img">
     </a>
   </div>       
  </div>

  <!-- Flechas -->
    <!-- Flechas con SVG y clase para animación -->
    <button class="hero-arrow prev" id="heroPrev" aria-label="Ir al slide anterior">
      <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/prev_flecha_01.png" width="34" height="34" alt="Anterior">
    </button>
    <button class="hero-arrow next" id="heroNext" aria-label="Ir al slide siguiente">
      <img src="https://www.sercotec.cl/wp-content/uploads/media/banner-inicio/next_flecha_01.png" width="34" height="34" alt="Siguiente">
    </button>


  <!-- Bullets -->
  <div class="hero-bullets" id="heroBullets"></div>
  </div>
  <!-- Hero Banner Final -->

<section class="modulo-iframe-inicio" aria-labelledby="Iframe módulo: Asesoría experta, capacitaciones de Centro de Desarrollo de Negocios y Financiamiento Sercotec">
  <div class="iframe-wrapper">
    <iframe
      id="iframe-inicio"
      src="https://sctwidgets.qa.sercotec.cl/tresPestanias"
      title="Asesoría experta, capacitaciones de Centro de Desarrollo de Negocios y Financiamiento Sercotec"
      loading="lazy"
    ></iframe>
  </div>
</section>


<!-- Módulo Cuestionario-->
<section>
    <div class="modulo-cuestionario row justify-content-center align-items-center align-items-center">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <p>¿Listo/a para darle un impulso a tu proyecto? </p>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="position-relative">
                <div class="nave">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#iframeModalCuestionario">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cohete_2.svg" class="img-fluid" width="199" height="157" alt="Icono">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MODAL DEL CUESTIONARIO-->
    <div class="modal fade" id="iframeModalCuestionario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title h5" id="iframeModalLabel">
                    </h2>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                    </button>
                </div>

                <div class="modal-body p-0">
                    <div class="iframe-wrapper-cuestionario">
                    <iframe
                        id="iframeTool"
                        src="https://sctwidgets.qa.sercotec.cl/cuestionario"
                        title="Herramienta interactiva de Sercotec - Ingresa y descubre la oferta programática de Sercotec"
                        loading="lazy"
                        referrerpolicy="no-referrer"
                        allowfullscreen>
                    </iframe>
                    </div>
                </div>
        </div>
    </div>
    </div>
<!--MODAL DEL CUESTIONARIO-->
<!-- Módulo Cuestionario-->


<!-- HTML Calugas Escritorio -->
 <h1 class="text-center mt-2 mb-4">Apoyo, asesoría y acompañamiento</h1>
 <section>
    <div class="slider-container">
    <div class="slider-wrapper">
        <div class="slider" id="slider-calugas">
        <!--Glide #1 CDN-->
        <div class="slide">
            <a href="https://www.sercotec.cl/centros-de-negocios/" id="caluga_cdn"  target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Centros de Negocios de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/01_cdn_desktop_glide.svg" width="240" height="154" alt="Centros de Negocios de Sercotec">
            </a>
        </div>
        <!--Glide #2 Barrios-->
        <div class="slide">
            <a href="https://www.sercotec.cl/barrios-comerciales/" id="caluga_barrios" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Barrios Comerciales de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/02_barrios_desktop_glide.svg" width="240" height="154" alt="Barrios Comerciales de Sercotec">
            </a>
        </div>
        <!--Glide #3 Cooperativas-->
        <div class="slide">
            <a href="<?php echo site_url('/cooperativas'); ?>" id="caluga_cooperativas" target="_self" rel="noopener noreferrer"  aria-label="Ir al sitio de Sustentabilidad de Sercotec (se abre en una nueva pestaña)">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/cooperativas_desktop.svg" width="240" height="154" alt="Sustentabilidad de Sercotec">
            </a>
        </div>

        <!--Glide #3 Sustentabilidad-->
        <div class="slide">
            <a  href="https://www.sercotec.cl/sello-impacta-sustentable/" id="caluga_sustentabilidad" target="_self" rel="noopener noreferrer"  aria-label="Ir al página interior de Cooperativas de">

                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/03_sustentabilidad_desktop_glide.svg" width="240" height="154" alt="Sustentabilidad de Sercotec">
            </a>
        </div>
        <!--Glide #4 Pymes en Línea-->
        <div class="slide">
            <a href="https://pymesenlinea.cl" id="caluga_pymes_en_linea" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Pymes en Línea (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/04_pymeslinea_desktop_glide.svg" width="240" height="154" alt="Pymes en Línea">
            </a>
        </div>
        <!--Glide #5 Portal de Capacitación de Sercotec-->
        <div class="slide">
            <a href="https://capacitacion.sercotec.cl/portal" id="caluga_portal_capacitacion" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Portal de Capacitación de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/05_portalcapacitacion_desktop_glide.svg" width="240" height="154" alt="Portal de Capacitación de Sercotec">
            </a>
        </div>
        <!--Glide #6 Ruta Digital de Sercotec-->
        <div class="slide">
            <a href="https://www.rutadigital.cl" id="caluga_ruta_digital" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Ruta Digital de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/06_ruta_desktop_glide.svg" width="240" height="154" alt="Ruta Digital de Sercotec">
            </a>
        </div>
        <!--Glide #7 Asesoría Legal Virtual de Sercotec-->
        <div class="slide">
            <a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" id="caluga_asesoria_legal" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Asesoría Legal Virtual de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/07_asesoria_legal_desktop_glide.svg" width="240" height="154" alt="Asesoría Legal Virtual de Sercotec">
            </a>
        </div>
    <!--Glide #8 Explorador de Sercotec-->     
        <div class="slide">
            <a href="https://explorador.sercotec.cl" id="caluga_explorador" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Explorador Territorial de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/08_explorador_desktop_glide.svg" width="240" height="154" alt="Explorador Territorial de Sercotec">
            </a>
        </div>

    <!--Glide #9 Somos Empresarias de Sercotec-->
        <div class="slide">
            <a href="https://www.sercotec.cl/somosempresarias/" id="caluga_somos_empresarias" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Somos Empresarias de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/09_somoempresarias_desktop_glide.svg" width="240" height="154" alt="Somos Empresarias de Sercotec">
            </a>
        </div>
    <!--Glide #10 Concursos públicos-->
        <div class="slide">
            <a href="https://www.sercotec.cl/concursos-publicos2/" id="caluga_concursos_publicos" target="_self" rel="noopener noreferrer"  aria-label="Ir a página interior Concursos públicos del sitio sercotec.cl (se abre en la misma pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/10_concursospublicos_desktop_glide.svg" width="240" height="154" alt="Concursos públicos de Sercotec">
            </a>
        </div>
    <!--Glide #11 Canales Oficiales de contacto de Sercotec-->
        <div class="slide">
            <a href="https://www.sercotec.cl/sercotec-invita-a-utilizar-sus-canales-de-atencion-puntos-mipe/" id="caluga_canales_oficiales" target="_self" rel="noopener noreferrer"  aria-label="Ir a página de noticia sobre Canales Oficiales de contacto del sitio sercotec.cl (se abre en la misma pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/11_canales_oficiales_desktop_glide.svg" width="240" height="154" alt="Canales Oficiales de contacto de Sercotec">
            </a>
        </div>     

        </div>
    </div>

    <!-- Flechas debajo -->
    <div class="slider-arrows" style="text-align:center; margin:20px 0;">
        <button class="arrow prev" id="prevBtn">
        <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_left.svg" width="40" height="40">
        </button>
        <button class="arrow next" id="nextBtn">
        <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_right.svg" width="40" height="40">
        </button>
    </div>
    </div>
</section>
<!-- HTML Calugas Escritorio -->

<!-- HTML Calugas Mobile -->
 <section>
    <div class="slider-container-mobile">
    <div class="slider-wrapper-mobile">
        <div class="slider-mobile" id="slider-calugas-mobile">
        <!-- Página 1 -->
        <div class="page">
            <!-- caluga 1 punto de atencion -->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/sercotec-invita-a-utilizar-sus-canales-de-atencion-puntos-mipe/" id="caluga_canales_oficiales_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir a página de noticia sobre Canales Oficiales de contacto del sitio sercotec.cl (se abre en la misma pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/01_canal_mobile_glide.svg" width="140" height="120" alt="Canales Oficiales de contacto de Sercotec">
            </a>
            </div>
            <!-- caluga 2 cdn -->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/centros-de-negocios/" id="caluga_cdn_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Centros de Negocios de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/03_cdn_mobile_glide.svg" width="140" height="120" alt="Centros de Negocios de Sercotec">
            </a>
            </div>

            <!-- caluga 3 barrios-->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/barrios-comerciales/" id="caluga_barrios_mob" target="_blank" rel="noopener noreferrer" aria-label="Ir al sitio de Barrios Comerciales de Sercotec (se abre en nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/02_barrios_mobile_glide.svg" alt="Barrios Comerciales de Sercotec" width="140"  height="120">
            </a>          
            </div>
            <!-- caluga 4 sustentabilidad -->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/sello-impacta-sustentable/" id="caluga_sustentabilidad_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir al sitio de Sustentabilidad de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/04_sustentabilidad_mobile_glide.svg" width="140"  height="120" alt="Sustentabilidad de Sercotec">
            </a>
            </div>
        </div>

        <!-- Página 2 -->
        <div class="page">
            <!-- caluga 5 pymes en linea -->
            <div class="slide-mobile">
            <a href="https://pymesenlinea.cl" id="caluga_pymes_en_linea_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Pymes en Línea (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/05_pymes_mobile_glide.svg" width="140" height="120" alt="Pymes en Línea">
            </a>
            </div>
            <!-- caluga 6 Portal capacitación -->
            <div class="slide-mobile">
            <a href="https://capacitacion.sercotec.cl/portal" id="caluga_portal_capacitacion_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Portal de Capacitación de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/07_portal_mobile_glide.svg" width="140"  height="120" alt="Portal de Capacitación de Sercotec">
            </a>
            </div>
            <!-- caluga 7 Ruta digital-->
            <div class="slide-mobile">
            <a href="https://www.rutadigital.cl" id="caluga_ruta_digital_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Ruta Digital de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/06_ruta_mobile_glide.svg" width="140" height="120" alt="Ruta Digital de Sercotec">
            </a>
            </div>
            <!-- caluga 8 Asesoría legal-->
            <div class="slide-mobile">
            <a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" id="caluga_asesoria_legal_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Asesoría Legal Virtual de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/08_asesoria_mobile_glide.svg" width="140" height="120" alt="Asesoría Legal Virtual de Sercotec">
            </a>
            </div>
        </div>

        <!-- Página 3 -->
        <div class="page">
            <!-- caluga 9 explorador-->
            <div class="slide-mobile">
            <a href="https://explorador.sercotec.cl" id="caluga_explorador_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Explorador Territorial de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/09_explorador_mobile_glide.svg" width="140" height="120" alt="Explorador Territorial de Sercotec">
            </a>
            </div>
            <!-- caluga 10  Somos empresarias-->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/somosempresarias/" id="caluga_somos_empresarias_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Somos Empresarias de Sercotec (se abre en una nueva pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/11_somos_mobile_glide.svg" width="140" height="120" alt="Somos Empresarias de Sercotec">
            </a>
            </div>
            <!-- caluga 11  Concursos publicos-->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/concursos-publicos2/" id="caluga_concursos_publicos_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir a página interior Concursos públicos del sitio sercotec.cl (se abre en la misma pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/10_concursos_mobile_glide.svg" width="140" height="120" alt="Concursos públicos de Sercotec">
            </a>
            </div>
            <!-- caluga 12 canales oficiales-->
            <div class="slide-mobile">
            <a href="https://www.sercotec.cl/sercotec-invita-a-utilizar-sus-canales-de-atencion-puntos-mipe/" id="caluga_canales_oficiales_mob_2" target="_self" rel="noopener noreferrer"  aria-label="Ir a página de noticia sobre Canales Oficiales de contacto del sitio sercotec.cl (se abre en la misma pestaña)">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/01_canal_mobile_glide.svg" width="140" height="120" alt="Canales Oficiales de contacto de Sercotec">
            </a>
            </div>
        </div>
        </div>
    </div>

    <!-- Flechas -->
    <div class="slider-arrows" style="text-align:center; margin:20px 0;">
        <button class="arrow prev" id="prevBtnMobile" aria-label="Calugas anteriores" aria-disabled="true">
        <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_left.svg" width="40" height="40" alt="Anterior">
        </button>
        <button class="arrow next" id="nextBtnMobile" aria-label="Calugas siguientes" aria-disabled="false">
        <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_right.svg" width="40" height="40" alt="Siguiente">
        </button>
    </div>
    </div>
</section>
<!-- HTML Calugas Mobile -->

<!--Noticias Escritorio-->
<section class="">
    <div class="container-noticias-inicio">
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
             <a href="<?php echo site_url('/noticias'); ?>" class="btn-red-wp rounded-pill my-4 mx-auto">Ver todas las noticias</a>
        </div>
    </div>
    <!--NOTICIAS INICIO-->
</section>
<!--Noticias Escritorio-->


<!--Noticias Mobile-->
<section>
    <div class="container-noticias-inicio-mob mb-4 mx-2">
        <h1 class="text-center">Noticias</h1>
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
         <a href="<?php echo site_url('/noticias'); ?>" class="btn-red-wp rounded-pill my-4">Ver todas las noticias</a>
    </div>
</section>
<!--Noticias Mobile-->


<div class="container container-enlaces-inst">
        <!-- HTML Enlaces Institucionales Mobile -->
        <section>


            <div class="slider-container-mobile">
             <h1 class="text-center my-2 pt-4 mt-4 mb-4">Enlaces <br> Institucionales</h1>
            <div class="slider-wrapper-mobile">
            <div class="slider-mobile" id="slider-calugas-mobile-ei">

                <!-- Página 1 -->
                <div class="page">
                    <!-- caluga 1 Atención Ciudadana -->
                    <div class="slide-mobile">
                    <a href="<?php echo site_url('/oficinas'); ?>" id="caluga_canales_oficiales_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir a página Atención Ciudadana de Sercotec, página de oficinas de atención, se abre en la misma pestaña">
                        <img 
                        src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/01_ei_atencion.svg"
                        alt=""  width="140" height="125" role="presentation">
                    </a>
                    </div>
                    <!-- caluga 2 Gobierno Transparente  -->
                    <div class="slide-mobile">
                    <a href="https://www.portaltransparencia.cl/PortalPdT/directorio-de-organismos-regulados/?org=AH012" id="caluga_cdn_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio Portal de Transparencia Sercotec, se abre en una nueva pestaña">
                        <img 
                        src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/02_ei_gob_transparente.svg"
                        alt=""  width="140" height="125" role="presentation">
                    </a>
                    </div>

                    <!-- caluga 3 Solicitud de información Ley de Transparencia -->
                    <div class="slide-mobile">
                    <a href="https://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrg=58300" id="caluga_barrios_mob" target="_blank" rel="noopener noreferrer" aria-label="Ir al sitio Portal de Transparencia, Solicitud de información Ley de Transparencia, se abre en una nueva pestaña">
                    <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/03_ei_sol_transparencia.svg" alt=""  width="140" height="125" role="presentation">
                    </a>          
                    </div>
                    <!-- caluga 4 Solicitud de audiencia Ley de Lobby -->
                    <div class="slide-mobile">
                    <a href="https://www.leylobby.gob.cl/admin/auth/prelogin?redirect_int=https://www.leylobby.gob.cl/solicitud/audiencia/403" id="caluga_sustentabilidad_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir Plataforma Ley de Lobby, se abre en una nueva pestaña">
                <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/04_ei_ley_lobby.svg" alt=""  width="140" height="125" role="presentation">
                    </a>
                    </div>
                </div>

                <!-- Página 2 -->
                <div class="page">
                    <!-- caluga 5 Información presupuestaria y financiera -->
                    <div class="slide-mobile">
                    <a href="<?php echo site_url('/descargas'); ?>" id="caluga_pymes_en_linea_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir página interior de Información presupuestaria y financiera de Sercotec, se abre en la misma pestaña">
                <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/05_ei_presupuesto.svg" alt=""  width="140" height="125" role="presentation">                
                    </a>
                    </div>
                    <!-- caluga 6 Participación ciudadana-->
                    <div class="slide-mobile">
                    <a href="https://www.sercotec.cl/participacion-ciudadana" id="caluga_portal_capacitacion_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Participación ciudadana de Sercotec, se abre en una nueva pestaña">
                    <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/06_ei_participacion_ciudadana.svg" alt=""  width="140" height="125" role="presentation">    
                    </a>
                    </div>
                    <!-- caluga 7 Cuenta pública Gestión 2024-->
                    <div class="slide-mobile">
                    <a href="<?php echo site_url('/cuenta-publica-2024'); ?>" id="caluga_ruta_digital_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir página interior de Cuenta pública Gestión 2024 de Sercotec, se abre la misma pestaña">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/07_ei_cta_publica_2024.svg" alt=""  width="140" height="125" role="presentation"> 
                    </a>
                    </div>
                    <!-- caluga 8 Integridad Institucional-->
                    <div class="slide-mobile">
                    <a href="https://sites.google.com/sercotec.cl/integridad-institucional" id="caluga_asesoria_legal_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir al sitio de Integridad Institucional de Sercotec, se abre en una nueva pestaña">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/08_ei_integridad_institucional.svg" alt=""  width="140" height="125" role="presentation"> 
                    </a>
                    </div>
                </div>

                    <!-- Página 3 -->
                    <div class="page">
                        <!-- caluga 9 Programas y servicios digitalizados-->
                        <div class="slide-mobile">
                        <a href="<?php echo site_url('/programas-y-servicios-digitalizados'); ?>" id="caluga_explorador_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir la página interior de Programas y servicios digitalizados de Sercotec, se abre la misma pestaña">
                            <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/09_ei_programas_digitalizados.svg" alt=""  width="140" height="125" role="presentation">
                        </a>
                        </div>
                        <!-- caluga 10 Concursos publicos-->
                        <div class="slide-mobile">
                        <a href="<?php echo site_url('/concursos-publicos2'); ?>" id="caluga_somos_empresarias_mob" target="_self" rel="noopener noreferrer"  aria-label="Ir la página interior de Concursos públicos de Sercotec, se abre la misma pestaña">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/10_ei_concursos_publicos.svg" alt=""  width="140" height="125" role="presentation">
                        </a>
                        </div>
                        <!-- caluga 11 Estudio Emprendimiento Femenino 2023-->
                        <div class="slide-mobile">
                        <a href="https://www.sercotec.cl/wp-content/uploads/2024/12/Estudio-de-emprendimiento-y-microempresa_v2.pdf" id="caluga_concursos_publicos_mob" target="_blank" rel="noopener noreferrer"  aria-label="Ir a PDF de Estudio Emprendimiento Femenino 2023 de Sercotec, se abre en nueva pestaña">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/11_ei_estudios_empren_femenino.svg" alt=""  width="140" height="125" role="presentation">
                        </a>
                        </div>
                        <!-- caluga 12 Diagnóstico mujeres beneficiaras 2023 / 2024 Capital Semilla y Abeja-->
                        <div class="slide-mobile">
                        <a href="https://www.sercotec.cl/wp-content/uploads/2025/11/diagnostico_mujeres_Emprende_2023_2024_genero.pdf" id="caluga_canales_oficiales_mob_2" target="_blank" rel="noopener noreferrer"  aria-label="Ir a PDF de Diagnóstico mujeres beneficiaras 2023 / 2024 Capital Semilla y Abeja de Sercotec, se abre en nueva pestaña">
                        <img  src="<?php echo get_template_directory_uri(); ?>/img/enlaces-institucionales-mob/12_ei_diagnostico_mujeres_beneficiaras.svg" alt=""  width="140" height="125" role="presentation">
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Flechas -->
            <div class="slider-arrows" style="text-align:center; margin:20px 0;">
                <button class="arrow prev" id="prevBtnMobile-ei" aria-label="Calugas anteriores" aria-disabled="true">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_left.svg" width="40" height="40" alt="Anterior">
                </button>
                <button class="arrow next" id="nextBtnMobile-ei" aria-label="Calugas siguientes" aria-disabled="false">
                <img src="https://www.sercotec.cl/wp-content/uploads/media/glide-home/glide_arrow_right.svg" width="40" height="40" alt="Siguiente">
                </button>
            </div>
            </div>
        </section>
        <!-- HTML Calugas Mobile -->    

    <!--ENLACES Escritorio-->
    <section> 
        <div class="container-ei-desktop">
            <h1 class="text-center" style="margin:50px 0 0 0;">Enlaces Institucionales</h1>
            <!--ENLACES Escritorio-->
            <div class="enlaces-inst mx-auto" style="max-width: 1280px;">
                <div class="link-enlaces">
                    <a href="<?php echo site_url('/oficinas'); ?>" target="_blank">
                        <p>
                            Atención ciudadana
                        </p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=AH012" target="_blank">
                        <p>Gobierno transparente </p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.portaltransparencia.cl/PortalPdT/ingreso-sai-v2?idOrg=58300" target="_blank">
                        <p> Solicitud de información Ley de Transparencia </p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.leylobby.gob.cl/admin/auth/prelogin?redirect_int=https://www.leylobby.gob.cl/solicitud/audiencia/403" target="_blank">
                        <p> Solicitud de audiencia Ley de Lobby </p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="<?php echo site_url('/descargas'); ?>" target="_self">
                        <p> Información presupuestaria y financiera</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.sercotec.cl/participacion-ciudadana/" target="_self">
                        <p>Participación ciudadana</p>
                    </a>
                </div>
                <div class="link-enlaces"> 
                    <a href="<?php echo site_url('/cuenta-publica/cuenta-publica-2024/'); ?>" target="_self">
                        <p> Cuenta pública Gestión 2024</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://sites.google.com/sercotec.cl/integridad-institucional" target="_self">
                        <p>Integridad Institucional</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="<?php echo site_url('/programas-y-servicios-digitalizados'); ?>" target="_self">
                        <p>Programas y servicios digitalizados</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.sercotec.cl/ley-21-288-fondo-de-emergencia-transitorio-covid-19/" target="_self">
                        <p>Fondo de emergencia transitorio</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="<?php echo site_url('/concursos-publicos2'); ?>" target="_self">
                        <p>Concursos públicos</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.sercotec.cl/wp-content/uploads/2024/12/Estudio-de-emprendimiento-y-microempresa_v2.pdf" target="_blank">
                        <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/ei-line.png" width="170" height="4" alt="Linea">
                        <p>Estudio Emprendimiento Femenino 2023</p>
                    </a>
                </div>
                <div class="link-enlaces">
                    <a href="https://www.sercotec.cl/wp-content/uploads/2024/12/Estudio-de-emprendimiento-y-microempresa_v2.pdf" target="_blank">
                        <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/ei-line.png" width="170" height="4" alt="Linea">
                        <p>Diagnóstico mujeres beneficiaras 2023 / 2024 Capital Semilla y Abeja</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--ENLACES Escritorio-->
</div>

<?php
get_footer();
?>