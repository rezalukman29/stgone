<?php

namespace App\Http\Requests\Absentdump;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Absentdump\Absentdump;

class CreateAbsentdumpRequest extends FormRequest
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
        return Absentdump::$rules;
    }
}
