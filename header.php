<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sercotec - Servicio de Cooperación Técnica</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="wp-header">
    <!--Inicio preheader-->
    <div class="pre-header">
        <div class="d-flex justify-content-center flex-row justify-content-md-end align-items-center gap-3 mx-2">
            <p class="ph-word">Síguenos:</p>
            <a href="https://www.facebook.com/sercotec" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Sercotec, se abre en una nueva pestaña">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="26" height="26" alt="Sercotec Facebook">
            </a>
            <a href="https://www.instagram.com/sercotec_cl" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Sercotec, se abre en una nueva pestaña">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="26" height="26" alt="Sercotec Instagram">
            </a>
            <a href="https://twitter.com/Sercotec_Chile" target="_blank" rel="noopener noreferrer" aria-label="Twitter / X de Sercotec, se abre en una nueva pestaña">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="22" height="23" alt="Sercotec Twitter">
            </a>
            <a href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank" rel="noopener noreferrer" aria-label="Canal de Youtube de Sercotec, se abre en una nueva pestaña">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube.svg" width="28" height="19" alt="Sercotec Youtube">
            </a>
            <a href="https://cl.linkedin.com/company/sercotecchile" target="_blank" rel="noopener noreferrer" aria-label="Linkedin de Sercotec, se abre en una nueva pestaña">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_linkedin.svg" width="24" height="25" alt="Sercotec Linkedin">
            </a>
            <a href="<?php echo site_url('/contacto'); ?>" target="_self">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon-contactanos.svg" width="26" height="20" alt="Contáctanos"> <span class="ph-word">Contáctanos</span>
            </a>                         
        </div>
    </div>
    <!--Fin preheader-->

    <!--Inicio Header-->
    <div class="header-menu d-flex align-items-center justify-content-evenly">
        <a type="button" data-bs-toggle="modal" data-bs-target="#fullscreenMenuModal" class="d-flex flex-column menu-btn-header-wp" href="#" aria-label="Botón de menú">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-burger.svg" width="39" height="19" role="presentation" alt="">
            MENÚ
        </a>
        <a href="<?php echo site_url('/'); ?>" aria-label="Logo con enlace a inicio de sitio web">
            <img class="img-logo-header" src="<?php echo get_template_directory_uri(); ?>/img/logo-sercotec.png" alt="Sercotec" width="145" height="74">
        </a>
            <ul class="menu-inicio">
                <li>
                    <div class="dropdown d-inline">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Iniciar sesión
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://login.sercotec.cl/Web/index.html#/?idapp=6" target="_blank" rel="noopener">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item" href="https://misdatos.sercotec.cl" target="_blank" rel="noopener">Regístrate aquí</a></li>
                    </ul>
                    </div>                    
                </li>
                <li><a href="<?php echo site_url('/quienes-somos'); ?>">Nosotros</a></li>
                <li><a href="<?php echo site_url('/oficinas'); ?>">Oficinas</a></li>
            </ul>
        <a class="btn-secondary rounded-pill text-decoration-none fw-semibold btn-open-post"  href="<?php echo site_url('/postulaciones-abiertas'); ?>">
            <span class="material-symbols-outlined align-middle"> campaign </span> Postulaciones abiertas
        </a>
        <div>
            <!-- Botón que abre el buscador -->
                <button
                type="button"
                class="reset-button btn-link text-decoration-none search-btn-header-wp"
                data-bs-toggle="modal"
                data-bs-target="#searchModal"
                aria-haspopup="dialog"
                >
                <span class="material-symbols-outlined align-middle search-icon">
                    search </span>
                <span class="search-btn-header-wp">Buscar</span>
                </button>
            
        </div>
    </div>
    <!--Fin Header-->

<!--MODAL BUSCADOR-->

<!-- Modal Buscador -->
<div
  class="modal fade"
  id="searchModal"
  tabindex="-1"
  aria-labelledby="searchModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-fullscreen">
  <div class="modal-content search-modal">

<!-- Botón cerrar -->
    <button
    type="button"
    class="search-modal__close"
    data-bs-dismiss="modal"
    aria-label="Cerrar buscador"
    >
    ✕
    </button>
      <div class="modal-body d-flex align-items-center container-search">
        <div class="container">
          <form role="search" novalidate>
            <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <label for="exampleFormControlTextarea1" class="form-label kit-gob text-light fs-5">¿Qué estás buscando?</label>
                        <input class="form-control kit-gob form-control-lg"
                        type="search"
                        id="searchInput"
                        class="search-modal__input"
                        placeholder="Busca programas, noticias o contenidos del sitio"
                        aria-describedby="searchHelp"
                        autofocus>
                        <p id="searchHelp" class="search-modal__help">
                            Puedes buscar programas, noticias y otros contenidos del sitio.
                        </p>
                    </div>
                    <div class="col-lg-auto">
                    <button type="submit" class="btn-primary"> 
                        <span class="material-symbols-outlined align-middle"> search</span> 
                        Buscar
                    </button>
                    </div>
            </div>          
             </form>  
            </div>    

            <p class="search-modal__error" id="searchError" hidden>
              Ingresa un término para realizar la búsqueda.
            </p>


        </div>
      </div>

    </div>
  </div>
</div>

<!--MODAL BUSCADOR-->


<!--MODAL DE MENU MAIN-->
    <!-- Modal Fullscreen -->
    <div class="modal fade" id="fullscreenMenuModal" tabindex="-1" aria-labelledby="fullscreenMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <!--
                <div class="modal-header" style="border:none">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>-->
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Menú lateral (24% ~ col-3) -->
                            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block franja-menu">
                                <div class="position-sticky pt-3">
                                    <ul class="nav flex-column mt-4">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#" data-target="#content-financiamiento">
                                               Financiamiento
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-target="#content-asesoria">
                                                Asesoría Experta
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-target="#content-capacitaciones">
                                                Capacitaciones
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-target="#content-nosotros">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"  href="#" data-target="#content-cdn">
                                               Centros de Desarrollo de Negocios
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Contenido principal (76% ~ col-9) -->
                        <main id="mainContent" class="col-md-9 ms-sm-auto col-lg-9 px-md-4 content-area pt-3">
                        <button type="button" class="boton-cerrar" data-bs-dismiss="modal" aria-label="Boton cerrar">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/btn-cerrar.svg" width="102" height="48" alt="Boton cerrar">
                        </button>

                            <!-- Contenido de Financiamiento (Visible por defecto) -->
                                <div id="content-financiamiento" class="main-content-area active">
                                <h1 class="h2 text-white d-none">Financiamiento</h1>
                                <!-- NIVEL 1: LAS CARDS -->
                                    <div id="menu-nivel-1" class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="card-link card-fin-1"  data-target="nivel-2-emprender">
                                            <article class="card-menu-main">
                                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-01.svg" width="33" height="38" alt="Icono quiero emprender">
                                            <h3 class="text-center">Quiero emprender</h3>
                                            <p>Aún no formalizó y tengo una idea de negocio. </p>
                                            <span class="ver-mas">Conoce más aquí<span class="material-symbols-outlined align-middle"> arrow_forward</span></span>
                                            </article>
                                            </a>
                                        </div>

                                        <div class="col-lg-4">
                                            <a href="#" class="card-link card-fin-2" data-target="nivel-2-pyme">
                                                <article class="card-menu-main">
                                                <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="32" height="32" alt="Icono Tengo una pyme">
                                                <h3 class="text-center">Tengo una mipe</h3>
                                                <p>Ya tengo un negocio formalizado. </p>
                                                <span class="ver-mas">Conoce más aquí<span class="material-symbols-outlined align-middle"> arrow_forward</span></span>
                                                </article>
                                            </a>
                                        </div>

                                        <div class="col-lg-4">
                                            <a href="#" class="card-link card-fin-3" data-target="nivel-2-asociacion">
                                                <article class="card-menu-main">
                                                <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-03.svg" width="36" height="17" alt="Icono tenemos una asociación">
                                                <h3 class="text-center">Tengo una organización</h3>
                                                <p>Soy parte o quiero formar una cooperativa, gremio, asociación, feria libre o barrio comercial. </p>
                                                <span class="ver-mas">Conoce más aquí<span class="material-symbols-outlined align-middle"> arrow_forward</span></span>
                                                </article>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- NIVEL 2: CONTENEDORES INDIVIDUALES -->
                                     <!--CONTENIDO QUIERO EMPRENDER-->
                                    <div id="nivel-2-emprender" class="subnivel d-none">
                                        <button class="btn-volver">
                                            <span class="material-symbols-outlined">arrow_back</span>
                                            <span class="volver-texto">Volver</span>
                                        </button>                                                                          
                                            <div class="container my-4"> 
                                                <h3 class="title card-fin-1"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-01.svg" width="32" height="32" alt="Icono Quiero Emprender"> Quiero Emprender</h3>
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-4">
                                                              <a  href="<?php echo site_url('/capital-abeja-emprende'); ?>" class="card-link-borderless card-emprender">
                                                                    <article class="card-menu-main">
                                                                    <h3>Capital Abeja Emprende</h3>
                                                                    <p>Fondo concursable para mujeres emprendedoras que buscan formalizar su negocio y acceder al mercado. </p>
                                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                                    </article>
                                                                </a>                                                            

                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                                <a href="<?php echo site_url('/capital-semilla-emprende'); ?>" class="card-link-borderless card-emprender">
                                                                    <article class="card-menu-main">
                                                                    <h3>Capital Semilla Emprende</h3>
                                                                    <p>Fondo concursable para emprendedores y emprendedoras que buscan formalizar su negocio y acceder al mercado.</p>
                                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                                    </article>
                                                                </a>  
                                                        </div>
                                                        <div class="col-md-6 col-lg-4">
                                                                <a  href="<?php echo site_url('/capital-pioneras'); ?>" class="card-link-borderless card-emprender">
                                                                    <article class="card-menu-main">
                                                                    <h3>Capital Pioneras</h3>
                                                                    <p>Fondo concursable que apoya la puesta en marcha de negocios liderados por mujeres en rubros con mayor presencia masculina.</p>
                                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                                    </article>
                                                                </a>
                                                        </div>
                                                    </div>
                                            </div>                               
                                    </div>
                                    <!--CONTENIDO QUIERO EMPRENDER-->

                                    <!--CONTENIDO TENGO UNA PYME-->                                    
                                    <div id="nivel-2-pyme" class="subnivel d-none">
                                        <button class="btn-volver">
                                            <span class="material-symbols-outlined">arrow_back</span>
                                            <span class="volver-texto">Volver</span>
                                        </button>
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-2"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="32" height="32" alt="Icono Tengo una Pyme"> Tengo una mipe</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/crece'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Crece</h3>
                                                        <p>Fondo concursable que financia inversiones y otras acciones para potenciar el crecimiento de un negocio y/o cooperativa. </p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/crece-sostenible'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Crece Sostenible</h3>
                                                        <p>Fondo concursable que financia inversiones y otras acciones que potencien las prácticas productivas sostenibles.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/digitaliza-tu-almacen'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Digitaliza tu Almacén</h3>
                                                        <p>Fondo concursable para fortalecer a los pequeños negocios de barrio mediante la incorporación de herramientas digitales. </p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/ruta-digital'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Kit Digital - Ruta Digital</h3>
                                                        <p>Beneficio concursable para micro y pequeñas empresas que hayan realizado los cursos del programa Ruta Digital.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/pymes-globales-2025'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Pymes Globales</h3>
                                                        <p>Programa que apoya a pymes y cooperativas para dar sus primeros pasos en plataformas de venta internacionales.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/negocios-digitales-2025'); ?>"  class="card-link-borderless card-tengo-pyme">
                                                    <article class="card-menu-main">
                                                    <h3>Negocios Digitales</h3>
                                                    <p>Programa que apoya a pymes y cooperativas para ampliar sus canales de venta ingresando en marketplaces nacionales. </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/mejora-negocios'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>MejoraNegocios</h3>
                                                        <p>Programa que cofinancia la contratación de asesorías técnicas para mejorar la calidad de productos o servicios.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/promocion-y-canales-de-comercializacion'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Promoción y canales</h3>
                                                        <p>Servicio que apoya la participación de micro y pequeñas empresas, cooperativas en exposiciones, eventos, ferias u otros espacios de comercialización.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/redes-de-oportunidades-de-negocios'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Redes de oportunidades</h3>
                                                        <p>Fomenta redes entre pymes con encuentros para compartir conocimientos y crear vínculos comerciales.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div> 
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/sello-impacta-sustentable'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Sello Impacta Sostenible</h3>
                                                        <p>Distinción de Sercotec y la U. de Chile para pymes y cooperativas por su gestión sustentable.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>                                                                                                                                   
                                        </div>
                                  </div>
                                    </div>
                                    <!--CONTENIDO TENGO UNA PYME-->

                                    <!--CONTENIDO TENEMOS UNA ORGANIZACION-->
                                    <div id="nivel-2-asociacion" class="subnivel d-none">
                                        <button class="btn-volver">
                                            <span class="material-symbols-outlined">arrow_back</span>
                                            <span class="volver-texto">Volver</span>
                                        </button>
                                        <div class="container my-4"> 
                                            <h3 class="title card-fin-3"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-03.svg" width="32" height="32" alt="Icono Tengo una organización"> Tengo una organización</h3>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-4">
                                                            <a  href="<?php echo site_url('/fondo-barrios-comerciales'); ?>" class="card-link-borderless card-tengo-organizacion">
                                                                <article class="card-menu-main">
                                                                <h3>Barrios Comerciales</h3>
                                                                <p>Fondo concursable que impulsa la competitividad de los barrios comerciales para fortalecer su desarrollo sostenible.</p>
                                                                <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                                </article>
                                                            </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                            <a  href="<?php echo site_url('/ferias-libres'); ?>" class="card-link-borderless card-tengo-organizacion">
                                                            <article class="card-menu-main">
                                                            <h3>Ferias Libres</h3>
                                                            <p>Fondo concursable para fortalecer ferias libres, impulsando su asociatividad, innovación y desarrollo integral. </p>
                                                            <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                            </article>
                                                            </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                            <a  href="<?php echo site_url('/fortalecimiento-gremial-y-cooperativo'); ?>" class="card-link-borderless card-tengo-organizacion">
                                                            <article class="card-menu-main">
                                                            <h3>Fortalecimiento de asociaciones gremiales</h3>
                                                            <p>Fondo concursable para fortalecer organizaciones mypes, impulsando su gestión, innovación y sostenibilidad. </p>
                                                            <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                            </article>
                                                            </a>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                            <a  href="<?php echo site_url('/programa-confederaciones-y-federaciones-nacionales'); ?>" class="card-link-borderless card-tengo-organizacion">
                                                            <article class="card-menu-main">
                                                            <h3>Gremios Nacionales</h3>
                                                            <p>Fondo concursable para fortalecer gremios y cooperativas nacionales, impulsando gestión, sustentabilidad e inclusión.</p>
                                                            <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                            </article>
                                                            </a>
                                                    </div>                                            
                                                    <div class="col-md-6 col-lg-4">
                                                            <a  href="<?php echo site_url('/creacion-y-fortalecimiento-de-cooperativas'); ?>" class="card-link-borderless card-tengo-organizacion">
                                                            <article class="card-menu-main">
                                                            <h3>Creación y fortalecimiento de cooperativas</h3>
                                                            <p>Fondo concursable para fortalecer cooperativas, impulsar su gestión y fomentar la inclusión de mujeres.</p>
                                                            <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                            </article>
                                                            </a>
                                                    </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/sello-impacta-sustentable'); ?>" class="card-link-borderless card-tengo-pyme">
                                                        <article class="card-menu-main">
                                                        <h3>Sello Impacta Sostenible</h3>
                                                        <p>Distinción de Sercotec y la U. de Chile para pymes y cooperativas por su gestión sustentable.</p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>                                                                                                                             
                                                </div>
                                        </div>
                                    </div>
                                    <!--CONTENIDO TENEMOS UNA ORGANIZACION-->



                            </div>
                            <!-- Contenido de Asesoría Experta -->
                            <div id="content-asesoria" class="main-content-area" style="display: none;">
                            
                                <!--CONTENIDO Asesoría Experta-->
                                  <div class="container my-4">
                                    <h3 class="title card-fin-2"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-ase-01.svg" width="32" height="32" alt="Icono Asesoría Experta"> Asesoría Experta </h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/centros-de-negocios'); ?>" target="_blank"  rel="noopener" class="card-link-borderless card-asesoria-experta">
                                                        <article class="card-menu-main">
                                                        <h3>Centros de Desarrollo de Negocios</h3>
                                                        <p> Red de apoyo que ofrece asesoría experta, capacitación y orientación con el objetivo de fortalecer los negocios y fomentar su crecimiento sostenible. </p>
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/oficinas'); ?>" class="card-link-borderless card-asesoria-experta">
                                                    <article class="card-menu-main">
                                                    <h3>Puntos Mipe</h3>
                                                    <p>Los Puntos Mipe proporcionan asesoría integral, orientación sobre nuestros servicios y fondos concursables. Además dictan charlas y talleres para el desarrollo de las empresas.</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" class="card-link-borderless card-asesoria-experta" target="_blank" rel="noopener">
                                                    <article class="card-menu-main">
                                                    <h3>Asesoría Legal Virtual</h3>
                                                    <p>Servicio especializado que ofrece orientación legal en temas como leyes laborales, contratos, impuestos y propiedad intelectual.</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>

                                        </div>
                                  </div>
                                <!--CONTENIDO Asesoría Experta-->
                            </div>
                           <!--CONTENIDO Capacitaciones-->
                            <div id="content-capacitaciones" class="main-content-area" style="display: none;">
                                <!--CONTENIDO Capacitaciones-->
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-2"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-cap-01.svg" width="32" height="32" alt="Icono Capacitaciones"> Capacitaciones</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://capacitacion.sercotec.cl/portal/" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-capacitaciones">
                                                    <article class="card-menu-main">
                                                    <h3>Portal de Capacitación </h3>
                                                    <p> Plataforma que fortalece las habilidades empresariales de emprendedores y microempresarios a través de cursos gratuitos.</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://agendaeventos.sercotec.cl/Centro/Detalle?regionId=0" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-capacitaciones" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Agenda de actividades</h3>
                                                    <p>Calendario de actividades y talleres ofrecidos por nuestros Centros de Desarrollo de Negocios Sercotec.</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.rutadigital.cl" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-capacitaciones">
                                                    <article class="card-menu-main">
                                                    <h3>Ruta Digital</h3>
                                                    <p> Plataforma de cursos en línea  que entrega herramientas prácticas para incorporar tecnología en la gestión de sus negocios </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://pymesenlinea.cl" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-capacitaciones">
                                                    <article class="card-menu-main">
                                                    <h3>Pymes en Líneas</h3>
                                                    <p>Plataforma de cursos virtuales para que las Mipymes aumenten su nivel de madurez digital</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>                                            

                                        </div>
                                  </div>
                                <!--CONTENIDO Capacitaciones-->
                            </div>
                            <!-- Contenido de Nosotros -->
                            <div id="content-nosotros" class="main-content-area" style="display: none;">
                                 <!--CONTENIDO Nosotros-->
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-2">Nosotros</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/quienes-somos'); ?>" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Quienes somos </h3>
                                                    <p>Agencia de Fomento Productivo especializada en micro y pequeñas empresas, cooperativas y  emprendimientos. </p>                                      
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/oficinas'); ?>" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Canales de atención</h3>
                                                    <p>Conoce nuestros  servicios de orientación y resuelve tus dudas oportunamente. </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a  href="<?php echo site_url('/noticias'); ?>" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Noticias</h3>
                                                    <p>Infórmate sobre programas, convocatorias y novedades de Sercotec. </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.sercotec.cl/somosempresarias" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Somos Empresarias</h3>
                                                    <p>Espacio creado para visibilizar las historias, logros e impacto de mujeres empresarias. </p>      
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.sercotec.cl/barrios-comerciales/" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Barrios Comerciales</h3>
                                                    <p>Fortalecemos barrios comerciales para dinamizar su economía local.</p> 
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>                                              
                                             <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/preguntas-frecuentes'); ?>" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Preguntas frecuentes</h3>
                                                    <p>Encuentra respuestas claras y rápidas sobre  Sercotec, sus programas y postulaciones.</p> 
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>                                                                        
                                        </div>
                                    <h3 class="title card-fin-2">Sustentabilidad</h3>
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/sustentabilidad'); ?>" class="card-link-borderless card-nosotros">
                                                        <article class="card-menu-main">
                                                        <h3>Sustentabilidad</h3>
                                                        <p>Fomentamos negocios sostenibles con impacto económico, social y ambiental.</p>                                      
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="<?php echo site_url('/sello-impacta-sustentable'); ?>" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Sello Impacta Sostenible </h3>
                                                    <p> Distinción de Sercotec y la U. de Chile para pymes y cooperativas por su gestión sustentable. </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>
                                              <div class="col-md-6 col-lg-4">
                                                    <a href="https://form.typeform.com/to/JgVTAX1y?typeform-source=www.google.com" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Calculadora de circularidad </h3>
                                                    <p> Herramienta gratuita de Sercotec y Sofofa para medir la circularidad y sustentabilidad de pymes.</p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>

                                       </div>


                                    <h3 class="title card-fin-2">Informes Interactivos</h3>
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://explorador.sercotec.cl" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-nosotros">
                                                        <article class="card-menu-main">
                                                        <h3>Explorador territorial </h3>
                                                        <p>Conoce los datos territoriales para el análisis del desarrollo productivo. </p>                                      
                                                        <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                        </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.catastroferiaslibres.cl" class="card-link-borderless card-nosotros">
                                                    <article class="card-menu-main">
                                                    <h3>Catastro Ferias Libres </h3>
                                                    <p>Análisis actualizado sobre la evolución de las ferias libres en Chile. </p>
                                                    <span class="ver-mas">Más información<span class="material-symbols-outlined align-middle">arrow_forward</span></span>
                                                    </article>
                                                    </a>
                                            </div>

                                       </div>
                                  </div>
                                 <!--CONTENIDO nosotros-->
                               
                            </div>
                            <!-- Contenido de Centros de Desarrollo de Negocios 
                            <div id="content-centros" class="main-content-area" style="display: none;">
                                <h1 class="h2 text-white">Centros de Desarrollo de Negocios</h1>
                                <p class="text-white-50">Contenido sobre los Centros de Desarrollo de Negocios.</p>
                            </div>-->
                        </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--MODAL DE MENU MAIN-->

    <!--Fin Header mobile tablet--> 

    <div class="header-menu-mob d-flex flex-row align-items-center justify-content-evenly">
        <a href="<?php echo site_url('/'); ?>">
            <img class="img-logo-header" src="<?php echo get_template_directory_uri(); ?>/img/logo-sercotec.svg" alt="Sercotec" width="145" height="74">
        </a>
        <div>
            <button
                type="button"
                class="reset-button fs-4 btn-link text-decoration-none search-btn-header-wp"
                data-bs-toggle="modal"
                data-bs-target="#searchModal"
                aria-haspopup="dialog"
                >
                <span class="material-symbols-outlined align-middle search-icon">
                    search </span>
                <span class="search-btn-header-wp"></span>
            </button>
        </div>
         <!-- Botón que abre el menú (visible sólo en mobile) -->
          <button class="btn-mobile-menu btn-transparent">
            <a class="d-flex flex-column menu-btn-header-wp" href="#" aria-label="Abrir menú móvil">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-burger.svg" width="39" height="19" role="presentation" alt="">    
                MENÚ
            </a>
          </button>
    </div>
    <!--Fin Header mobile tablet-->  

<!-- MODAL / OVERLAY -->
<div class="mobile-menu-overlay" id="mobileMenu" aria-hidden="true">

  <!-- HEADER DEL MENÚ -->
  <header class="mobile-menu-header d-flex flex-row">
    <div class="logo">
        <a href="<?php echo site_url('/'); ?>" aria-label="Logo Sercotec - Volver a inicio del sitio web">
            <img class="img-logo-header img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/logo_sct_blanco_total.png" alt="Sercotec" width="107" height="54">
        </a>
    </div>

    <div class="header-actions">
      <!-- Dropdown iniciar sesión -->
            <div class="dropdown">
                <button class="btn-transparent text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon_claveunica.svg" alt="Sercotec" width="24" height="24"> Inicia sesión
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://misdatos.sercotec.cl" target="_blank" rel="noopener">Regístrate aquí</a></li>
                    <li><a class="dropdown-item" href="https://login.sercotec.cl/Web/index.html#/?idapp=6" target="_blank" rel="noopener">Inicia sesión</a></li>

                </ul>
            </div>
    </div>
          <!-- Botón cerrar -->
      <!--<button class="btn-close-menu" aria-label="Cerrar menú">
        <span class="material-icons">close</span>
      </button>-->

      <button type="button" class="btn-transparent btn-close-menu text-light" data-bs-dismiss="modal" aria-label="Cerrar menú">
        <span class="material-symbols-outlined">
                close
        </span>
       </button>
  </header>

  <!-- BUSCADOR -->
  <div class="mobile-search">
    <span class="material-symbols-outlined"> search </span>
    <input class="form-control kit-gob" type="text" placeholder="Buscar..." aria-label="Botón de buscador del sitio">
  </div>

  <!-- PANTALLA PRINCIPAL -->
  <section class="menu-screen active" id="screen-main">
    <nav class="menu-primary">

      <a  href="<?php echo site_url('/'); ?>" class="menu-item">
        <span class="material-symbols-outlined align-middle"> home </span></span> Inicio
      </a>

      <a href="<?php echo site_url('/quienes-somos'); ?>" class="menu-item"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon_nosotros.svg" alt="Sercotec" width="25" height="5"> 
        Nosotros
      </a>

      <a href="<?php echo site_url('/oficinas'); ?>" class="menu-item">
        <span class="material-symbols-outlined align-middle"> location_on </span> Oficinas
      </a>

      <a href="<?php echo site_url('/postulaciones-abiertas'); ?>" class="menu-item">
        <span class="material-symbols-outlined align-middle"> campaign </span>
        Postulaciones abiertas
      </a>

      <hr>

      <button class="menu-item depth" data-target="screen-financiamiento">
        Financiamiento
       <span class="material-symbols-outlined align-middle"> keyboard_arrow_right </span>
      </button>

      <button class="menu-item depth" data-target="screen-asesoria">
        Asesoría Experta
        <span class="material-symbols-outlined align-middle"> keyboard_arrow_right </span>
      </button>

      <button class="menu-item depth" data-target="screen-capacitaciones">
        Capacitaciones
       <span class="material-symbols-outlined align-middle"> keyboard_arrow_right </span>
      </button>

      <button class="menu-item depth" data-target="screen-nosotros">
        Nosotros
       <span class="material-symbols-outlined align-middle"> keyboard_arrow_right </span>
      </button>

      <a href="https://www.sercotec.cl/centros-de-negocios" target="_blank" rel="noopener" class="menu-item">
        Centros de Desarrollo de Negocios
        <span class="material-symbols-outlined align-middle"> keyboard_arrow_right </span>       
      </a>

    </nav>
  </section>

  <!-- PANTALLA: FINANCIAMIENTO -->
  <section class="menu-screen" id="screen-financiamiento">
    <button class="btn-back-main">
      <span class="material-symbols-outlined align-middle"> arrow_back </span> Volver al menú principal
    </button>
    <div class="accordion">

    <!--modulo emprender-->
      <div class="acc-module emprender">
        <button class="acc-toggle" aria-expanded="false">
          <span class="title"><img class="img-fluid me-2 align-middle" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-01.svg" width="33" height="38" alt="Icono quiero emprender"> <h2>Quiero emprender</h2> </span>
          <span class="acc-arrow material-symbols-outlined">keyboard_arrow_right</span>
        </button>
          <p class="subtext-emprender">Aún no formalizó y tengo una idea de negocio.</p>

        <div class="acc-content">
              <ul class="acc-content">
                <li><a href="<?php echo site_url('/capital-abeja-emprende'); ?>">Capital Abeja Emprende</a></li>
                <li><a href="<?php echo site_url('/capital-semilla-emprende'); ?>">Capital Semilla Emprende</a></li>
                <li><a href="<?php echo site_url('/capital-pioneras'); ?>">Capital Pioneras</a></li>
              </ul>
        </div>
      </div>
    <!--modulo emprender-->
    
    <!--modulo Tengo una pyme-->
      <div class="acc-module tengo-pyme">
        <button class="acc-toggle" aria-expanded="false">
          <span class="title"><img class="img-fluid me-2 align-middle" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="33" height="38" alt="Icono quiero emprender"> <h2>Tengo una pyme</h2> </span>
          <span class="acc-arrow material-symbols-outlined">keyboard_arrow_right</span>
        </button>
          <p class="subtext-emprender">Ya tengo un negocio formalizado</p>

        <div class="acc-content">
              <ul class="acc-content">
                <li><a href="<?php echo site_url('/crece'); ?>">Crece</a></li>
                <li><a href="<?php echo site_url('/crece-sostenible'); ?>">Crece Sostenible</a></li>
                <li><a href="<?php echo site_url('/digitaliza-tu-almacen'); ?>">Digitaliza tu Almacén</a></li>
                <li><a href="<?php echo site_url('/ruta-digital'); ?>">Kit Digital</a></li>
                <li><a href="<?php echo site_url('/pymes-globales-2025'); ?>">Pymes Globales</a></li>
                <li><a href="<?php echo site_url('/negocios-digitales-2025'); ?>">Negocios Digitales</a></li>
                <li><a href="<?php echo site_url('/mejora-negocios'); ?>">MejoraNegocios</a></li>
                <li><a href="<?php echo site_url('/promocion-y-canales-de-comercializacion'); ?>">Promoción y canales</a></li>
                <li><a href="<?php echo site_url('/redes-de-oportunidades-de-negocios'); ?>">Redes de oportunidades</a></li>
                 <li><a href="<?php echo site_url('/sello-impacta-sustentable'); ?>">Sello Impacta Sostenible</a></li>
              </ul>
        </div>
      </div>
    <!--modulo Tengo una pyme-->      

    <!--modulo Asociacion-->
      <div class="acc-module soy-asociacion">
        <button class="acc-toggle" aria-expanded="false">
          <span class="title"><img class="img-fluid align-middle" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="33" height="38" alt="Icono quiero emprender"> <h2>Tengo una organización</h2> </span>
          <span class="acc-arrow material-symbols-outlined">keyboard_arrow_right</span>
        </button>
          <p class="subtext-emprender">Soy parte o quiero formar una cooperativa, gremio, asociación, feria libre o barrio comercial</p>

        <div class="acc-content">
              <ul class="acc-content">
                <li><a href="<?php echo site_url('/fondo-barrios-comerciales'); ?>">Barrios Comerciales</a></li>
                <li><a href="<?php echo site_url('/ferias-libres'); ?>">Ferias Libres</a></li>
                <li><a href="<?php echo site_url('/fortalecimiento-gremial-y-cooperativo'); ?>">Fortalecimiento de asociaciones gremiales</a></li>
                <li><a href="<?php echo site_url('/programa-confederaciones-y-federaciones-nacionales
'); ?>">Gremios Nacionales</a></li>
                <li><a href="<?php echo site_url('/creacion-y-fortalecimiento-de-cooperativas'); ?>">Creación y fortalecimiento de cooperativas</a></li>
                 <li><a href="<?php echo site_url('/sello-impacta-sustentable'); ?>">Sello Impacta Sostenible</a></li>
             </ul>
        </div>
      </div>
    <!--modulo Tengo una pyme-->      
    </div>
  </section>

  <!-- PANTALLA: ASESORÍA EXPERTA -->
  <section class="menu-screen" id="screen-asesoria">
    <button class="btn-back-main">
      <span class="material-symbols-outlined align-middle"> arrow_back </span> Volver al menú principal
    </button>

    <!--modulo Asesoría Experta-->
      <div class="module-menu-content">
          <span class="title"><img class="img-fluid me-2 align-middle" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-ase-01.svg" width="23" height="21" alt="Icono quiero emprender"> <h2>Asesoría Experta</h2> </span>
              <ul class="module-menu-content">
                <li><a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank" rel="noopener">Centros de Desarrollo de Negocios</a></li>
                <li><a href="<?php echo site_url('/oficinas'); ?>" href="/contacto/">Puntos Mipe</a></li>
                <li><a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" target="_blank" rel="noopener noreferrer">Asesoría Legal Virtual</a></li>
              </ul>       
      </div>
    <!--modulo Asesoría Experta-->  
  </section>

  <!-- PANTALLA: CAPACITACIONES -->
  <section class="menu-screen" id="screen-capacitaciones">
       <button class="btn-back-main">
      <span class="material-symbols-outlined align-middle"> arrow_back </span> Volver al menú principal
    </button>

    <!--modulo CAPACITACIONES-->
      <div class="module-menu-content">
          <span class="title"><img class="img-fluid me-2 align-middle" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-cap-01.svg" width="23" height="21" alt="Icono quiero emprender"> <h2> Capacitaciones</h2> </span>
             <ul class="module-menu-content">
                <li><a href="https://capacitacion.sercotec.cl/portal/" target="_blank" rel="noopener noreferrer">Portal de Capacitación</a></li>
                <li><a href="https://agendaeventos.sercotec.cl/Centro/Detalle?regionId=0">Agenda de actividades Centros de Desarrollo de Negocios </a></li>
                <li><a href="https://www.rutadigital.cl" target="_blank" rel="noopener noreferrer">Ruta Digital </a></li>
                <li><a href="https://pymesenlinea.cl" target="_blank" rel="noopener noreferrer">Pymes en Líneas</a></li>                
              </ul>       
      </div>
  </section>
 <!-- PANTALLA: CAPACITACIONES -->


 <!-- PANTALLA: Nosotros -->
  <section class="menu-screen" id="screen-nosotros">
       <button class="btn-back-main">
      <span class="material-symbols-outlined align-middle"> arrow_back </span> Volver al menú principal
    </button>

    <!--modulo CAPACITACIONES-->
      <div class="module-menu-content">
          <span class="title"><h2> Nosotros</h2> </span>  
              <ul class="module-menu-content">
                <li><a href="<?php echo site_url('/quienes-somos'); ?>">Quiénes somos</a></li>
                <li><a href="<?php echo site_url('/oficinas'); ?>">Canales de atención</a></li>
                <li><a href="<?php echo site_url('/noticias'); ?>">Noticias</a></li>
                <li><a href="https://www.sercotec.cl/somosempresarias" target="_blank" rel="noopener">Somos Empresarias</a></li>
                <li><a href="#" class="text-decoration-none">Sustentabilidad</a></li>
                    <ul style="list-style: none;">
                      <li><a href="<?php echo site_url('/sustentabilidad'); ?>">Sustentabilidad</a></li>
                      <li><a href="<?php echo site_url('/sello-impacta-sustentable'); ?>">Sello Impacta Sostenible</a></li>
                      <li><a href="https://form.typeform.com/to/JgVTAX1y?typeform-source=www.google.com" target="_blank" rel="noopener">Calculadora de circularidad</a></li>
                    </ul>
                <li><a href="https://www.sercotec.cl/barrios-comerciales" target="_blank" rel="noopener noreferrer">Barrios Comerciales</a></li>
                <li><a href="<?php echo site_url('/preguntas-frecuentes'); ?>">Preguntas frecuentes</a></li>
                <li><a href="#" class="text-decoration-none">Informes interactivos </a>
                    <ul style="list-style: none;">
                      <li><a href="https://explorador.sercotec.cl" target="_blank" rel="noopener">Explorador territorial</a></li>
                      <li><a href="https://www.catastroferiaslibres.cl" target="_blank" rel="noopener">Catastro Ferias Libres</a></li>
                    </ul>
                </li>                                              
              </ul>       
      </div>
  </section>
 <!-- PANTALLA: Nosotros -->



</div>
   

</header>

