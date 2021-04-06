<?php

namespace App\Http\Requests\TEACHER;

use Illuminate\Foundation\Http\FormRequest;

class ShortUrl extends FormRequest
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
            'link_origi'=>'required|max:150|url'
            //'link_origi'=>'required|max:150|url|unique:url_short'
        ];
    }
}
