<?php
get_header();
?>


<main class="container my-1">
  <!--MIGAS DE PAN--> 
    <div class="d-flex justify-content-between flex-column flex-md-row">           
      <div class="breadcrumbs flex-grow-1">
          <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
             Inicio</a> /
          <a href="#" class="active">Digitaliza tu almacén</a>
      </div>
    </div> 
<!--MIGAS DE PAN--> 

  <div class="content-wrapper d-flex flex-column flex-lg-row justify-content-between">
    <section class="main-content pe-lg-4">
      <h1>Digitaliza tu almacén</h1>

        <div class="content-block">
            <h2>¿Qué es?</h2>
            <p>Es un aporte de Sercotec de $2.350.000 CLP para inversiones, asistencia técnica, capacitación, acciones de marketing y tecnologías digitales que aporten nuevos conocimientos para la gestión del almacén y la captura de nuevas oportunidades para el negocio.</p>
        </div>
        <div class="content-block">
            <h2>¿Qué apoyo entrega?</h2>
                <ul class="check-list">
                    <li>$350.000 CLP para asistencia técnica, capacitación y marketing para promover el negocio en la era digital.</li>
                    <li>Y 2.000.000 CLP para la adquisición de máquinas, equipos y herramientas digitales, para fortalecer la gestión interna y los procesos de venta del almacén.</li>
                </ul>
        </div>
          <div class="content-block">
              <h2>¿Quiénes pueden acceder?</h2>
              <p>Es un aporte de Sercotec de $2.350.000 CLP para inversiones, asistencia técnica, capacitación, acciones de marketing y tecnologías digitales que aporten nuevos conocimientos para la gestión del almacén y la captura de nuevas oportunidades para el negocio.</p>
          </div>

        <div class="content-block" style="margin-top: 48px;">
            <h2>¡Revisa estos videos!</h2>
                <div class="d-flex flex-column flex-md-row gap-3">
                  <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/r8J6oi3afds?si=c35_bQ0nXM5bQnXM5bC1MZ"
                      title="YouTube video player"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      allowfullscreen></iframe>
                  </div>
                  <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/tWRR45mTbKQ?si=i9Y07zkA7f-zQQfR"
                      title="YouTube video player"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      allowfullscreen></iframe>
                  </div>
                </div>
        </div>
        <div class="content-block">
          <h1>Revisa las convocatorias disponibles en tu región:</h1>
        </div>

    </section>


    <aside class="sidebar mt-4 mt-lg-0">
      <div class="gray-box">
        <h3>Programas relacionados</h3>
          <ul class="square-list"> 
              <li><a href="#">  Crece</a></li>
              <li><a href="#">Pymes Globales</a></li>
              <li><a href="#">Negocios Digitales</a></li>
              <li><a href="#">Kit Digital – Ruta Digital</a></li>
              <li><a href="#">Redes de oportunidades</a></li>
              <li><a href="#">Promoción y canales</a></li>
              <li><a href="#">MejoraNegocios</a></li>
              <li><a href="#">Formación empresarial</a></li>
          </ul>
      </div>
     <div class="gray-box" style="margin: 70px 0 0 0; padding-bottom: 40px;">
                      <div style="position: relative;">
                          <img style="position: absolute; top:-61px; right:45%;" src="<?php echo get_template_directory_uri(); ?>/img/icon_interrogacion.svg"> 
                      </div>
        <h3 class="text-center mt-3 pb-2">¿Tienes dudas?</h3>                
            <a href="" class="btn-primary rounded-pill text-decoration-none d-inline-block">Comunícate con tu Punto Mipe <span class="material-symbols-outlined align-middle"> arrow_right_alt </span></a>
      </div>

    </aside>
  </div>
</main>



<?php
get_footer();
?>