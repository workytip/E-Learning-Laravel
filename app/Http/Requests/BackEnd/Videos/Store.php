<?php

namespace App\Http\Requests\BackEnd\Videos;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'name' => ['required','min:6','max:100'],
            'meta_keywords' =>  ['required','max:100'],
            'meta_des' =>  ['required','min:6','max:100'],
            'youtube' =>  ['required','min:10','url'],
            'image' =>  ['required','image'],
            'publish' =>  ['required'],
            //    'user_id' =>  ['required','integer'],
            'cat_id' =>  ['required','integer'],
        ];
    }
}
