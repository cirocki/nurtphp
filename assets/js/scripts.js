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


    // EXPAND FUNCTION
    const expandToggler = document.querySelector(".expand-toggler");
    const contentToExpand = document.querySelector(".content-to-expand");
  
    expandToggler.addEventListener("click", () => {
      if (contentToExpand.classList.contains("is-open")) {
        contentToExpand.removeAttribute("style");
        contentToExpand.classList.remove("is-open");

      } else {
        contentToExpand.style.height = contentToExpand.scrollHeight + "px";
        contentToExpand.classList.add("is-open");
     
      }
    });
    // END EXPAND FUNCTION

});