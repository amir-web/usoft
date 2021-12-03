<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'title_ru' => 'required',
            'title_uz' => 'required',
            'tab1_ru' => 'required',
            'tab1_uz' => 'required',
            'tab2_ru' => 'required',
            'tab2_uz' => 'required',
            'tab3_ru' => 'required',
            'tab3_uz' => 'required',
            'link' => 'required',
        ];
    }
}
