<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class subscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:2|max:18",
            "phone" => "required|min:9|max:9"
        ];
    }

    public function messages() {
        return [
            "name.required" => "Введите свое имя",
            "name.min" => "Имя должно быть от 2-х символов",
            "name.max" => "Имя должно до 18 символов",
            "phone.required" => "Введите ваш номер телефон",
            "phone.min" => "Телефон должен состоять из 9 цифр",
            "phone.max" => "Телефон должен состоять из 9 цифр"
        ];
    }
}