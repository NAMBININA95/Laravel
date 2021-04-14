<?php

namespace App\Http\Requests\TEACHER;

use Illuminate\Foundation\Http\FormRequest;

class EventBrote extends FormRequest
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
		  'titre'=>'required|min:3',
		  'titre'=>'required',
		  'lieu'=>'required',
		  'description'=>'required',
		  'date_event'=>'required',
		  'time_event'=>'required'
        ];
    }

    public function messages()
    {
	    //return parent::messages(); // TODO: Change the autogenerated stub

	    return [
	    	'titre.required'=>'Teste message customiser'
	    ];
    }
}
