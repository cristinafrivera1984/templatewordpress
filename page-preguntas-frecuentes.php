<?php
get_header();
?>

<main class="mx-2 container">
  <div class="row justify-content-center">
    <div class="col-8">
        <!--MIGAS DE PAN-->
        <div class="d-flex justify-content-between flex-column flex-md-row">
          <div class="breadcrumbs flex-grow-1">
            <a href="#"><span class="material-symbols-outlined align-bottom">home</span>
              Inicio</a> /
            <a href="#" class="active">Preguntas frecuentes</a>
          </div>
        </div>
        <!--MIGAS DE PAN-->
        <!--acordeon inicio-->
        <section class="mb-4">
          <div class="accordion" id="accordionExample">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button preguntas"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne"
                class="accordion-collapse collapse show"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Contenido 1
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button preguntas collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo"
                  aria-expanded="false"
                  aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Contenido 2
                </div>
              </div>
            </div>

          </div>
        </section> 
        <!--acordeon final-->
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