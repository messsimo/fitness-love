<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <title>FitnessLove | Фитнес клуб с бассейном </title>
</head>
<body>
    @include("blocks.header")

    <!-- Подключение секций -->
    @yield("main")

    <!-- Подключение JS -->
    <script src="{{ asset('js/burger.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
</body>
</html>