// // Выборка значений
// var popup_btn = document.querySelectorAll(".popup--btn");
// var popup_content = document.getElementById("popup-content");
// var popup_close_btn = document.getElementById("popup-close");
// var popup_overlay = document.getElementById("overlay-popup");

// // // Обработчик событий при клике (открытие)
// popup_btn.addEventListener("click", function() {
//     popup_content.classList.toggle("active");
//     popup_overlay.classList.add("active");
// });

// // Обработчик событий при клике (закрытие)
// popup_close_btn.addEventListener("click", function() {
//     popup_content.classList.toggle("active");
//     popup_overlay.classList.remove("active");
// });

const overlay = document.querySelector('.overlay-popup');
const popup_dropdown = document.getElementById('popup-content');
const toggleButtons = document.querySelectorAll('.popup--btn');
const btnClose = document.getElementById("popup-close");

// Функция для открытия модального окна
const openPopup = () => {
    overlay.classList.add('active');
    popup_dropdown.classList.add('active');
};

// Функция для закрытия модального окна
const closePopup = () => {
    overlay.classList.remove('active');
    popup_dropdown.classList.remove('active');
};

// Добавляем обработчик события для всех кнопок
toggleButtons.forEach(button => {
    button.addEventListener('click', openPopup);
});

// Добавляем обработчик события для кнопки закрытия
btnClose.addEventListener('click', closePopup);

// Также можно закрывать модальное окно при клике вне его
overlay.addEventListener('click', closePopup);
;

