<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuboUpdateRequest extends FormRequest
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
            'T' => 'required|integer|max:1',
            'N' => 'required|integer|max:4',
            'M' => 'required|integer|max:5',
            'W' => 'required|integer|min:-100000000|max:100000000',
            'V1' => 'required|integer|max:4',
        ];
    }
}
