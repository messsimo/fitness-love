<?php

use Illuminate\Support\Facades\Route;
// Подключение контроллеров
use App\Http\Controllers\subscriptionController;

Route::get('/', function () {
    return view('main');
});

// Обработка формы покупки абонемента
Route::post("/subscription", [subscriptionController::class, "subscriptionForm"])->name("subscriptionForm");