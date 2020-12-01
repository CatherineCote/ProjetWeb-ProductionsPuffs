/* Wow, tellement un beau spot pour écrire du JS */
const burger = document.querySelector(".burger");
const menu = document.querySelector(".menu");

burger.addEventListener("click", () => {
  if (menu.style.display == "none" && menu.style.opacity == "0") {
    gsap.to(".menu", 0.1, { display: "flex" });
    gsap.to(".menu", 1, { opacity: 0.8 });
  } else {
    gsap.to(".menu", 1, { opacity: 0 });
    gsap.to(".menu", 1.5, { display: "none" });
  }
});