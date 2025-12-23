<?php
get_header();
?>

<main class="mx-2 container-oficinas-mob">
  <!--MIGAS DE PAN-->
  <div class="d-flex justify-content-between flex-column flex-md-row">
    <div class="breadcrumbs flex-grow-1">
      <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
        Inicio</a> /
      <a href="#" class="active">Oficinas</a>
    </div>
  </div>
  <!--MIGAS DE PAN-->
  <div class="row justify-content-center main-content-oficinas">
    <div class="mb-4">
      <h1>Oficinas</h1>
      <div class="col-12 col-md-6">
        <label for="..." class="form-label kit-gob">Selecciona tu región: </label>
        <select class="form-select kit-gob" id="..." aria-describedby="validationServer04Feedback">
          <option selected disabled value="">Selecciona</option>
          <option value="1">...</option>
        </select>
      </div>
      <h2 class="color-blue-dark-1 my-4">Aquí encontrarás nuestra información de contacto para: </h2>
      <ul class="check-list">
        <li>Resolver dudas sobre nuestro Servicio, sus financiamientos y capacitaciones </li>
        <li>Recibir asesoría experta, sin costo y permanente en el tiempo</li>
      </ul>

      <p style="color:crimson; background-color:darksalmon; padding:20px 0; text-align:center; margin:0 0 30px 0;">acá abajo es lo que aparece cuando seleccionas la región con su info</p>


      <div class="map-oficina-wrap">
        <iframe src="https://www.google.com/maps/d/embed?mid=1IJhBqAzlQ9mQZ7WSaQn5UXNHh-A2Sn_m&ehbc=2E312F"></iframe>
      </div>

      <!--Mobile accordeon-->
      <div class="accordion accordion-custom sct-inicio" id="accordionExample">
        <!-- Ítem 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header m-0" id="headingOne">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne">
              Resuelve tus dudas
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Nuestros centros de atención e información -Puntos Mipe- te orientarán sobre Sercotec, sus fondos concursables, bases y requisitos, talleres, charlas y capacitaciones. </p>
              <section>
                <div class="gray-box">
                  <h3 class="color-blue-dark-1">Punto Mipe Valparaíso</h3>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      phone_in_talk
                    </span>
                    23242 5218 – 23242 5219 – + 569 54378663
                  </p>
                  <p>
                    <img class="align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23" alt="ícono de whatsapp">
                    23242 5218 – 23242 5219 – + 569 54378663
                  </p>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      location_on
                    </span>
                    Errázuriz 1178, piso 8, oficina 85. Valparaíso
                  </p>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      schedule
                    </span>
                    Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 / 14:30 – 16:00
                  </p>
                </div>
                <div class="gray-box">
                  <h2 class="color-blue-dark-1">Punto Mipe Valparaíso 2</h2>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      phone_in_talk
                    </span>
                    23242 5218 – 23242 5219 – + 569 54378663
                  </p>
                  <p>
                    <img class=" align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23" alt="ícono de whatsapp">
                    23242 5218 – 23242 5219 – + 569 54378663
                  </p>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      location_on
                    </span>
                    Errázuriz 1178, piso 8, oficina 85. Valparaíso
                  </p>
                  <p>
                    <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                      schedule
                    </span>
                    Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 / 14:30 – 16:00
                  </p>
                </div>
              </section>
              <h4>Si tienes otras consultas, reclamos, sugerencias o felicitaciones escríbenos a:  </h4>
              <a href="" class="btn-primary rounded-pill text-decoration-none"><span class="material-symbols-outlined align-middle">mail </span> Contáctanos </a>
              <div class="my-3"></div>

            </div>
          </div>
        </div>

        <!-- Ítem 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header m-0" id="headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo">
              Asesoría experta para tu negocio
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <h2 class="color-blue-dark-1"> <img class="me-1 align-middle" height="21" width="23" alt="Logo Centro de Desarrollo de Negocios" src="<?php echo get_template_directory_uri(); ?>/img/icon-isotipo-cdn.svg"> Recibe asesoría continua para tu negocio con nuestros Centros de Desarrollo de Negocios. </h2>
              <ul class="square-list">
                <li><a href="" class="text-decoration-underline"> Quillota</a></li>
                <li><a href="" class="text-decoration-underline"> Aconcagua</a></li>
                <li><a href="" class="text-decoration-underline"> San Antonio</a></li>
                <li><a href="" class="text-decoration-underline"> Valparaíso</a></li>
                <li><a href="" class="text-decoration-underline"> Viña del Mar</a></li>
                <li><a href="" class="text-decoration-underline"> Marga Marga</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Ítem 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button accordion-button m-0 collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="false"
              aria-controls="collapseThree">
              Conoce tu Dirección regional
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">

            <p> Sercotec, a través de sus Direcciones Regionales, gestiona recursos e impulsa iniciativas locales. </p>

              <h3>Dirección Regional</h3>
              <p>
                <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                  phone_in_talk
                </span>
                23242 5218 – 23242 5219 – + 569 54378663
              </p>

              <p>
                <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                  location_on
                </span>
                Errázuriz 1178, piso 8, oficina 85. Valparaíso <span style="white-space: nowrap;" class="chips-main sucess-light">Visita previa coordinación telefónica</span>
              </p>

              <h3>Oficina Provincial de San Felipe</h3>
              <p>
                <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                  phone_in_talk
                </span>
                23242 5218 – 23242 5219 – + 569 54378663
              </p>

              <p>
                <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                  location_on
                </span>
                Errázuriz 1178, piso 8, oficina 85. Valparaíso <span style="white-space: nowrap;" class="chips-main sucess-light">Visita previa coordinación telefónica</span>
              </p>

              <div class="row justify-content-center">
                <div class="col-lg-8">
        <!--Caja RRSS celeste-->
                  <div class="light-blue-box-oficinas">
                      <h2 class="color-blue-dark-1 pb-1">Síguenos en nuestras redes sociales de Sercotec Valparaíso:</h2>
                      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de Facebook (se abre en una nueva pestaña)">
                        <img class="bluedark-3 me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="34" height="34" alt="Sercotec Facebook" title="Sercotec Facebook">
                      </a>
                      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de Instagram (se abre en una nueva pestaña)">
                        <img class="bluedark-3 me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="34" height="34" alt="Sercotec Instagram" title="Sercotec Instagram">
                      </a>
                      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de X / Twitter (se abre en una nueva pestaña)">
                        <img class="bluedark-3" src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="32" height="33" alt="Sercotec  X / Twitter" title="Sercotec  X / Twitter">
                      </a>
                  </div>
        <!--Caja RRSS celeste-->                 
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  </div>


  <!--Mobile accordeon-->

  </div>
  </div>

</main>



<main class="container-oficinas my-1">
  <!--MIGAS DE PAN-->
  <div class="container">
      <div class="d-flex justify-content-between flex-column flex-md-row">
        <div class="breadcrumbs flex-grow-1">
          <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
            Inicio</a> /
          <a href="#" class="active">Oficinas</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->

  <div class="container">
  <div class="row justify-content-center main-content-oficinas">
    <div class="col-lg-8 mb-4">
      <h1>Oficinas</h1>
      <div class="col-12 col-md-6">
        <label for="..." class="form-label kit-gob">Selecciona tu región: </label>
        <select class="form-select kit-gob" id="..." aria-describedby="validationServer04Feedback">
          <option selected disabled value="">Selecciona</option>
          <option value="1">...</option>
        </select>
      </div>
      <h2 class="color-blue-dark-1 my-4">Sercotec se encuentra desplegado en todo el país. Aquí encontrarás nuestra información de contacto para:</h2>
      <ul class="check-list">
        <li>Resolver dudas sobre nuestro Servicio, sus financiamientos y capacitaciones </li>
        <li>Recibir asesoría experta, sin costo y permanente en el tiempo</li>
      </ul>

      <p style="color:crimson; background-color:darksalmon; padding:20px 0; text-align:center; margin:0 0 30px 0;">acá abajo es lo que aparece cuando seleccionas la región con su info</p>


      <div class="map-oficina-wrap">
        <iframe src="https://www.google.com/maps/d/embed?mid=1IJhBqAzlQ9mQZ7WSaQn5UXNHh-A2Sn_m&ehbc=2E312F" title="Mapa de Oficinas Sercotec"
      loading="lazy"></iframe>
      </div>
      <h2 class="fs-3">Resuelve tus dudas con el Punto Mipe</h2>
      <p>Nuestros centros de atención e información a emprendedores, emprendedoras, microempresarios y microempresarias te orientarán sobre Sercotec, sus fondos concursables, bases y requisitos, talleres, charlas y capacitaciones. </p>
      <section>
        <div class="gray-box">
          <h3 class="color-blue-dark-1">Punto Mipe Valparaíso</h3>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              phone_in_talk
            </span>
            23242 5218 – 23242 5219 – + 569 54378663
          </p>
          <p>
            <img class=" align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23" alt="ícono Whatsapp">
            23242 5218 – 23242 5219 – + 569 54378663
          </p>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              location_on
            </span>
            Errázuriz 1178, piso 8, oficina 85. Valparaíso
          </p>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              schedule
            </span>
            Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 / 14:30 – 16:00
          </p>
        </div>
        <div class="gray-box">
          <h3 class="color-blue-dark-1">Punto Mipe Valparaíso 2</h3>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              phone_in_talk
            </span>
            23242 5218 – 23242 5219 – + 569 54378663
          </p>
          <p>
            <img class=" align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23" alt="ícono Whatsapp">
            23242 5218 – 23242 5219 – + 569 54378663
          </p>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              location_on
            </span>
            Errázuriz 1178, piso 8, oficina 85. Valparaíso
          </p>
          <p>
            <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
              schedule
            </span>
            Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 / 14:30 – 16:00
          </p>
        </div>
      </section>
      <h4>Si tienes otras consultas, reclamos, sugerencias o felicitaciones escríbenos a:  </h4>
      <a href="" class="btn-primary rounded-pill text-decoration-none"><span class="material-symbols-outlined align-middle">mail </span> Contáctanos </a>
    </div>
  </div>
  </div>


<div class="mt-xxl"></div>

<div class="container-fluid gray-box border border-0 rounded-0">
  <div class="row justify-content-center">
    <div class="col-lg-8 mt-3">
      <h3 class="color-blue-dark-1"> <img class="me-1 align-middle" height="21" width="23" alt="Logo Centro de Desarrollo de Negocios" src="<?php echo get_template_directory_uri(); ?>/img/icon-isotipo-cdn.svg" alt="Logo Centros de Desarrollo de Negocios"> Encuentra tu Centro de Desarrollo de Negocios Sercotec de:

        <button type="button" class="border border-0 bg-transparent" data-bs-toggle="tooltip" data-bs-toggle="tooltip a la derecha" data-bs-placement="right" data-bs-title="Recibe asesoría experta, sin costo y permanente en el tiempo para potenciar tu negocio." aria-label="Recibe asesoría experta, sin costo y permanente en el tiempo para potenciar tu negocio.">
          <img class="me-1" height="30" width="30" alt="Ícono de información" src="<?php echo get_template_directory_uri(); ?>/img/icon-tooltip.svg">
        </button>
      </h3>
      <ul class="square-list">
        <li><a href="" class="text-decoration-underline"> Quillota</a></li>
        <li><a href="" class="text-decoration-underline"> Aconcagua</a></li>
        <li><a href="" class="text-decoration-underline"> San Antonio</a></li>
        <li><a href="" class="text-decoration-underline"> Valparaíso</a></li>
        <li><a href="" class="text-decoration-underline"> Viña del Mar</a></li>
        <li><a href="" class="text-decoration-underline"> Marga Marga</a></li>
      </ul>
      <div class="my-xxl" style="border-bottom: 1px solid rgba(var(--grey-20), 1);"></div>

      <h3 class="color-blue-dark-1"> Conoce tu dirección regional:
        <button type="button" class="border border-0 bg-transparent" data-bs-toggle="tooltip" data-bs-toggle="tooltip a la derecha" data-bs-placement="right" data-bs-title="Sercotec, a través de sus Direcciones Regionales, gestiona recursos e impulsa iniciativas locales." aria-label="Sercotec, a través de sus Direcciones Regionales, gestiona recursos e impulsa iniciativas locales.">
          <img class="me-1" height="30" width="30" alt="Ícono de información" src="<?php echo get_template_directory_uri(); ?>/img/icon-tooltip.svg">
        </button>
      </h3>


      <h3>Dirección Regional</h3>
      <p>
        <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
          phone_in_talk
        </span>
        23242 5218 – 23242 5219 – + 569 54378663
      </p>

      <p>
        <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
          location_on
        </span>
        Errázuriz 1178, piso 8, oficina 85. Valparaíso <span style="white-space: nowrap;" class="chips-main sucess-light">Visita previa coordinación telefónica</span>
      </p>

      <h3>Oficina Provincial de San Felipe</h3>
      <p>
        <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
          phone_in_talk
        </span>
        23242 5218 – 23242 5219 – + 569 54378663
      </p>

      <p>
        <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
          location_on
        </span>
        Errázuriz 1178, piso 8, oficina 85. Valparaíso <span style="white-space: nowrap;" class="chips-main sucess-light">Visita previa coordinación telefónica</span>
      </p>
    </div>
  </div>
</div>

<div class="mt-xxl"></div>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="light-blue-box-oficinas">
      <h2 class="color-blue-dark-1 pb-1">Síguenos en nuestras redes sociales de Sercotec Valparaíso:</h2>
      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de Facebook (se abre en una nueva pestaña)">
        <img class="bluedark-3 me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.svg" width="34" height="34" alt="Sercotec Facebook" title="Sercotec Facebook">
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de Instagram (se abre en una nueva pestaña)">
        <img class="bluedark-3 me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.svg" width="34" height="34" alt="Sercotec Instagram" title="Sercotec Instagram">
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Ir página de X / Twitter (se abre en una nueva pestaña)">
        <img class="bluedark-3" src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.svg" width="32" height="33" alt="Sercotec  X / Twitter" title="Sercotec  X / Twitter">
      </a>

    </div>
    <div class="mb-xl"></div>
  </div>
</div>


</main>





<?php
get_footer();
?>