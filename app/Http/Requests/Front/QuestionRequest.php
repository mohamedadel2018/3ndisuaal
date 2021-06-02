<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'encyclopedia_cat_id' => ['required','exists:encyclopedia_cats,id'],
            'encyclopedia_sub_cat_id' => ['required','exists:encyclopedia_sub_cats,id'],
            'question' => ['required','string','max:300'],
            // 'email' => ['required','max:300'],
        ];
    }
}
