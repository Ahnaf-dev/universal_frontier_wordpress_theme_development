
// mobile hamburger menu
const hamburger = document.querySelector(".hamburger");
const header = document.querySelector("header");

hamburger.addEventListener("click", () => {
  header.classList.toggle("toggle-nav");
  hamburger.getAttribute("aria-expanded") === "false"
    ? hamburger.setAttribute("aria-expanded", true)
    : hamburger.setAttribute("aria-expanded", false);
});



// tab functionality
const tabLinks = document.querySelectorAll(".tab-link");
const tabContents = document.querySelectorAll(".tab-content");

tabLinks.forEach(link => {
    link.addEventListener("click", () => {
        const tabId = link.getAttribute("aria-controls");

        tabLinks.forEach(tabLink => {
            tabLink.setAttribute("aria-selected", "false");
            tabLink.classList.remove("active");
        });

        link.setAttribute("aria-selected", "true");
        link.classList.add("active");

        tabContents.forEach(content => {
            if (content.id === tabId) {
                content.classList.add("active");
                content.setAttribute("tabindex", "0");
                content.focus();
            } else {
                content.classList.remove("active");
                content.setAttribute("tabindex", "-1");
            }
        });
    });
});