<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuggestionRequest extends FormRequest
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

            'name' => 'required|regex:/^[A-Za-zñàèìòùÁÉÍÓÚ\s]+$/',
            'surname' => 'required|regex:/^[A-ZñàèìòùÁÉÍÓÚ\s]+$/i',
            'email' => 'required|email',
            'message' =>'required|regex:/^[A-Z0-9,.ñàèìòùÁÉÍÓÚ\s]+$/i'
        ];
    }
}
