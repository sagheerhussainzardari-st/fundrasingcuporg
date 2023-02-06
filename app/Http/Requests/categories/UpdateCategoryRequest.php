<?php

namespace App\Http\Requests\categories;

use Illuminate\Foundation\Http\FormRequest;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class updateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('category_edit'),Response::HTTP_FORBIDDEN, '403 Forbidden');
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
            'name' => ['required'],
            'image' => ['sometimes','required','image','mimes:jpg,jpeg,png'],
            'heading' => ['required'],
            'description' => ['required'],
            'section_heading1' => ['required'],
            'section_left_text1' => ['required'],
            'section_left_text2' => ['required'],
            'section_right_text1' => ['required'],
            'section_right_text2' => ['required'],
        ];
    }
}
