<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
        $id=$this->user;
        return [
            //
            'name'=>'required|max:255|unique:users,name,'.$id,
            'email'=>'required|email|max:255|unique:users,email,'.$id//unique:table,column,except,id
            
        ];
    }
}
