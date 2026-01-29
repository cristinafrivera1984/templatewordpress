<?php
get_header();
?>

<main class="mx-2 container">
  <div class="row justify-content-center main-preguntas">
    <div class="col-12 col-sm-12 col-lg-8">
        <!--MIGAS DE PAN-->
        <div class="d-flex justify-content-between flex-column flex-md-row">
          <div class="breadcrumbs flex-grow-1">
            <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
              Inicio</a> /
            <a href="#" class="active">Preguntas frecuentes</a>
          </div>
        </div>
        <!--MIGAS DE PAN-->
        <h1>Preguntas frecuentes</h1>
        <!--acordeon inicio-->
        <section class="mb-4">
          <div class="accordion preguntas" id="accordionExample">
           <!--Ítem 1-->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button preguntas"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  Quiero registrarme en Sercotec
                </button>
              </h2>
              <div id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  Crea tu cuenta en el <a href="https://misdatos.sercotec.cl"  target="_blank"  rel="noopener noreferrer" aria-label="Página Mis Datos: sección de registro de Sercotec, abre en nueva pestaña"> registro de Sercotec </a> y únete a nuestra red para acceder a nuestros programas y beneficios. Además, tendrás un canal directo para resolver dudas, enviar sugerencias o felicitaciones.
                </div>
              </div>
            </div>
            <!--Ítem 1-->
            <!--Ítem 2-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingTwo">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo">
                  Quiero recuperar clave/Olvidé mi contraseña
                </button>
              </h2>
              <div id="collapseTwo"
                class="accordion-collapse collapse"
                 aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <p> Si olvidaste tu contraseña, ingresa a <a href="https://misdatos.sercotec.cl/RecuperarPassword"  target="_blank"  rel="noopener noreferrer" aria-label="Página de Mis Datos: sección Recuperar contraseña de Sercotec, abre en nueva pestaña"> Mis Datos<span class="visually-hidden">(se abre en una nueva pestaña) </span></a> y digita tu RUT. Recibirás en tu correo electrónico las instrucciones para recuperar tu cuenta. </p>

                 <p> En el caso de que el mensaje no llegue a tu bandeja de entrada, revisa la carpeta de <strong> “Correos no deseados” o “spam”.</strong> Si pasados 15 minutos el problema persiste, comunícate con el Punto Mipe de tu región. Sus datos de contacto los encuentras en <a href="<?php echo site_url('/oficinas'); ?>" target="_self"> Sercotec.cl/oficinas</a></p>

                </div>
              </div>
            </div>
            <!--Ítem 2-->
           <!--Ítem 3-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingThree">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseThree"
                  aria-expanded="false"
                  aria-controls="collapseThree">
                  No recuerdo mi correo electrónico con el que cree la cuenta 
                </button>
              </h2>
              <div id="collapseThree"
                class="accordion-collapse collapse"
                 aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <p>Comunícate con el Punto Mipe más cercano. Ellos te ayudarán a recuperar tu cuenta. Encuentra sus datos de contacto en <a href="<?php echo site_url('/oficinas'); ?>" target="_self"> Sercotec.cl/oficinas</a> seleccionando tu región.  </p>         
                </div>
              </div>
            </div>
            <!--Ítem 3-->
           <!--Ítem 4-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingFour">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFour"
                  aria-expanded="false"
                  aria-controls="collapseFour">
                  Quiero conocer los fondos concursables disponibles en mi región
                </button>
              </h2>
              <div id="collapseFour"
                class="accordion-collapse collapse"
                 aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Encuentra las convocatorias activas en el botón <a href="<?php echo site_url('/postulaciones-abiertas'); ?>" target="_self">“Postulaciones abiertas”</a> o comunicate con nuestros <a href="<?php echo site_url('/oficinas'); ?>">Puntos Mipe </a> para que te orienten. </p>
                 </p>         
                </div>
              </div>
            </div>
            <!--Ítem 4-->
           <!--Ítem 5-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingFive">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseFive"
                  aria-expanded="false"
                  aria-controls="collapseFive">
                Quiero desarrollar mi empresa
                </button>
              </h2>
              <div id="collapseFive"
                class="accordion-collapse collapse"
                 aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <p>En Sercotec contamos con  <strong> 62 </strong>Centros de Desarrollo de Negocios y <strong>239</strong> puntos de atención en todo Chile. Entregan asesoría especializada, gratuita y personalizada para que fortalezcas tus capacidades y hagas crecer tu negocio. Encuentra tu centro más cercano en <a href="https://www.sercotec.cl" target="_self"> Sercotec.cl</a></p>         
                </div>
              </div>
            </div>
            <!--Ítem 5-->
           <!--Ítem 6-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingSix">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSix"
                  aria-expanded="false"
                  aria-controls="collapseSix">
               ¿Qué son los Puntos Mipe?
               </button>
              </h2>
              <div id="collapseSix"
                class="accordion-collapse collapse"
                 aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Contamos con <strong>23 oficinas de atención</strong> para entregar información de Sercotec, recibir reclamos, sugerencias o felicitaciones. Además, mantenemos un Punto Mipe en Cochrane hasta 2026, a 334 km al sur de Coyhaique, en la Región de Aysén.</p><br>

                    <p>Los Puntos Mipe están presentes de Arica a Magallanes y la Antártica Chilena. Orientan sobre programas vigentes, requisitos, postulación y fondos concursables.</p><br>

                    <p>Nuestros ejecutivos atienden de manera <strong>gratuita</strong> en forma presencial, telefónica o a través de <a href="<?php echo site_url('/oficinas'); ?>" target="_self">“Oficinas”</a> en <a href="<?php echo site_url('/oficinas'); ?>" target="_self">Sercotec.cl</a>. En este mismo sitio web encuentras sus datos de contacto, seleccionando tu región.</p>
      
                </div>
              </div>
            </div>
            <!--Ítem 6-->            
           <!--Ítem 7-->
            <div class="accordion-item">
              <h2 class="accordion-header"  id="headingSeven">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven"
                  aria-expanded="false"
                  aria-controls="collapseSeven">
              Canales de difusión de Sercotec 
               </button>
              </h2>
              <div id="collapseSeven"
                class="accordion-collapse collapse"
                 aria-labelledby="headingSeven"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <p>Queremos que te enteres de todas las novedades que tenemos para compartir. Para eso te contamos que nuestros canales de difusión oficiales son los siguientes:</p>
                <ul class="square-list my-4">
                    <li><a class="link-blue_02" href="https://www.instagram.com/sercotec_cl/" target="_blank"  rel="noopener noreferrer" aria-label="Instagram de Sercotec, abre en una nueva pestaña"><strong> Instagram:</strong>  sercotec_cl</a></li>

                    <li><a href="https://www.youtube.com/user/CanalSERCOTEC" target="_blank"  rel="noopener noreferrer" aria-label="Canal de Youtube de Sercotec, abre en una nueva pestaña"><strong> Youtube:</strong> CanalSERCOTEC</a></li>

                    <li><a href="https://www.facebook.com/sercotec" target="_blank"  rel="noopener noreferrer" aria-label="Facebook de Sercotec, abre en una nueva pestaña"><strong> Facebook:</strong> Sercotec Chile</a></li>

                    <li><a href="https://cl.linkedin.com/company/sercotecchile" target="_blank"  rel="noopener noreferrer" aria-label="Linkedin de Sercotec, abre en una nueva pestaña"><strong> Linkedln: </strong> Linkedin Sercotec </a></li>
                </ul>
              <p> <strong>Conéctate con nosotros y no te pierdas ninguna oportunidad</p>

      
                </div>
              </div>
            </div>
            <!--Ítem 7--> 


          </div>
        </section> 
        <!--acordeon final-->
    </div>
  </div>

  <div class="row justify-content-center" style="margin-top: 56px;">
    <div class="col-sm-12 col-md-4">
      <div class="gray-box">
        <div style="position: relative;">
            <img style="position: absolute; top:-61px; right:45%;" src="<?php echo get_template_directory_uri(); ?>/img/icon_interrogacion.svg" role="presentation" alt=""> 
        </div>
          <h3 class="text-center mt-3 pb-2">¿No encontraste lo que buscabas? </h3>             
          <a  href="<?php echo site_url('/contacto'); ?>" class="btn-primary rounded-pill text-decoration-none mx-auto"> ¡Escríbenos!
            <span class="material-symbols-outlined align-middle"> arrow_right_alt </span>
          </a>
      </div>
    </div>
  </div>

  

</main>



<main class="container-oficinas my-1">
  <!--MIGAS DE PAN-->

  <!--MIGAS DE PAN-->

   


  

</main>





<?php
get_footer();
?>