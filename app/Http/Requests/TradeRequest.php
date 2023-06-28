<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TradeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|integer|digits:4',
            'buy_sell' => 'required|string',
            'shares' => 'required|integer',
            'price' => 'required|numeric',
            'trading_date' => 'required|date',
            'credit_ratio' => 'required|numeric',
            'lender_ratio' => 'required|numeric',
            'memo' => 'required|string',
            'company_id' => 'required|numeric',
            'chart_img' => 'required|string',
            'per' => 'required|numeric',
            'pbr' => 'required|numeric',
        ];
    }
}
