let navbar = document.querySelector(".header .navegacion");
let iconos = document.querySelector(".iconos");

document.querySelector("#btn-menu").onclick = () => {
  navbar.classList.add("activo");
  iconos.classList.add("oculto");
};

document.querySelector("#cerrar-nav").onclick = () => {
  navbar.classList.remove("activo");
  iconos.classList.remove("oculto");
};

let buscador = document.querySelector(".buscador");

document.querySelector("#btn-buscar").onclick = () => {
  buscador.classList.add("activo");
  iconos.classList.add("oculto");
};

document.querySelector("#cerrar-buscador").onclick = () => {
  buscador.classList.remove("activo");
  iconos.classList.remove("oculto");
};

window.onscroll = () => {
  navbar.classList.remove("activo");

  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("activo");
  } else {
    document.querySelector(".header").classList.remove("activo");
  }
};

window.onload = () => {
  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("activo");
  } else {
    document.querySelector(".header").classList.remove("activo");
  }
};

// Sliders

var swiper = new Swiper(".slider-inicio", {
  loop : true,
  grabCursor : true,
  navigation : {
    nextEl : ".swiper-button-next",
    prevEl : ".swiper-button-prev",
  },
});

var swiper = new Swiper(".slider-productos", {
  loop : true,
  grabCursor : true,
  spaceBetween : 20,
  navigation : {
    nextEl : ".swiper-button-next",
    prevEl : ".swiper-button-prev",
  },
  breakpoints : {
    0 : {
      slidesPerView : 1,
    },
    640 : {
      slidesPerView : 2,
    },
    768 : {
      slidesPerView : 3,
    },
    1024 : {
      slidesPerView : 4,
    },
  },
});

var swiper = new Swiper(".slider-experiencias", {
  loop : true,
  grabCursor : true,
  spaceBetween : 20,
  navigation : {
    nextEl : ".swiper-button-next",
    prevEl : ".swiper-button-prev",
  },
  breakpoints : {
    0 : {
      slidesPerView : 1,
    },
    640 : {
      slidesPerView : 2,
    },
    768 : {
      slidesPerView : 3,
    },
  },
});
