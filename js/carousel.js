const carousel = document.getElementById("carousel");
const prev = document.getElementById("prev");
const next = document.getElementById("next");

prev.addEventListener("click", () => {
    carousel.scrollLeft -= 350;
})

next.addEventListener("click", () => {
    carousel.scrollLeft += 350;
})