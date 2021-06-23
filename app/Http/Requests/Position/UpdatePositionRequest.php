<?php

namespace App\Http\Requests\Position;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Position\Position;

class UpdatePositionRequest extends FormRequest
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
        return Position::$rules;
    }
}
