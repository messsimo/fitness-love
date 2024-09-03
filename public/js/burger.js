// Выборка элементов
var button_open_burger = document.getElementById("burger-icon");
var button_close_burger = document.getElementById("close-icon");
var dropdown_burger = document.getElementById("burger-dropdown");
var overlay_burher = document.getElementById("overlay");

// Обработчик событий при клике (открытие)
button_open_burger.addEventListener("click", function() {
    dropdown_burger.classList.toggle("active");
    overlay.classList.add("active");
});

// Обработчик событий при клике (закрытие)
button_close_burger.addEventListener("click", function() {
    dropdown_burger.classList.toggle("active");
    overlay.classList.remove("active");
});
