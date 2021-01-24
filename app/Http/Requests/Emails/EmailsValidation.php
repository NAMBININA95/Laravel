<?php

namespace App\Http\Requests\Emails;

use Illuminate\Foundation\Http\FormRequest;

class EmailsValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
     * Pour effectuer nos validation dans un formalaire ou bien autres
     * il faut ecrire un request pour structurer vos projets sur Laravel
     */
    public function authorize()
    {
        /**
         * Par défaut c'est false dont vous devez mettre à true sinon vos validation
         * ne fonctionnera jamais
         */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /**
         * ATTENTION : Lorsque vous utilisez le validation 
         * n'oublie pas de mettre le même name dans l'input sur nom de colonne 
         * de vos tables sinon ça fonctionnera pas vos validation sur formulaire
         * dont abonnement: le nom de la table et emails : le champs dans la table
         */
        return [
            //c'est ici que nous écrivons nos validation
            'emails'=>'required|email|unique:abonnement'
        ];
    }
}
