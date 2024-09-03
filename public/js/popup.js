// Выборка значений
var popup_btn = document.getElementById("popup");
var popup_content = document.getElementById("popup-content");
var popup_close_btn = document.getElementById("popup-close");
var popup_overlay = document.getElementById("overlay-popup");

// // Обработчик событий при клике (открытие)
popup_btn.addEventListener("click", function() {
    popup_content.classList.toggle("active");
    popup_overlay.classList.add("active");
});

// Обработчик событий при клике (закрытие)
popup_close_btn.addEventListener("click", function() {
    popup_content.classList.toggle("active");
    popup_overlay.classList.remove("active");
});