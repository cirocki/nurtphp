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
  });


    // EXPAND Q&A FUNCTION
    // const items = document.querySelectorAll('.faq-section .item')
    
    // if(items.length > 0) {
    //   items.forEach(item => {
    //     let expandToggler = item.querySelector(".expand-toggler");
    //     let contentToExpand = item.querySelector(".content-to-expand");

    //     expandToggler.addEventListener("click", () => {
    //       if (contentToExpand.classList.contains("is-open")) {
    //         contentToExpand.removeAttribute("style");
    //         contentToExpand.classList.remove("is-open");
    //       } else {
    //         contentToExpand.style.height = contentToExpand.scrollHeight + "px";
    //         contentToExpand.classList.add("is-open");
    //       }
    //     });
    //   })
    // }
  
    // END EXPAND FUNCTION


    // MODALS 
    const openModalButtons = document.querySelectorAll(".open-modal");
    const modalWindow = document.querySelector(".modal");
    // const pageContent = document.querySelector(".page-content");
    const modalClosers = document.querySelectorAll(".close-modal");
  
    const openModalFunction = () => {
      if (modalWindow) {
        modalWindow.classList.add("is-open");
        // pageContent.classList.add("blurred");
      }
    };
    const closeModalFunction = () => {
      if (modalWindow && modalWindow.classList.contains("is-open")) {
        modalWindow.classList.remove("is-open");
        // pageContent.classList.remove("blurred");
      }
    };
  
    //   OPEN MODAL FUNCTION ON BUTTON CLICK
    if (openModalButtons) {
      openModalButtons.forEach(btn => {

        btn.addEventListener("click", (e) => {
          const parentItem = e.target.closest('.item-content')
          const question = parentItem.querySelector('.question p').innerHTML
          const answer = parentItem.querySelector('.answer p').innerHTML
          modalWindow.querySelector('.modal-question').textContent = question
          modalWindow.querySelector('.modal-answer').textContent = answer
          openModalFunction();
        });
      })
    }
  
    //   CLOSE MODAL FUNCTION ON CLOSER ITEM CLICK
    modalClosers.forEach((element) => {
      element.addEventListener("click", () => {
        closeModalFunction();
      });
    });
  
    //   CLOSE MODAL FUNCTION ON 'ESCAPE' KEY
    document.onkeyup = function (event) {
      if (event.keyCode === 27) {
        closeModalFunction();
      }
    };
  
    //   CLOSE MODAL FUNCTION ON CLICK OUTSIDE MODAL CONTENT
    modalWindow.addEventListener("click", function (event) {
      const isInside = event.target.closest(".modal__content");
      if (!isInside) {
        closeModalFunction();
      }
    });
    // MODALS END 

});

