<?php
get_header();
?>


<main class="container my-1">
  <!--MIGAS DE PAN--> 
    <div class="d-flex justify-content-between flex-column flex-md-row">           
      <div class="breadcrumbs flex-grow-1">
          <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
             Inicio</a> /
          <a href="#" class="active">Crece Multisectorial Provincia de Concepción Región del Biobío 2024</a>
      </div>
    </div> 
<!--MIGAS DE PAN--> 

<!---->


  <div class="content-wrapper d-flex flex-column flex-lg-row justify-content-between">

      <!--CONTAINER LEFT-->
      <div class="main-content d-flex flex-column w-100">
          <div class="accordion accordion-custom sct-inicio w-100" id="accordionExample">
             <h1>Crece Multisectorial Provincia de Concepción Región del Biobío 2024</h1>
              <div class="d-flex flex-column flex-sm-row my-3">
                  <div class="me-2 my-1"><span class="material-symbols-outlined align-bottom"> calendar_month</span> <strong>Inicio:</strong> 12/12/2025</div>
                  <div class="me-2 my-1"><span class="material-symbols-outlined align-bottom"> calendar_month</span> <strong>Cierre:</strong> 12/01/2026</div>
                  <div class="me-2 my-1"><span class="material-symbols-outlined align-bottom"> location_on </span> Arica y Parinacota</div>
              </div> 
              <!-- Ítem 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header fichas m-0" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne">
                    ¿Qué es?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Es un aporte de Sercotec de $2.350.000 CLP para inversiones, asistencia técnica, capacitación, acciones de marketing y tecnologías digitales que aporten nuevos conocimientos para la gestión del almacén y l captura de nuevas oportunidades para el negocio. </p>
                  </div>
                </div>
              </div>

              <!-- Ítem 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header fichas m-0" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo">
                    ¿Qué apoyo entrega?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <ul class="check-list">
                          <li>$350.000 CLP para asistencia técnica, capacitación y marketing para promover el negocio en la era digital.</li>
                          <li>Y 2.000.000 CLP para la adquisición de máquinas, equipos y herramientas digitales, para fortalecer la gestión interna y los procesos de venta del almacén.</li>
                      </ul>
                  </div>
                </div>
              </div>

              <!-- Ítem 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header fichas" id="headingThree">
                  <button
                    class="accordion-button accordion-button m-0 collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree">
                  ¿Quiénes pueden acceder?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                  <p> Es un aporte de Sercotec de $2.350.000 CLP para inversiones, asistencia técnica, capacitación, acciones de marketing y tecnologías digitales que aporten nuevos conocimientos para la gestión del almacén y la captura de nuevas oportunidades para el negocio.</p>

                  </div>
                </div>
              </div>
          </div>
          <!--Caja con bases de convocatorias-->
          <div class="gray-box-bases">
            <div class="d-flex flex-row align-items-center mb-2">
              <div class="icon-base"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/icon-bases.svg" width="42" height="42" alt="Icono bases de convocatorias"></div>
              <div><h3>¡No olvides leer las bases antes de postular! Descargarlas aquí.</h3></div>
            </div>

            <div class="container-bases">
                <ul class="download-list">
                  <li><a href="#" target="_blank" rel="noopener"> <span class="visually-hidden">Se abre en nueva pestaña</span> Bases Crece Multisectorial Provincia de Concepción Región del Biobío (PDF)</a></li>
                  <li><a href="#" target="_blank" rel="noopener"> Bases Crece Multisectorial Provincia de Concepción Región del Biobío (DOCX)</a></li>
                  <li><a href="#" target="_blank" rel="noopener">  <span class="visually-hidden">Se abre en nueva pestaña</span> Ampliación - Crece Multisectorial Provincia de Concepción Región del Biobío (PDF)</a></li>               
                </ul>
            </div>
          </div>
          <!--Caja con bases de convocatorias-->

      </div>

      <!--CONTAINER LEFT-->
    
<!--Container desktop-->

    <aside class="sidebar">
      <div class="gray-box-postular">
        <h3 class="text-center">¿Cómo postular? </h3>
          <p class="text-center">Haz clic aquí para conocer el <strong>paso a paso</strong> del proceso de postulación.</p>
          <a href="" class="btn-primary rounded-pill text-decoration-none mx-auto white-space-fix" data-bs-toggle="modal" data-bs-target="#modalVideoPostulacion"> Ver más <span class="material-symbols-outlined align-middle"> arrow_right_alt </span></a>
          <!--MODAL-->
              <div
                class="modal fade"
                id="modalVideoPostulacion"
                tabindex="-1"
                aria-labelledby="modalVideoPostulacionLabel"
                aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h2 class="modal-title fs-5" id="modalVideoPostulacionLabel">
                        ¿Cómo postular?
                      </h2>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Cerrar">
                      </button>
                    </div>

                    <div class="modal-body p-0">
                      <!-- Video responsive -->
                      <div class="ratio ratio-16x9">
                        <video
                          controls
                          preload="metadata"
                          aria-describedby="modalVideoPostulacionLabel">
                          <source src="<?php echo get_template_directory_uri(); ?>/img/como_postular.mp4" type="video/mp4">
                          Tu navegador no soporta video HTML5.
                        </video>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!--MODAL-->
      </div>
        <div class="gray-box" style="margin: 70px 0 0 0; padding-bottom: 40px;">
                      <div style="position: relative;">
                          <img style="position: absolute; top:-61px; right:45%;" src="<?php echo get_template_directory_uri(); ?>/img/icon_interrogacion.svg" role="presentation" alt=""> 
                      </div>
        <h3 class="text-center mt-3 pb-2">¿Tienes dudas?</h3>                
            <a href="" class="btn-primary rounded-pill text-decoration-none mx-auto white-space-fix"> Comunícate con tu Punto Mipe <span class="material-symbols-outlined align-middle"> arrow_right_alt </span></a>
      </div>

    </aside>
  </div>

<div class="postular-fixed">
  <a href="#" class="btn-postular" aria-label="Enlace a página de Postular, abre en nueva pestaña">
    Postular
  </a>
</div>


  
</main>



<?php
get_footer();
?>