console.log("hamburger.js");

const header = document.querySelector("header");
const overlay = document.querySelector("#overlay");
const mainNav = document.querySelector("nav#main-nav");
const navToggle = document.querySelector("nav#main-nav .toggle");

navToggle.addEventListener("click", () => {
  setTimeout(function () {
    mainNav.classList.toggle("is-active");
  }, 100);

  if (!overlay.classList.contains("is-active")) {
    overlay.classList.add("is-active");
    header.classList.add("is-active");
  } else {
    overlay.classList.remove("is-active");
    header.classList.remove("is-active");
  }
});

overlay.addEventListener("click", () => {
  if (mainNav.classList.contains("is-active")) {
    mainNav.classList.remove("is-active");
    overlay.classList.remove("is-active");
    header.classList.remove("is-active");
  }
});