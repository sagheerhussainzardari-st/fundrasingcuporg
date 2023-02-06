<?php

namespace App\Http\Requests\donations;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonationRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'amount' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string'],
            'zipcode' => ['required', 'integer'],
            'description' => ['required', 'string'],
            /*'card_name' => ['required', 'string'],
            'card_number' => ['required','integer','min:16','max:16'],
            'card_cvc' => ['required', 'integer'],
            'card_month' => ['required','integer'],
            'card_year' => ['required','integer'],*/
        ];
    }
}
