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
          <a href="#" class="active">Quiénes Somos</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->

<section class="main-content-cooperativas">
<div class="container">
    <div class="row align-items-center justify-content-center mt-4">
      <div class="col-lg-8 px-4 px-md-0">
        <h1>Quiénes Somos</h1>
        <p class="my-4"> Sercotec es una Corporación de Derecho Privado. <span class="celeste">La agencia de fomento productivo especializada en el apoyo a la micro y pequeña empresa y el emprendimiento en Chile,</span>  cuya acción experta, coordinada con los actores públicos y privados de los territorios, potencia los ecosistemas productivos, favoreciendo su desarrollo económico sostenible e inclusivo y un mayor bienestar para las personas.</p>        
      </div>
      <div class="p-2 p-md-4 p-lg-5"></div>
    </div>
</div>


<div class="bg-blue-qs"> 
  <div class="row align-items-center">
    <div class="col-md-4">
       <img class="img-fluid img-class-qs" src="<?php echo get_template_directory_uri(); ?>/img/01_quienes_somos.webp" width="488" height="496" role="presentation" alt="">
    </div>
    <div class="col-md-7 d-flex flex-column mx-4 ms-auto px-4">      
        <h2 class="white pt-3 pt-md-1">Nuestra misión</h2>
        <p class="white ff-sans-s fw-normal">Apoyar el desarrollo de la <strong>micro y pequeña empresa</strong>, así como del emprendimiento, mediante asistencia técnica especializada y fomento de la <strong> asociatividad y cooperativismo</strong>. Promovemos la articulación entre actores públicos y privados a nivel territorial, con el propósito de fortalecer los ecosistemas productivos y de impulsar un desazrrollo económico sostenible e inclusivo, facilitando la inserción competitiva en la economía y mejorando el bienestar de las personas.</p>
    </div>
  </div>

 <div class="my-xl"></div>
    <div class="row align-items-center"> 
        <div class="col-md-8">
            <div class="row mx-4">
              <h2 class="white mx-2">Nuestra visión</h2>
              <div class="col-lg-6">
                <div class="card-qs d-flex flex-row">
                    <span class="number-qs">1.</span>
                    <p class="white fw-medium">Fortalecer la capacidad de gestión y desarrollo de micro y pequeños empresas, gremios, cooperativas, barrios comerciales y ferias libres.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card-qs d-flex flex-row">
                      <span class="number-qs">2.</span>
                      <p class="white fw-medium">Disminuir las brechas económicas y sociales que enfrentan las empresas de menor tamaño para potenciar su tejido productivo y empresarial. </p>
                  </div>          
              </div> 
            </div>
        </div>
        <div class="col-md-4 text-end bg-sombrilla">
          <img class="img-fluid img-class-qs-02" src="<?php echo get_template_directory_uri(); ?>/img/quienes_somos_02.webp" width="300" height="491" role="presentation" alt="">
        </div>       
     </div>

<div class="my-xl"></div>

    <!--Video historia-->
    <section>
        <div class="container-fluid p-0 m-0">
            <h2 class="white text-center pt-0 pt-md-1">Nuestra historia</h2>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modalVideoQuienes">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/quienes_somos_03.png" width="100%" height="100%" role="presentation" alt="">
          </a>
          <!--MODAL video-->
                <div class="modal fade" id="modalVideoQuienes" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h5 class="modal-title">Historia de Sercotec</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Cerrar">
                        </button>
                      </div>

                      <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe id="videoIframeQs" width="100%" height="100%" src="https://www.youtube.com/embed/lIRFlvU3t_Q?si=ByNoy9sA_gYp2jOm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                        </div>
                      
                      </div>

                    </div>
                  </div>
                </div>
          <!--MODAL video-->
        </div>
    </section>
    <!--Video historia-->

    <!--SLIDER-->
    <section class="slider-puntos">
      <div id="puntosCarousel" class="carousel slide carousel-fade" data-bs-interval="false">
        <div class="carousel-inner">
          <!-- SLIDE 1 -->
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row align-items-center">
                <!-- TEXTO -->
                <div class="col-md-7 d-flex flex-column justify-content-between py-5 px-4">
                  <div>
                    <span class="slide-number">16</span>
                    <hr class="divider">
                    <h2>Direcciones regionales</h2>
                    <p class="white">
                        Oficinas territoriales que gestionan los apoyos a las mipes y cooperativas según la necesidad de la zona. 
                    </p>
                  </div>

                  <!-- CONTROLES -->
                  <div class="slider-controls d-flex align-items-center gap-3">
                    <span class="counter">
                      <strong>1</strong> / 5
                    </span>

                    <button class="slider-arrow prev" disabled>
                      <span class="material-symbols-outlined">arrow_back</span>
                    </button>

                    <button class="slider-arrow next">
                      <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                  </div>
                </div>

                <!-- IMAGEN -->
                <div class="col-md-5 text-end p-0">
                    <img class="img-fluid img-class-qs-02" src="<?php echo get_template_directory_uri(); ?>/img/01_slider_qs.webp" width=" " height=" " role="presentation" alt="">
                </div>

              </div>
            </div>
          </div>
          <!-- SLIDE 2 -->
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row align-items-center">
                <!-- TEXTO -->
                <div class="col-md-7 d-flex flex-column justify-content-between py-5 px-4">
                  <div>
                    <span class="slide-number">8</span>
                    <hr class="divider">
                    <h2>Oficinas provinciales</h2>
                    <p class="white">
                        Unidades territoriales de Sercotec que descentralizan la gestión regional, brindando atención y apoyo local. 
                    </p>
                  </div>

                  <!-- CONTROLES -->
                  <div class="slider-controls d-flex align-items-center gap-3">
                    <span class="counter">
                      <strong>1</strong> / 5
                    </span>

                    <button class="slider-arrow prev" disabled>
                      <span class="material-symbols-outlined">arrow_back</span>
                    </button>

                    <button class="slider-arrow next">
                      <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                  </div>
                </div>

                <!-- IMAGEN -->
                <div class="col-md-5 text-end p-0">
                    <img class="img-fluid img-class-qs-02" src="<?php echo get_template_directory_uri(); ?>/img/02_slider_qs.webp" width=" " height=" " role="presentation" alt="">
                </div>

              </div>
            </div>
          </div>

          <!-- SLIDE 3 -->
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row align-items-center">
                <!-- TEXTO -->
                <div class="col-md-7 d-flex flex-column justify-content-between py-5 px-4">
                  <div>
                    <span class="slide-number">23</span>
                    <hr class="divider">
                    <h2>Puntos Mipe</h2>
                    <p class="white">
                       Centros de atención ciudadana que brindan información, orientación y soporte técnico sobre la oferta de Sercotec.
                    </p>
                  </div>

                  <!-- CONTROLES -->
                  <div class="slider-controls d-flex align-items-center gap-3">
                    <span class="counter">
                      <strong>1</strong> / 5
                    </span>

                    <button class="slider-arrow prev" disabled>
                      <span class="material-symbols-outlined">arrow_back</span>
                    </button>

                    <button class="slider-arrow next">
                      <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                  </div>
                </div>

                <!-- IMAGEN -->
                <div class="col-md-5 text-end p-0">
                    <img class="img-fluid img-class-qs-02" src="<?php echo get_template_directory_uri(); ?>/img/04_slider_qs.webp" width=" " height=" " role="presentation" alt="">
                </div>

              </div>
            </div>
          </div>

          <!-- SLIDE 4 -->
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row align-items-center">
                <!-- TEXTO -->
                <div class="col-md-7 d-flex flex-column justify-content-between py-5 px-4">
                  <div>
                    <span class="slide-number">62</span>
                    <hr class="divider">
                    <h2>Centros de Desarrollo de Negocios</h2>
                    <p class="white">
                       Centros de asesoría técnica y capacitación gratuita para fortalecer la gestión y el crecimiento de las pymes
                    </p>
                  </div>

                  <!-- CONTROLES -->
                  <div class="slider-controls d-flex align-items-center gap-3">
                    <span class="counter">
                      <strong>1</strong> / 5
                    </span>

                    <button class="slider-arrow prev" disabled>
                      <span class="material-symbols-outlined">arrow_back</span>
                    </button>

                    <button class="slider-arrow next">
                      <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                  </div>
                </div>

                <!-- IMAGEN -->
                <div class="col-md-5 text-end p-0">
                    <img class="img-fluid img-class-qs-02" src="<?php echo get_template_directory_uri(); ?>/img/03_slider_qs.webp" width=" " height=" " role="presentation" alt="">
                </div>

              </div>
            </div>
          </div>          

        </div>
      </div>
    </section>
    <!--SLIDER-->

</div>

<!--SECTION ORGANIGRAMA-->
<div class="my-xxl"></div>
<section>
  <div class="container-fluid bg-organigrama">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center">Organigrama</h2>
          <p class="text-center ff-sans-s fw-normal">Conoce a quienes componen nuestro servicio</p>
             <a href="https://organigrama.sercotec.cl" target="_blank" rel="noopener noreferrer" class="btn-primary rounded-pill text-decoration-none my-3 mx-auto"> Ingresa aquí 
              <span class="material-symbols-outlined align-middle"> arrow_forward </span>
              </a>         
        </div>
      </div>
  </div>
</section>
<div class="my-xxl"></div>
<!--SECTION ORGANIGRAMA-->

<!--SECTION CANALES DE ATENCIÓN-->
    <section>
      <div class="container-fluid gray-box border-0 rounded-0 p-2 p-md-4 p-lg-5">
        <h2 class="text-center">Canales de atención</h2>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
              <div class="card-coop bg-pm">
                <h3 class="color-blue-dark-1">Puntos Mipe:</h3>
                <p>Atienden a micro y pequeñas empresas, emprendedores en inicio, cooperativas y personas interesadas en emprender. Entregan orientación en gestión, formalización, financiamiento y acceso a programas que impulsan su desarrollo productivo.</p>
                <a href="<?php echo site_url('/oficinas'); ?>" target="_self" class="btn-primary rounded-pill text-decoration-none my-3">  
                  Ingresa aquí <span class="material-symbols-outlined align-middle"> arrow_forward </span></a>
              </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="card-coop bg-cdn">
                <h3 class="color-blue-dark-1"><img class="img-fluid me-1" src="<?php echo get_template_directory_uri(); ?>/img/icon-isotipo-cdn.svg" width="23" height="21" role="presentation" alt=""> Centros de Desarrollo de Negocios</h3>
                <p>Si buscas asesoría experta para potenciar tu empresa y/o cooperativa, la red de <strong>62 </strong>Centros de Desarrollo de Negocios te apoyará de forma gratuita y personalizada. <strong>Encuentra tu Centro más cercano.</strong> </p>
                <a href="https://www.sercotec.cl/centros-de-negocios" target="_self" class="btn-primary rounded-pill text-decoration-none my-3">  
                  Ingresa aquí <span class="material-symbols-outlined align-middle"> arrow_forward </span></a>
              </div>
          </div>
          </div>
      </div>
    </section>
<!--SECTION CANALES DE ATENCIÓN-->    

<!--SECTION newsletter-->
<div class="my-xxl"></div>
<section class="bg-newsletter p-0 m-0">
  <div class="container-fluid p-0 m-0">
      <div class="row justify-content-center p-0 m-0">
        <div class="col-md-6 p-0 m-0">
          <h2 class="text-center">Newsletter</h2>
          <p class="text-center ff-sans-s fw-normal">Mantente al día de todas nuestras noticias y novedades</p>

              <div class="d-flex flex-sm-row flex-column justify-content-center my-4">                   
                <div class="m-1">
                <label for="Mostrar" class="form-label kit-gob mb-0">Correo electrónico:</label>  
                <input type="email" class="input-footer border border-black" id="subscripcion" placeholder="Correo electrónico">
                </div>
                <div class="m-1"><button type="submit" class="btn-red-wp rounded-pill margin-btn-newsletter white-space-fix">Subscríbete aquí</button> </div>
              </div>              
              
        </div>
      </div>
  </div>
</section>
<!--SECTION newsletter-->







</section>

</main>





<?php
get_footer();
?>