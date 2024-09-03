<!-- Подключение файла сборщика -->
@extends("layouts.app")

<!-- Основаня секция страницы -->
@section("main")
<!-- Высплывающие окно -->
<div id="overlay-pop-up" class="overlay-popup"></div>
<div class="popup" id="popup-content">
    <div class="popup-container">
    <div class="popup-text">
        <h2>АКЦИЯ МЕСЯЦА!</h2>
        <p>ФИТНЕС ВСЕГО ЗА 990 РУБЛЕЙ</p>
        <span>ПОТРЯСАЮЩАЯ АКВА-ЗОНА</span><br>
        <span>ПРЕМИАЛЬНЫЙ УРОВЕНЬ СЕРВИСА</span><br>
        <span>ФИТНЕС КЛУБ ДЛЯ ВСЕЙ СЕМЬИ</span><br>
    </div>

    <form action="" method="PST">
        @csrf

        <input type="text" name="name" placeholder="Имя"><br>
        <input type="text" name="phone" placeholder="Телефон"><br>

        <div class="alert success">
            <span></span>
        </div>

        <div class="alert error">
            <ul>
                <li></li>
            </ul>
        </div>  

        <button type="submit">ПОЛУЧИТЬ</button>
    </form>

    <div class="cross" id="popup-close">
        <svg id="popup-close" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512pt" height="512pt" viewBox="0 0 512 512" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0,512) scale(0.1,-0.1)" fill="white" stroke="none">
                <path d="M363 5106c-129-32-253-130-310-247-70-144-70-282 0-429 28-60 101-135 909-945l878-881v-44l-864-865c-475-476-877-885-893-910-190-286-23-670 317-731 92-16 183-3 282 42 72 32 90 50 953 911l881 878h44v45l865-864c476-475 887-878 913-896 185-124 441-98 596 60 159 162 185 412 61 597-18 26-421 437-896 913l-864 865v45l864 865c475 476 878 887 896 913 184 275 27 658-298 726-107 22-205 9-312-42-60-28-135-101-945-909l-881-878h-44v45l-881 878c-810 809-885 881-945 909-110 52-218 65-327 39z"/>
             </g>
        </svg>
    </div>
    </div>
</div>
@endsection