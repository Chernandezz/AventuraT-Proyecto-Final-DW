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
};

var swiper = new Swiper(".slider-inicio", {
  loop: true,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
