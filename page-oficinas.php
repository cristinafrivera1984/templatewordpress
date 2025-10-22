<?php
get_header();
?>


<main class="container my-1">
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
      <div class="col-lg-8 mb-4">
              <h1>Oficinas</h1>
          <label for="..." class="form-label kit-gob">Selecciona tu región:  </label>
            <select class="form-select kit-gob" id="..." aria-describedby="validationServer04Feedback">
                <option selected disabled value="">Selecciona</option>
                <option value="1">...</option>
            </select>   
            <h2 class="color-blue-dark-1 my-4">Sercotec se encuentra desplegado en todo el país. Aquí encontrarás nuestra información de contacto para:</h2>
            <ul class="check-list">
              <li>Resolver dudas sobre nuestro Servicio, sus financiamientos y capacitaciones </li>
              <li>Recibir asesoría experta, sin costo y permanente en el tiempo</li>
            </ul>

            <p style="color:crimson; background-color:darksalmon; padding:20px 0; text-align:center; margin:0 0 30px 0;">acá abajo es lo que aparece cuando seleccionas la región con su info</p>
            

            <div class="map-oficina-wrap">
                  <iframe src="https://www.google.com/maps/d/embed?mid=1IJhBqAzlQ9mQZ7WSaQn5UXNHh-A2Sn_m&ehbc=2E312F" ></iframe>
            </div>
            <h2 class="fs-3">Resuelve tus dudas con el Punto Mipe</h2>
            <p>Nuestros centros de atención e información a emprendedores, emprendedoras, microempresarios y microempresarias te orientarán sobre Sercotec, sus fondos concursables, bases y requisitos, talleres, charlas y capacitaciones. </p>
            <section>
              <div class="gray-box">
                 <h2 class="color-blue-dark-1">Punto Mipe Valparaíso</h2>
                 <p>
                  <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                    phone_in_talk
                  </span>
                  23242 5218 –  23242 5219 – + 569 54378663
                 </p>
                 <p>
                  <img class=" align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23">
                  23242 5218 –  23242 5219 – + 569 54378663
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
                  Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 /  14:30 – 16:00 
                 </p>
              </div>
              <div class="gray-box">
                 <h2 class="color-blue-dark-1">Punto Mipe Valparaíso 2</h2>
                 <p>
                  <span class="material-symbols-outlined align-middle me-2 color-blue-dark-2">
                    phone_in_talk
                  </span>
                  23242 5218 –  23242 5219 – + 569 54378663
                 </p>
                 <p>
                  <img class=" align-middle me-2" src="<?php echo get_template_directory_uri(); ?>/img/icon_whatapp.svg" width="23" height="23">
                  23242 5218 –  23242 5219 – + 569 54378663
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
                  Lunes a jueves de 09:00 – 13:00 horas / 14:30 – 18:00 hrs. / Viernes de 09:00 – 12:30 /  14:30 – 16:00 
                 </p>
              </div>
            </section>
            <h4>Si tienes otras consultas, reclamos, sugerencias o felicitaciones escríbenos a:  </h4>
            <a href="" class="btn-primary rounded-pill text-decoration-none"><span class="material-symbols-outlined align-middle">mail </span> Contáctanos </a>
      </div>
    </div>

</main>

<div class="container-fluid gray-box border border-0">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <h2 class="color-blue-dark-1"> <img class="me-1 align-middle" height="21" width="23" alt="Logo Centro de Desarrollo de Negocios" src="<?php echo get_template_directory_uri(); ?>/img/icon-isotipo-cdn.svg"> Encuentra tu Centro de Desarrollo de Negocios Sercotec de: 

         <button type="button" class="border border-0 bg-transparent" data-bs-toggle="tooltip" data-bs-toggle="tooltip a la derecha" data-bs-placement="right" data-bs-title="Recibe asesoría experta, sin costo y permanente en el tiempo para potenciar tu negocio." aria-label="Recibe asesoría experta, sin costo y permanente en el tiempo para potenciar tu negocio.">
             <img class="me-1" height="30" width="30" alt="Ícono de información" src="<?php echo get_template_directory_uri(); ?>/img/icon-tooltip.svg">
                  </button>
          </h2>
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


<?php
get_footer();
?>