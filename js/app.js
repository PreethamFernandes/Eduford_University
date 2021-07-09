let openMenu = document.getElementById("open");
let closeMenu = document.getElementById("close");
let navLinks = document.getElementById("nav-links");
let layer = document.getElementById("layer");

openMenu.addEventListener("click", () => {
    navLinks.style.right="0"
})

closeMenu.addEventListener("click", () => {
    navLinks.style.right="-200px"
})

