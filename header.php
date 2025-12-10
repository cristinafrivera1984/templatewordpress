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
            <a href="https://www.facebook.com/sercotec" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="26" height="26" alt="Sercotec Facebook" title="Sercotec Facebook">
            </a>
            <a href="https://www.instagram.com/sercotec_cl" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="26" height="26" alt="Sercotec Instagram" title="Sercotec Instagram">
            </a>
            <a href="https://twitter.com/Sercotec_Chile" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="22" height="23" alt="Sercotec Twitter" title="Sercotec Twitter">
            </a>
            <a href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube.svg" width="28" height="19" alt="Sercotec Youtube" title="Sercotec Youtube">
            </a>
            <a href="https://cl.linkedin.com/company/sercotecchile" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_linkedin.svg" width="24" height="25" alt="Sercotec Linkedin" title="Sercotec Linkedin">
            </a>
            <a href="https://www.sercotec.cl/contacto" target="_self">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon-contactanos.svg" width="26" height="20" alt="Contáctanos" title="Contáctanos"> <span class="ph-word">Contáctanos</span>
            </a>                         
        </div>
    </div>
    <!--Fin preheader-->

    <!--Inicio Header-->
    <div class="header-menu d-flex align-items-center justify-content-evenly">
        <a type="button" data-bs-toggle="modal" data-bs-target="#fullscreenMenuModal" class="d-flex flex-column menu-btn-header-wp" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-burger.svg" width="39" height="19">    
            MENÚ
        </a>
        <a href="<?php echo site_url('/'); ?>">
            <img class="img-logo-header" src="<?php echo get_template_directory_uri(); ?>/img/logo-sercotec.svg" alt="Sercotec" width="145" height="74">
        </a>
            <ul class="menu-inicio">
                <li><a href="">Iniciar sesión</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Oficinas</a></li>
            </ul>
        <a class="btn-secondary rounded-pill text-decoration-none fw-semibold btn-open-post" href="#">
            <span class="material-symbols-outlined align-middle"> campaign </span> Postulaciones abiertas
        </a>
        <div>
            <a href="#" class="search-btn-header-wp">
            <span class="material-symbols-outlined align-middle search-icon">
                search </span>
              <span class="search-btn-header-wp">Buscar</span>               
            </a>
        </div>
    </div>
    <!--Fin Header-->

<!--MODAL DE MENU MAIN-->
    <!-- Modal Fullscreen -->
    <div class="modal fade" id="fullscreenMenuModal" tabindex="-1" aria-labelledby="fullscreenMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Menú lateral (24% ~ col-3) -->
                            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block bg-light">
                                <div class="position-sticky franja-menu pt-3">
                                    <ul class="nav flex-column">
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
                                            <a class="nav-link" href="https://www.sercotec.cl/centros-de-negocios/"  target="_blank" rel="noopener noreferrer">
                                               Centros de Desarrollo de Negocios
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <!-- Contenido principal (76% ~ col-9) -->
                        <main id="mainContent" class="col-md-9 ms-sm-auto col-lg-9 px-md-4 content-area pt-3">
                            <!-- Contenido de Financiamiento (Visible por defecto) -->
                            <div id="content-financiamiento" class="main-content-area active">
                                <h1 class="h2 text-white">Financiamiento</h1>   
                                  <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="card-link card-fin-1" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                        <article class="card-menu-main">
                                        <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-01.svg" width="33" height="38" alt="Icono quiero emprender">
                                        <h3 class="text-center">Quiero emprender</h3>
                                        <p>Aún no formalizó y tengo una idea de negocio. </p>
                                        <span class="ver-mas">Conoce más aquí
                                            <span class="material-symbols-outlined align-middle">
                                                arrow_forward
                                            </span>
                                        </span>
                                        </article>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="card-link card-fin-2" aria-label="Quiero empre: Ir a etapa: Quiero emprender">
                                        <article class="card-menu-main">
                                        <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="32" height="32" alt="Icono Tengo una pyme">
                                        <h3 class="text-center">Quiero emprender</h3>
                                        <p>Ya tengo un negocio formalizado. </p>
                                        <span class="ver-mas">Conoce más aquí
                                            <span class="material-symbols-outlined align-middle">
                                                arrow_forward
                                            </span>
                                        </span>
                                        </article>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="card-link card-fin-3" aria-label="Financimiamiento: Ir a etapa: Tengo una Pyme">
                                        <article class="card-menu-main">
                                        <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-03.svg" width="36" height="17" alt="Icono tenemos una asociación">
                                        <h3 class="text-center">Tenemos una asociación</h3>
                                        <p>Soy parte o quiero formar una cooperativa, gremio, asociación, feria libre o barrio comercial. </p>
                                        <span class="ver-mas">Conoce más aquí
                                            <span class="material-symbols-outlined align-middle">
                                                arrow_forward
                                            </span>
                                        </span>
                                        </article>
                                        </a>
                                    </div>                                    
                                  </div>
                                <!--CONTENIDO QUIERO EMPRENDER-->
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-1"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-01.svg" width="32" height="32" alt="Icono Quiero Emprender"> Quiero Emprender</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-emprender" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Capital Semilla Emprende</h3>
                                                    <p>Subsidio para emprendedores que buscan iniciar un negocio con oportunidad de participar en el mercado a través de su formalización. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-emprender" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Capital Abeja Emprende</h3>
                                                    <p>Subsidio para mujeres emprendedoras que buscan iniciar un negocio con oportunidad de participar en el mercado a través de su formalización. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-emprender" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Capital Pioneras</h3>
                                                    <p>Subsidio para mujeres emprendedoras que buscan formalizar un negocio en rubros con mayor presencia masculina. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                        </div>
                                  </div>
                                <!--CONTENIDO QUIERO EMPRENDER-->

                                <!--CONTENIDO TENGO UNA PYME-->
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-2"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-02.svg" width="32" height="32" alt="Icono Tengo una Pyme"> Tengo una pyme</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Crece</h3>
                                                    <p>Fondo concursable que financia inversiones y otras acciones para potenciar el crecimiento de un negocio y/o cooperativa. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Crece Sostenible</h3>
                                                    <p>Fondo concursable que financia inversiones y otras acciones que potencien las prácticas productivas sostenibles.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Digitaliza tu Almacén</h3>
                                                    <p>Fondo concursable para fortalecer a los pequeños negocios de barrio mediante la incorporación de herramientas digitales.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Kit Digital</h3>
                                                    <p>Beneficio concursable para micro y pequeñas empresas que hayan realizado los cursos del programa Ruta Digital.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Pymes Globales</h3>
                                                    <p>Programa que apoya a pymes y cooperativas para dar sus primeros pasos en plataformas de venta internacionales.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Negocios Digitales</h3>
                                                    <p>Programa que apoya a pymes y cooperativas para ampliar sus canales de venta ingresando en marketplaces nacionales.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>MejoraNegocios</h3>
                                                    <p>Programa que cofinancia la contratación de asesorías técnicas para mejorar la calidad de productos o servicios.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Promoción y canales</h3>
                                                    <p>Servicio que apoya la participación de micro y pequeñas empresas, cooperativas en exposiciones, eventos, ferias u otros espacios de comercialización.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-pyme" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Redes de oportunidades</h3>
                                                    <p>Fomenta redes entre pymes con encuentros para compartir conocimientos y crear vínculos comerciales.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>                                                                                        
                                        </div>
                                  </div>
                                <!--CONTENIDO TENGO UNA PYME-->

                                <!--CONTENIDO TENEMOS UNA ORGANIZACION-->
                                  <div class="container my-4"> 
                                    <h3 class="title card-fin-3"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/icons-menu-main/icon-finan-03.svg" width="32" height="32" alt="Icono Tengo una organización"> Tengo una organización</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-organizacion" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Barrios Comerciales</h3>
                                                    <p>Fondo concursable que impulsa la competitividad de los barrios comerciales para fortalecer su desarrollo sostenible.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-organizacion" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Ferias Libres</h3>
                                                    <p>Fondo concursable para fortalecer ferias libres, impulsando su asociatividad, innovación y desarrollo integral. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-organizacion" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Fortalecimiento de asociaciones gremiales</h3>
                                                    <p>Fondo concursable para fortalecer organizaciones mypes, impulsando su gestión, innovación y sostenibilidad. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-organizacion" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Gremios Nacionales</h3>
                                                    <p>Fondo concursable para fortalecer gremios y cooperativas nacionales, impulsando gestión, sustentabilidad e inclusión.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>                                            
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-tengo-organizacion" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Creación y fortalecimiento de cooperativas</h3>
                                                    <p>Fondo concursable para fortalecer cooperativas, impulsar su gestión y fomentar la inclusión de mujeres.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
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
                                                    <a href="#" class="card-link-borderless card-asesoria-experta" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Centros de Desarrollo de Negocios</h3>
                                                    <p> Red de apoyo que ofrece asesoría experta, capacitación y orientación con el objetivo de fortalecer los negocios y fomentar su crecimiento sostenible.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-asesoria-experta" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Puntos Mipe</h3>
                                                    <p>Los Puntos Mipe proporcionan asesoría integral, orientación sobre nuestros servicios y fondos concursables. Además dictan charlas y talleres para el desarrollo de las empresas.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-asesoria-experta" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Asesoría Legal Virtual</h3>
                                                    <p>Servicio especializado que ofrece orientación legal en temas como leyes laborales, contratos, impuestos y propiedad intelectual.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
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
                                                    <a href="https://capacitacion.sercotec.cl/portal/" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-capacitaciones" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Portal de Capacitación </h3>
                                                    <p> Plataforma que fortalece las habilidades empresariales de emprendedores y microempresarios a través de cursos gratuitos.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://agendaeventos.sercotec.cl/Centro/Detalle?regionId=0" class="card-link-borderless card-capacitaciones" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Agenda de actividades CDN</h3>
                                                    <p>Calendario de actividades y talleres ofrecidos por nuestros Centros de Desarrollo de Negocios Sercotec.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.rutadigital.cl/" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-capacitaciones" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Ruta Digital</h3>
                                                    <p> Plataforma de cursos en línea  que entrega herramientas prácticas para incorporar tecnología en la gestión de sus negocios.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://pymesenlinea.cl" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-capacitaciones" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Pymes en Líneas</h3>
                                                    <p> Plataforma de cursos virtuales para que las Mipymes aumenten su nivel de madurez digital.</p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
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
                                                    <a href="https://capacitacion.sercotec.cl/portal/" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-nosotros" aria-label="Ir a Quienes somos">
                                                    <article class="card-menu-main">
                                                    <h3>Quienes somos </h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>                                      
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://agendaeventos.sercotec.cl/Centro/Detalle?regionId=0" class="card-link-borderless card-nosotros" aria-label="Ir a Canales de atención de Sercotec">
                                                    <article class="card-menu-main">
                                                    <h3>Canales de atención</h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.rutadigital.cl/" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros" aria-label="Financimiamiento: Ir a etapa: Quiero Emprender">
                                                    <article class="card-menu-main">
                                                    <h3>Noticias</h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.sercotec.cl/somosempresarias" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros" aria-label="Ir a Somos Empresarias, abre en nueva pestaña">
                                                    <article class="card-menu-main">
                                                    <h3>Somos Empresarias</h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>      
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.sercotec.cl/barrios-comerciales/" target="_blank" rel="noopener noreferrer" class="card-link-borderless card-nosotros" aria-label="Ir a Barrios Comerciales, abre en nueva pestaña">
                                                    <article class="card-menu-main">
                                                    <h3>Barrios Comerciales</h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p> 
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>                                              
                                             <div class="col-md-6 col-lg-4">
                                                    <a href="#" class="card-link-borderless card-nosotros" aria-label="Ir a Preguntas frecuentes">
                                                    <article class="card-menu-main">
                                                    <h3>Preguntas frecuentes</h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p> 
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>                                                                        
                                        </div>
                                    <h3 class="title card-fin-2">Informes Interactivos</h3>
                                    <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://explorador.sercotec.cl" target="_blank" rel="noopener noreferrer"  class="card-link-borderless card-nosotros" aria-label="Ir Explorador Territorial de Sercotec, se abre en nueva pestaña">
                                                    <article class="card-menu-main">
                                                    <h3>Explorador territorial </h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>                                      
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
                                                    </article>
                                                    </a>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                    <a href="https://www.catastroferiaslibres.cl" class="card-link-borderless card-nosotros" aria-label="Ir a Catastro Ferias Libres de Sercotec, se abre en nueva pestaña">
                                                    <article class="card-menu-main">
                                                    <h3>Catastro Ferias Libres </h3>
                                                    <p>Nullam euismod, sem et tempor lacinia, turpis sem ultrices leo, sit amet molestie felis arcu sit amet purus. Praesent eu egestas elit. </p>
                                                    <span class="ver-mas">Más información
                                                        <span class="material-symbols-outlined align-middle">
                                                            arrow_forward
                                                        </span>
                                                    </span>
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
            <a href="#" class="search-btn-header-wp">
            <span class="material-symbols-outlined align-middle search-icon">
                search </span>
              <span class="search-btn-header-wp d-none">Buscar</span>               
            </a>
        </div>
        <a class="d-flex flex-column menu-btn-header-wp" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-burger.svg" width="39" height="19">    
            MENÚ
        </a>
    </div>
    <!--Fin Header mobile tablet-->  
</header>