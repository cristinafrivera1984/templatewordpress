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
          <a href="#" class="active">Resultado de búsqueda</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->

  <div class="container">
    <div class="row justify-content-center main-content-oficinas my-4">

        <div class="col-lg">
          <h1>Resultado de búsqueda para: palabra o frase</h1>
          <p>Mostrando <strong>43 </strong>resultados</p>
          <!--resultado de una página-->
          <div class="card-resultado">
              <h2><a href="">Capital Semilla Emprende </a></h2>
              <p>Es un fondo concursable de Sercotec que promueve la creación de nuevos negocios con oportunidad de participar..</p>
          </div>
          <!--resultado de una página-->
          <!--resultado de una entrada-->
          <div class="card-resultado">
            <div class="d-flex flex-row align-items-center mb-2">
                <span class="small-text me-3">29/08/2025</span>
                <h3><a href="#" class="categoria"> Nombre categoría</a></h3> 
            </div>  
              <h2><a href="">15 pymes del país son reconocidas con el nuevo Sello Impacta Sustentable</a></h2>
              <p>Es un fondo concursable de Sercotec que promueve la creación de nuevos negocios con oportunidad de participar..</p>
          </div>
          <!--resultado de una entrada-->
        </div>
    </div>

    <!--PAGINACION-->
    <div class="d-flex justify-content-center">
        <nav aria-label="...">
            <ul class="pagination kit-gob">
              <li class="page-item kit-gob disabled">
                <span class="page-link kit-gob">
                    <span class="material-symbols-outlined">
                        chevron_left
                    </span>
                </span>
              </li>
              <li class="page-item kit-gob"><a class="page-link kit-gob" href="#">1</a></li>
              <li class="page-item kit-gob active" aria-current="page">
                <span class="page-link kit-gob">2</span>
              </li>
              <li class="page-item kit-gob"><a class="page-link kit-gob" href="#">3</a></li>
              <li class="page-item kit-gob"><a class="page-link kit-gob" href="#">4</a></li>
              <li class="page-item kit-gob">
                <a class="page-link kit-gob arrows" href="#">
                    <span class="material-symbols-outlined">
                            chevron_right
                    </span>
                </a>
              </li>
            </ul>
          </nav>
     </div>
  <!--PAGINACION--> 

  <div class="d-flex justify-content-center my-4">
    <div class="card-grey-1 col-lg-4">
      <img class="img-card-grey" src="<?php echo get_template_directory_uri(); ?>/img/icon-card-grey-question.svg" width="54" height="54">
      <h2>¿No encontraste lo que buscabas?</h2>
      <a href="" class="btn-primary rounded-pill text-decoration-none mx-auto">
      <span class="material-symbols-outlined align-middle"> arrow_forward </span>  
      ¡Escríbenos!</a>
    </div>
  </div>





 </div>
<div class="mt-xxl"></div>


<div class="mt-xxl"></div>



</main>





<?php
get_footer();
?>