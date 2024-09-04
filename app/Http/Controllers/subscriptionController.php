<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Подключение сессий
use Illuminate\Support\Facades\Session;
// Подключение моделей
use App\Models\subscriptions;
// Подключение модулей
use App\Http\Requests\subscriptionRequest;

class subscriptionController extends Controller {
    // Функция обработки формы
    function subscriptionForm(subscriptionRequest $req) {
        // Подключение к БД
        $subscriptions = new subscriptions();

        // Занесение данных в таблицу
        $subscriptions->name = $req->input("name");
        $subscriptions->phone = $req->input("phone");

        // Сохранение данных
        $subscriptions->save();

        // Значение сессии
        Session::flash("success", "Рады видеть вас в наших рядах! Ожидайте звонка");

        // Передача значений в шаблон
        return view("main");
    }
}
