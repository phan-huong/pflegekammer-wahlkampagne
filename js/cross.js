const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("menu");

menu.addEventListener("click", () => {
    hamburger.className = "cross";
    // hamburger.classList.toggle("cross");
})
