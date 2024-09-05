<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <title>FitnessLove | Фитнес клуб с бассейном </title>
</head>
<body>
    <!-- Подключение шапки сайта -->
    @include("blocks.header")

    <!-- Подключение секций -->
    @yield("main")

    <!-- Подключение футера сайта -->
    @include("blocks.footer")

    <!-- Подключение JS -->
    <script src="{{ asset('js/burger.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
</body>
</html>