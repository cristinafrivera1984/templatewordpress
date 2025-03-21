


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
