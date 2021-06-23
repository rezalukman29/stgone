<?php

namespace App\Http\Requests\Aset;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Aset\Aset;

class UpdateAsetRequest extends FormRequest
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
        return Aset::$rules;
    }
}
