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
          <a href="#" class="active">Contacto</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->


<div class="container main-content-oficinas">
    <h1>Contáctate con nosotros</h1>
</div>

<div class="modulo-contacto">
    <div class="container my-4">
      <div class="row">
          <div class="col-lg-8">
            <p>¿Quieres hacer una consulta, enviar un reclamo, sugerencia o felicitación? Aquí puedes hacerlo de forma rápida y sencilla.</p>
            <ul class="check-list-white my-4">
              <li>Para ingresar, solo necesitas estar registrado o registrada  en nuestro sitio. Responderemos tu mensaje lo antes posible.</li>
            </ul>                 
           <a href="https://login.sercotec.cl/Web/index.html#/inicio/login?d=eyJkZXN0aW5vRmx1am8iOiJodHRwczovL3NvbGljaXR1ZGVzLnNlcmNvdGVjLmNsL0NvbnN1bHRhV2ViL0luZGV4IiwiZGVzdGlub1BhcmFtcyI6W10sImRlc3Rpbm9QYXJhbXNWYWx1ZSI6e30sImlkZmx1am8iOiI3In0%253D&tmpflujo=padre-template-2.html" target="_blank" rel="noopener noreferrer" class="btn-white-01 fw-semibold rounded-pill"> Ir al formulario
              <span class="material-symbols-outlined align-middle">arrow_forward </span>
           </a>  
          </div>
          <div class="position-relative">
            <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/contacto-img.svg"
                  class="contacto"
                  role="presentation" alt="">
          </div>
      </div>
  </div>
</div>


<section>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4" style="margin: 80px 0 0 0;">
            <div class="gray-box">
                  <div style="position: relative;">
                      <img style="position: absolute; top:-61px; right:45%;" src="<?php echo get_template_directory_uri(); ?>/img/icon-pf.svg" role="presentation" alt=""> 
                  </div>
                <h3 class="text-center mt-3 pb-2">¿Tienes otras dudas?</h3>
                <p class="text-center">Revisa nuestras Preguntas Frecuentes y encuentra respuestas inmediatas.</p>                
                    <a  href="<?php echo site_url('/preguntas-frecuentes'); ?>" class="btn-primary rounded-pill text-decoration-none mx-auto">  Ingresa aquí  <span class="material-symbols-outlined align-middle"> arrow_right_alt </span></a>
              </div>
      </div>
      <div class="col-md-6 col-lg-4" style="margin: 80px 0 0 0;">
            <div class="gray-box">
                  <div style="position: relative;">
                      <img style="position: absolute; top:-61px; right:45%;" src="<?php echo get_template_directory_uri(); ?>/img/icon_interrogacion.svg" role="presentation" alt=""> 
                  </div>
                <h3 class="text-center mt-3 pb-2">¿Te interesa conocer sobre fondos concursables?</h3>
                <p class="text-center">Nuestros ejecutivos del Punto Mipe te orientarán de manera personalizada y gratuita vía telefónica o presencial.</p>                
                    <a  href="<?php echo site_url('/oficinas'); ?>" class="btn-primary rounded-pill text-decoration-none mx-auto"> Ver datos de contacto
 <span class="material-symbols-outlined align-middle"> arrow_right_alt </span></a>
              </div>
      </div>    
    </div>



</div>
</section>
 

<div class="my-xxl"></div>

</main>





<?php
get_footer();
?>