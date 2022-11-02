// GSAP CHEATSHEET
// https://greensock.com/cheatsheet/

window.addEventListener("DOMContentLoaded", (e) => {
  console.log("DOM loaded.");

  // MOBILE MENU TOGGLE
  const navbarToggler = document.getElementById("navbar-toggler");
  const menuWrapper = document.getElementsByClassName("menu-wrapper");
  navbarToggler.addEventListener("click", () => {
    navbarToggler.classList.toggle("js-is-active");
    menuWrapper[0].classList.toggle("js-is-open");
    console.log("click");
  });


});