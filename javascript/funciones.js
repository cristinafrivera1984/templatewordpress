


 document.addEventListener("DOMContentLoaded", function() {
    let glide1 = document.querySelector('.glide-carousel-inicio');
  
    if (glide1) {
      new Glide(glide1, {
        type: "carousel",
        gap: 16,
        perView: 6,
        breakpoints: {
          1400: {
            perView: 5
          },
          1200: {
            perView: 4
          },
          960: {
            perView: 3
          },
          722: {
            perView: 2
          },
          420: {
            perView: 1
          }        
        },
        controls: {
          type: 'carousel',
          // La configuración de los controles debe estar fuera del objeto breakpoints
          // De lo contrario, no se aplicará correctamente
          // Y no se necesita la configuración de slider.container aquí
        },
        classes: {
          // La clase activa debe especificarse aquí, fuera de los breakpoints
          activeNav: 'active',
        },
     // set a value to show the previous and next slides peeking in
     peek: {
      before: 20,
      after: 30
    },
    focusAt: 'center',  
  
      }).mount();
    }
  });


  document.addEventListener("DOMContentLoaded", function() {
    let glide2 = document.querySelector('.glide-carousel-inicio-mob');
  
    if (glide2) {
      new Glide(glide2, {
        type: "carousel",
        gap:0,
        perView: 6,
        breakpoints: {
         800: {
            perView: 5
          },
          680: {
            perView: 4
          },
          540: {
            perView: 3
          },
          422: {
            perView: 3
          },
          410: {
            perView: 2
          }
                       
        },
        controls: {
          type: 'carousel',
          // La configuración de los controles debe estar fuera del objeto breakpoints
          // De lo contrario, no se aplicará correctamente
          // Y no se necesita la configuración de slider.container aquí
        },
        classes: {
          // La clase activa debe especificarse aquí, fuera de los breakpoints
          activeNav: 'active',
        },
     // set a value to show the previous and next slides peeking in
     peek: {
      before: 20,
      after: 30
    },
    focusAt: 'center',  
  
      }).mount();
    }
  });


  document.addEventListener("DOMContentLoaded", function() {
    let glide3 = document.querySelector('.glide-carousel-inicioenlaces-mob');
  
    if (glide3) {
      new Glide(glide3, {
        type: "carousel",
        gap:4,
        perView: 6,
        breakpoints: {
         800: {
            perView: 4
          },
         768: {
            perView: 3
          },          
          680: {
            perView: 2
          },
          540: {
            perView: 2     
          },
          
          422: {
            perView: 1
          }, 
          400: {
            perView: 1
          }                         
        },
        controls: {
          type: 'carousel',
          // La configuración de los controles debe estar fuera del objeto breakpoints
          // De lo contrario, no se aplicará correctamente
          // Y no se necesita la configuración de slider.container aquí
        },
        classes: {
          // La clase activa debe especificarse aquí, fuera de los breakpoints
          activeNav: 'active',
        },
     // set a value to show the previous and next slides peeking in
     peek: {
      before: 20,
      after: 30
    },
    focusAt: 'center',  
  
      }).mount();
    }
  });
  

  //Activación de los tooltips en toda la web
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


//Banner hero de inicio

document.addEventListener("DOMContentLoaded", function() {
  const slider = document.getElementById("heroSlider");
  const slides = slider.querySelectorAll(".hero-slide");
  const prevBtn = document.getElementById("heroPrev");
  const nextBtn = document.getElementById("heroNext");
  const bulletsContainer = document.getElementById("heroBullets");

  let currentIndex = 0;

  // Crear bullets dinámicamente
  slides.forEach((_, i) => {
    const bullet = document.createElement("span");
    bullet.addEventListener("click", () => goToSlide(i));
    bulletsContainer.appendChild(bullet);
  });

  const bullets = bulletsContainer.querySelectorAll("span");

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    bullets.forEach(b => b.classList.remove("active"));
    bullets[currentIndex].classList.add("active");
  }

  function goToSlide(index) {
    currentIndex = index;
    updateSlider();
  }

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  });

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  });

  updateSlider(); // inicial
});


//Calugas Inicio Escritorio

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("slider-calugas");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  let currentPosition = 0;

  function maxScroll() {
    const wrapperWidth = slider.closest(".slider-wrapper").offsetWidth;
    return slider.scrollWidth - wrapperWidth;
  }

  function updateButtons() {
    prevBtn.disabled = currentPosition <= 0;
    nextBtn.disabled = currentPosition >= maxScroll();
  }

  function moveSlider(direction) {
    const wrapperWidth = slider.closest(".slider-wrapper").offsetWidth;

    // mover por “pantalla” completa
    currentPosition += direction * wrapperWidth;

    // limitar
    if (currentPosition < 0) currentPosition = 0;
    if (currentPosition > maxScroll()) currentPosition = maxScroll();

    slider.style.transform = `translateX(-${currentPosition}px)`;
    updateButtons();
  }

  prevBtn.addEventListener("click", () => moveSlider(-1));
  nextBtn.addEventListener("click", () => moveSlider(1));

  window.addEventListener("resize", () => {
    if (currentPosition > maxScroll()) currentPosition = maxScroll();
    slider.style.transform = `translateX(-${currentPosition}px)`;
    updateButtons();
  });

  updateButtons();
});



//Calugas Inicio Mobile

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("slider-calugas-mobile");
  const prevBtn = document.getElementById("prevBtnMobile");
  const nextBtn = document.getElementById("nextBtnMobile");

  const pages = slider.children.length;
  let currentPage = 0;

  // ⚡ Configura ancho del slider y flex de cada página dinámicamente
  slider.style.width = `${pages * 100}%`;
  Array.from(slider.children).forEach(page => {
    page.style.flex = `0 0 ${100 / pages}%`;
  });

  function updateSlider() {
    const wrapperWidth = slider.closest(".slider-wrapper-mobile").offsetWidth;
    slider.style.transform = `translateX(-${currentPage * wrapperWidth}px)`;

    // Actualiza estado de botones
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === pages - 1;

    prevBtn.setAttribute("aria-disabled", prevBtn.disabled);
    nextBtn.setAttribute("aria-disabled", nextBtn.disabled);
  }

  // Flechas
  prevBtn.addEventListener("click", () => {
    if (currentPage > 0) {
      currentPage--;
      updateSlider();
    }
  });

  nextBtn.addEventListener("click", () => {
    if (currentPage < pages - 1) {
      currentPage++;
      updateSlider();
    }
  });

  // Swipe táctil
  let startX = 0;
  slider.addEventListener("touchstart", e => startX = e.touches[0].clientX);
  slider.addEventListener("touchend", e => {
    const endX = e.changedTouches[0].clientX;
    const diff = endX - startX;

    if (diff > 50 && currentPage > 0) {
      currentPage--;
      updateSlider();
    } else if (diff < -50 && currentPage < pages - 1) {
      currentPage++;
      updateSlider();
    }
  });

  // Actualiza slider al cambiar tamaño
  window.addEventListener("resize", updateSlider);

  // Inicializa
  updateSlider();
});





//Calugas Enlaces institucionales Inicio Mobile

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("slider-calugas-mobile-ei");
  const prevBtn = document.getElementById("prevBtnMobile-ei");
  const nextBtn = document.getElementById("nextBtnMobile-ei");

  const pages = slider.children.length;
  let currentPage = 0;

  // ⚡ Configura ancho del slider y flex de cada página dinámicamente
  slider.style.width = `${pages * 100}%`;
  Array.from(slider.children).forEach(page => {
    page.style.flex = `0 0 ${100 / pages}%`;
  });

  function updateSlider() {
    const wrapperWidth = slider.closest(".slider-wrapper-mobile").offsetWidth;
    slider.style.transform = `translateX(-${currentPage * wrapperWidth}px)`;

    // Actualiza estado de botones
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === pages - 1;

    prevBtn.setAttribute("aria-disabled", prevBtn.disabled);
    nextBtn.setAttribute("aria-disabled", nextBtn.disabled);
  }

  // Flechas
  prevBtn.addEventListener("click", () => {
    if (currentPage > 0) {
      currentPage--;
      updateSlider();
    }
  });

  nextBtn.addEventListener("click", () => {
    if (currentPage < pages - 1) {
      currentPage++;
      updateSlider();
    }
  });

  // Swipe táctil
  let startX = 0;
  slider.addEventListener("touchstart", e => startX = e.touches[0].clientX);
  slider.addEventListener("touchend", e => {
    const endX = e.changedTouches[0].clientX;
    const diff = endX - startX;

    if (diff > 50 && currentPage > 0) {
      currentPage--;
      updateSlider();
    } else if (diff < -50 && currentPage < pages - 1) {
      currentPage++;
      updateSlider();
    }
  });

  // Actualiza slider al cambiar tamaño
  window.addEventListener("resize", updateSlider);

  // Inicializa
  updateSlider();
});


document.addEventListener('DOMContentLoaded', function () {
    const sidebarMenu = document.getElementById('sidebarMenu');
    if (!sidebarMenu) {
        return; // Salir si el menú no existe en la página actual
    }

    const menuLinks = sidebarMenu.querySelectorAll('.nav-link');
    const contentAreas = document.querySelectorAll('#mainContent .main-content-area');

    menuLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            // 1. Ocultar todas las áreas de contenido
            contentAreas.forEach(area => {
                area.style.display = 'none';
            });

            // 2. Quitar la clase 'active' de todos los enlaces del menú
            menuLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });

            // 3. Mostrar el contenido correcto y activar el enlace correspondiente
            const targetId = this.getAttribute('data-target');
            const targetContent = document.querySelector(targetId);
            if (targetContent) targetContent.style.display = 'block';
            this.classList.add('active');
        });
    });
});


document.querySelectorAll('.card-link').forEach(card => {
    card.addEventListener('click', function(e) {
        e.preventDefault();
        const target = this.dataset.target;

        // fade del nivel 1
        const menuNivel1 = document.getElementById('menu-nivel-1');
        menuNivel1.classList.add('fade-out');

        setTimeout(() => {
            menuNivel1.classList.add('d-none');
            menuNivel1.classList.remove('fade-out');

            // Oculta subniveles
            document.querySelectorAll('.subnivel').forEach(s => {
                s.classList.add('d-none');
                s.classList.remove('show');
            });

            // Muestra con animación
            const sub = document.getElementById(target);
            sub.classList.remove('d-none');
            setTimeout(() => sub.classList.add('show'), 10);

        }, 250); // tiempo para que termine el fade
    });
});

// Botón volver
document.querySelectorAll('.btn-volver').forEach(btn => {
    btn.addEventListener('click', () => {
        // Oculta todos
        document.querySelectorAll('.subnivel').forEach(s => {
            s.classList.remove('show');
            setTimeout(() => s.classList.add('d-none'), 300);
        });

        // Muestra el nivel 1 con fade-in suave
        const menuNivel1 = document.getElementById('menu-nivel-1');
        menuNivel1.classList.remove('d-none');
        setTimeout(() => menuNivel1.classList.remove('fade-out'), 10);
    });

document.addEventListener("DOMContentLoaded", () => {

  const overlay = document.getElementById("mobileMenu");

  document.querySelector(".btn-mobile-menu").addEventListener("click", () => {
    overlay.classList.add("active");
  });

  document.querySelector(".btn-close-menu").addEventListener("click", () => {
    overlay.classList.remove("active");
  });

  // Ir a pantallas internas
  document.querySelectorAll(".menu-item.depth").forEach(btn => {
    btn.addEventListener("click", () => {
      const target = btn.dataset.target;
      document.querySelectorAll(".menu-screen").forEach(sc => sc.classList.remove("active"));
      document.getElementById(target).classList.add("active");
    });
  });

  // Volver al menú principal
  document.querySelectorAll(".btn-back-main").forEach(btn => {
    btn.addEventListener("click", () => {
      document.querySelectorAll(".menu-screen").forEach(sc => sc.classList.remove("active"));
      document.getElementById("screen-main").classList.add("active");
    });
  });

  // Acordeones
  document.querySelectorAll(".acc-toggle").forEach(toggle => {
    toggle.addEventListener("click", () => {
      toggle.parentElement.classList.toggle("open");
    });
  });

});
 


//Funciones para modal de video postulacion
document.addEventListener('DOMContentLoaded', function () {

  const modalVideo = document.getElementById('modalVideoPostulacion');

  if (!modalVideo) return; // 👈 clave

  const video = modalVideo.querySelector('video');

  if (!video) return; // 👈 por si es iframe

  modalVideo.addEventListener('hidden.bs.modal', function () {
    video.pause();
    video.currentTime = 0;
  });

});

//Funciones para modal de video quienes somos
  const modalVideo = document.getElementById('modalVideoQuienes');

  if (!modalVideo) return; // 👈 clave

  const iframe = modalVideo.querySelector('iframe');
  const iframeSrc = iframe.src;

  modalVideo.addEventListener('hidden.bs.modal', () => {
    iframe.src = '';
    iframe.src = iframeSrc;
  });




document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("message", function (event) {
    // 👉 cuando funcione, cambia "*" por el dominio real
    // if (event.origin !== "https://sitio-iframe.cl") return;

    const iframe = document.getElementById("iframe-inicio");
    if (!iframe) return;

    if (event.data && event.data.height) {
      iframe.style.height = event.data.height + "px";
    }
  });
});



document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.track');
  const slides = document.querySelectorAll('.slide');
  const prev = document.querySelector('.prev');
  const next = document.querySelector('.next');

  let index = 0;

  function update() {
    track.style.transform = `translateX(-${index * 100}%)`;
    prev.disabled = index === 0;
    next.disabled = index === slides.length - 1;
  }

  prev.addEventListener('click', () => {
    index--;
    update();
  });

  next.addEventListener('click', () => {
    index++;
    update();
  });

  update();
});
 
 
 



 const carouselEl = document.getElementById('puntosCarousel');
  const carousel = new bootstrap.Carousel(carouselEl);
  const slides = carouselEl.querySelectorAll('.carousel-item');
  const total = slides.length;

  carouselEl.querySelectorAll('.slider-arrow.next').forEach(btn => {
    btn.addEventListener('click', () => carousel.next());
  });

  carouselEl.querySelectorAll('.slider-arrow.prev').forEach(btn => {
    btn.addEventListener('click', () => carousel.prev());
  });

  carouselEl.addEventListener('slid.bs.carousel', () => {
    const activeIndex = [...slides].findIndex(s => s.classList.contains('active')) + 1;

    carouselEl.querySelectorAll('.counter').forEach(c => {
      c.innerHTML = `<strong>${activeIndex}</strong> / ${total}`;
    });

    carouselEl.querySelectorAll('.slider-arrow.prev').forEach(b => {
      b.disabled = activeIndex === 1;
    });

    carouselEl.querySelectorAll('.slider-arrow.next').forEach(b => {
      b.disabled = activeIndex === total;
    });
  });







//buscador de header:
document.addEventListener('DOMContentLoaded', () => {
  const modalEl = document.getElementById('searchModal');
  if (!modalEl) return;

  const searchInput = document.getElementById('searchInput');
  const searchError = document.getElementById('searchError');
  const form = modalEl.querySelector('form');

  // Foco automático
modalEl.addEventListener('shown.bs.modal', () => {
  setTimeout(() => {
    searchInput.focus();
  }, 50);
});

  // Reset al cerrar
  modalEl.addEventListener('hidden.bs.modal', () => {
    form.reset();
    searchInput.classList.remove('is-error');
    searchError.hidden = true;
  });

  // Validación simple
  form.addEventListener('submit', (e) => {
    if (!searchInput.value.trim()) {
      e.preventDefault();
      searchInput.classList.add('is-error');
      searchError.hidden = false;
      searchInput.focus();
    }
  });
});


const myModal = document.getElementById('myModal')
const myInput = document.getElementById('searchInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})





document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('iframeModalCuestionario');
  const iframe = document.getElementById('iframeTool');
  const iframeURL = 'https://sctwidgets.qa.sercotec.cl/cuestionario';

  modal.addEventListener('show.bs.modal', function () {
    iframe.src = iframeURL;
  });

  modal.addEventListener('hidden.bs.modal', function () {
    iframe.src = '';
  });
});


const header = document.querySelector('.wp-header');

function setHeaderHeight() {
  document.body.style.paddingTop = `${header.offsetHeight}px`;
}

setHeaderHeight();
window.addEventListener('resize', setHeaderHeight);





});



