const navToggle = document.querySelector(".menu-icon");
const contentMenu = document.querySelector(".content-menu");
const MenuContainer = document.querySelector(".menu-container");

navToggle.addEventListener("click", () => {
    contentMenu.classList.toggle("nav-menu_visible");
});
/*
var menuIcon = document.getElementById("menu-icon");
*/
const menuIcon = document.querySelector(".menu-icon");
menuIcon.onclick = function(){
    menuIcon.classList.toggle("openmenu");
}

//Scroll//
const links = document.querySelectorAll(".content-menu a");
for (const link of links) {
  link.addEventListener("click", clickHandler);
}
function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;
  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}
