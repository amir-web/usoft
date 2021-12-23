<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WebDevelopmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title.ru' => 'required',
            'title.uz' => 'required',
            'description.ru' => 'required',
            'description.uz' => 'required',
            //'image' => 'required|mimes:jpg,jpeg,png,svg'
        ];
    }
}
