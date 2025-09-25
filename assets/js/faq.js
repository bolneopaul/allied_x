document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll(".faq-item h3").forEach(item => {
    item.addEventListener("click", () => {
      item.nextElementSibling.classList.toggle("open");
    });
  });
});
