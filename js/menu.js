const menuBtn = document.querySelector("#menu");
const navLinks = document.querySelector("#toggle");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});
