<?php

namespace App\Http\Requests\Expense;

use App\Abstracts\Http\FormRequest;

class BillTotal extends FormRequest
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
            'bill_id' => 'required|integer',
            'name' => 'required|string',
            'amount' => 'required|amount',
            'sort_order' => 'required|integer',
        ];
    }
}
