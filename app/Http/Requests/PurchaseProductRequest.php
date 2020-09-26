<?php

namespace App\Http\Requests;

use App\Common\API\KnocktFormRequest;

class PurchaseProductRequest extends KnocktFormRequest
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
            'slot_id' => 'required|integer|exists:slots,id',
            'price' => 'required|integer|min:0|max:99999',
        ];
    }
}
