<?php
get_header();
?>


<!-- Carrusel Bootstrap -->
<section id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <a href="#">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/banner_mobile_1.png" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner_desktop_01.png" class="d-block w-100" alt="Banner 1">
                </picture>
            </a>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <a href="#">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/banner_mobile_2.png" media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner_desktop_02.png" class="d-block w-100" alt="Banner 2">
                </picture>
            </a>
        </div>
    </div>

    <!-- Controles del carrusel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
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
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cohete_2.svg" class="img-fluid" width="199" height="157" alt="Icono">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Módulo Cuestionario-->


<!--ACA AGREGARÉ EN GLIDE MOBILE-->
<div class="glide-carousel-inicio-mob my-4">
    <h1 class="text-center my-4">Apoyo, asesoría y acompañamiento</h1>
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <!-- Aquí añade tus imágenes o contenido de las diapositivas -->
            <li class="glide__slide" style="width:260px!important;">
                <a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_explorador_mobile.svg">
                </a>
                <a href="https://explorador.sercotec.cl" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion_mobile.svg">
                </a>
            </li>
            <li class="glide__slide" style="width:260px!important;">
                <a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_explorador_mobile.svg">
                </a>
                <a href="https://explorador.sercotec.cl" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion_mobile.svg">
                </a>
            </li>
            <li class="glide__slide" style="width:260px!important;">
                <a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_explorador_mobile.svg">
                </a>
                <a href="https://explorador.sercotec.cl" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion_mobile.svg">
                </a>
            </li>
            <li class="glide__slide" style="width:260px!important;">
                <a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_explorador_mobile.svg">
                </a>
                <a href="https://explorador.sercotec.cl" target="_blank">
                    <img class="calg-mob" width="140" height="154" class="my-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion_mobile.svg">
                </a>
            </li>

            <!--  <li class="glide__slide">

            </li>
         <li class="glide__slide">
                <a href="https://form.typeform.com/to/JgVTAX1y?typeform-source=" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_calculadora.svg">
                </a>
            </li>  
            <li class="glide__slide">
                <a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_asesoria_legal.svg">
                </a>
            </li>  
            <li class="glide__slide">
                <a href="https://capacitacion.sercotec.cl/portal" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.rutadigital.cl" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_ruta_digital.svg">
                </a>
            </li>        
            <li class="glide__slide">
                <a href="#" target="_self">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_cooperativas.svg">
                </a>
            </li> 
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/somosempresarias" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_somos_empresarias.svg">
                </a>
            </li>         
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/sustentabilidad/" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_sustentabilidad.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/barrios-comerciales" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_barrios_comerciales.svg">
                </a>
            </li> 
            Añade más diapositivas según sea necesario -->
        </ul>
    </div>
    <div class="glide__bullets mobile d-flex justify-content-center my-2" data-glide-el="controls[nav]">
        <button class="glide__bullet mobile left" data-glide-dir="=0"></button>
        <button class="glide__bullet mobile right" data-glide-dir="=1"></button>
    </div>
</div>
<!--ACA AGREGARÉ EN GLIDE MOBILE-->

<!--ACA AGREGARÉ EN GLIDE-->
<div class="glide-carousel-inicio my-4">
    <h1 class="text-center my-4">Apoyo, asesoría y acompañamiento</h1>
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <!-- Aquí añade tus imágenes o contenido de las diapositivas -->
            <li class="glide__slide" style="width:260px!important;">
                <a href="https://www.sercotec.cl/centros-de-negocios/" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_cdn.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://explorador.sercotec.cl" target="_blank">
                    <img width="240" height="154" src=" <?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_explorador.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://form.typeform.com/to/JgVTAX1y?typeform-source=" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_calculadora.svg">
                </a>
            </li>

            <li class="glide__slide">
                <a href="https://asesoriavirtual.sercotec.cl/Usuario/Autenticar?ReturnUrl=%2f" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_asesoria_legal.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://capacitacion.sercotec.cl/portal" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_portal_capacitacion.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.rutadigital.cl" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_ruta_digital.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="#" target="_self">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_cooperativas.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/somosempresarias" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_somos_empresarias.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/sustentabilidad/" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_sustentabilidad.svg">
                </a>
            </li>
            <li class="glide__slide">
                <a href="https://www.sercotec.cl/barrios-comerciales" target="_blank">
                    <img width="240" height="154" src="<?php echo get_template_directory_uri(); ?>/img/mini-carousel/carousel_barrios_comerciales.svg">
                </a>
            </li>
            <!-- Añade más diapositivas según sea necesario -->
        </ul>
    </div>
    <div class="glide__bullets d-flex justify-content-center my-2" data-glide-el="controls[nav]">
        <button class="glide__bullet left" data-glide-dir="<"></button>
        <button class="glide__bullet right" data-glide-dir=">"></button>
        <button class="glide__bullet right" data-glide-dir=">"></button>
    </div>
</div>
<!--ACA AGREGARÉ EN GLIDE-->

<!--Noticias-->
<section class="d-none">
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
        </div>
    </div>
    <!--NOTICIAS INICIO-->
</section>
<!--Noticias-->

<div class="container container-enlaces-inst">



    <!--ENLACES Mobile-->
    <div class="container-ei-mobile  d-none">
        <div class="glide-carousel-inicioenlaces-mob my-4">
            <h1 class="text-center my-4">Enlaces Institucionales</h1>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Atención ciudadana
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Gobierno Transparente
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Solicitud de información Ley de Transparencia
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Solicitud de audiencia Ley de Lobby
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Información presupuestaria y financiera
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Participación Ciudadana
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Cuenta Pública Gestión 2023
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Integridad Institucional
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Programas y servicios digitalizados
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Concursos Públicos
                                </p>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide" style="width:260px!important;">
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Estudio Emprendimiento Femenino 2023
                                </p>
                            </a>
                        </div>
                        <div class="link-enlaces-mob">
                            <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
                                <p>
                                    Información presupuestaria y financiera
                                </p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__bullets mobile d-flex justify-content-center my-2" data-glide-el="controls[nav]">
                <button class="glide__bullet mobile left" data-glide-dir="<"></button>
                <button class="glide__bullet mobile right" data-glide-dir=">"></button>
            </div>
        </div>
    </div>
    <!--ENLACES Mobile-->

    <div class="container-ei-desktop d-none">
        <h1 class="text-center" style="margin:50px 0 0 0;">Enlaces Institucionales</h1>
        <!--ENLACES Escritorio-->
        <div class="enlaces-inst mx-auto" style="max-width: 1280px;">
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/mapa-de-oficinas/" target="_blank">
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
                <a href="https://www.sercotec.cl/descargas/" target="_self">
                    <p> Información presupuestaria y financiera</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/participacion-ciudadana/" target="_self">
                    <p>Participación ciudadana</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/cuenta-publica-de-la-gestion-2022" target="_self">
                    <p> Cuenta pública Gestión 2023</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://sites.google.com/sercotec.cl/integridad-institucional" target="_self">
                    <p>Integridad Institucional</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/programas-y-servicios-digitalizados/" target="_self">
                    <p>Programas y servicios digitalizados</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/ley-21-288-fondo-de-emergencia-transitorio-covid-19/" target="_self">
                    <p>Fondo de emergencia transitorio</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/concursos-publicos2/" target="_self">
                    <p>Concursos públicos</p>
                </a>
            </div>
            <div class="link-enlaces">
                <a href="https://www.sercotec.cl/wp-content/uploads/2024/12/Estudio-de-emprendimiento-y-microempresa_v2.pdf" target="_blank">
                    <img class="mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/ei-line.png" width="170" height="4" alt="Linea">
                    <p>Estudio Emprendimiento Femenino 2023</p>
                </a>
            </div>
        </div>
    </div>
    <!--ENLACES Escritorio-->

    <?php

    while (have_posts()): the_post();

    endwhile;

    ?>

</div>

<?php
get_footer();
?>