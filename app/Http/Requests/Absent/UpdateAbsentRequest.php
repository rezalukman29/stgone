<?php

namespace App\Http\Requests\Absent;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Absent\Absent;

class UpdateAbsentRequest extends FormRequest
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
        return Absent::$rules;
    }
}
