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
          <a href="#" class="active">Noticias</a>
        </div>
      </div>
  </div>
  <!--MIGAS DE PAN-->

  <div class="modulo-newsletter">
    <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <h1 class="text-center">Newsletter </h1>
            <p class="text-center">Entérate de lo que ha sucedido en Sercotec las últimas semanas</p>
              <div class="d-flex flex-md-row flex-column justify-content-center my-4">                   
                <div class="m-1">
                <label for="Mostrar" class="form-label kit-gob text-light fw-normal mb-0">Correo electrónico:</label>  
                <input type="email" class="input-footer" id="subscripcion" placeholder="Correo electrónico">
                </div>
                <div class="m-1"><button type="submit" class="btn-red-wp rounded-pill margin-btn-newsletter">Subscríbete aquí</button> </div>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="container">
 
<div class="row mt-4 align-items-center  justify-content-center justify-content-sm-start">
  <div class="col-auto">
    <label class="form-label kit-gob fw-normal mb-0">
      Selecciona categoría:
    </label>
  </div>

  <div class="col-auto">      
     <div class="dropdown">
          <button 
            class="select-news-categoria dropdown-toggle w-100 w-sm-auto text-start"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Categorías
          </button>

          <ul class="dropdown-menu p-2">
            <li>
              <label class="dropdown-item">
                <input type="checkbox" class="form-check-input kit-gob">
                Opción 1
              </label>
            </li>
            <li>
              <label class="dropdown-item">
                <input type="checkbox" class="form-check-input kit-gob">
                Opción 2
              </label>
            </li>
            <li>
              <label class="dropdown-item">
                <input type="checkbox" class="form-check-input kit-gob">
                Opción 3
              </label>
            </li>
          </ul>        
     </div>
  </div>

  <div class="col-auto">
      <button class="btn-transparent link-blue_01 w-100 w-sm-auto">
        <span class="material-symbols-outlined align-middle">refresh</span>
        Limpiar búsqueda
      </button>
  </div>
</div>

      <!--ACÁ CONTAINER CON LOS CARDS DE LAS NOTICIAS-->
        <!--🐧​Gabo: que aparezcan de a 12 noticias por paginado-->
          <section class="cards-grid mt-4">
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_01.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12 marzo 2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    <!--🐧​Gabo: dejar hasta 78 caracteres por fa.-->
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_02.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_01.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_02.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_01.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_02.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article> 
            <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_01.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>
             <article class="card-news">             
              <a href="/detalle-noticia" class="card-image-link">
                <img 
                  src="<?php echo get_template_directory_uri(); ?>/img/noticia_02.jpg"
                  alt="Personas participando en una actividad de capacitación para emprendedores">
              </a>
              <div class="card-content">
                <div class="card-meta">
                  <time datetime="2025-03-12">12/12/2025</time>
                  <span class="card-category">
                    <a href="/categoria/actualidad">
                      <span class="visually-hidden">Categoría: </span>
                      Actualidad
                    </a>
                  </span>
                </div>
                <h3 class="card-title">
                  <a href="/detalle-noticia">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et mi tincidunt.
                  </a>
                </h3>
              </div>
            </article>                       
            
          </section>
      
      <!--ACÁ CONTAINER CON LOS CARDS DE LAS NOTICIAS-->
    <!--PAGINACION-->
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Paginación de noticias">
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
</div>

 



</main>





<?php
get_footer();
?>