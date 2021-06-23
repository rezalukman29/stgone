<?php

namespace App\Http\Requests\Suratcuti;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Suratcuti\Suratcuti;

class CreateSuratcutiRequest extends FormRequest
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
        return Suratcuti::$rules;
    }
}
