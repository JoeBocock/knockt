<?php

namespace App\Http\Requests\Row;

use Illuminate\Foundation\Http\FormRequest;

class IndexRowsRequest extends FormRequest
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
            'machine_id' => 'required|integer|exists:machines,id',
        ];
    }
}
