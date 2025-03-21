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
            <a href="https://www.facebook.com/sercotec" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="26" height="26" alt="Sercotec Facebook" title="Sercotec Facebook">
            </a>
            <a href="https://www.instagram.com/sercotec_cl" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="26" height="26" alt="Sercotec Instagram" title="Sercotec Instagram">
            </a>
            <a href="https://twitter.com/Sercotec_Chile" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="22" height="23" alt="Sercotec Twitter" title="Sercotec Twitter">
            </a>
            <a href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube.svg" width="28" height="19" alt="Sercotec Youtube" title="Sercotec Youtube">
            </a>
            <a href="https://cl.linkedin.com/company/sercotecchile" target="_blank">
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
        <a class="d-flex flex-column menu-btn-header-wp" href="#">
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