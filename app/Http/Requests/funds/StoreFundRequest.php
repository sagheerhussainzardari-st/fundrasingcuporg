<?php

namespace App\Http\Requests\funds;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreFundRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('fund_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'category_id' => ['required','integer'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['sometimes','required'],
            'amount' => ['required'],
            'image' => ['sometimes','required', 'image' ,'mimes:jpg,jpeg,png'],
        ];
    }
}
