<?php

namespace App\Http\Requests\Row;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRowRequest extends FormRequest
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
            'name' => 'required|max:255',
            'machine_id' => 'required|integer|exists:machines,id',
        ];
    }
}
