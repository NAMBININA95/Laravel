<?php

namespace App\Http\Controllers\WEB\Abonnement;

use App\Models\abonnement\Abonner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Emails\EmailsValidation;


class AbonnementController extends Controller
{
    //
  
    public function getFormulaire(){
            return view('abonnement/formulaire');
    }

    public function postFormulaire(EmailsValidation $emails_requests){
        /**
         * Toute requete effectuer dans un formulaire devrait utiliser Request()->filter_input
         * ou ajouter Request $request dans le paramètre et l'appeler $request->input('teste')
         */
        $emaiils=new Abonner();//Appel de nos model
        /* $emaiils->emails=Request()->input('emailles');  */
        $emaiils->emails=$emails_requests->input('emails'); 
        $emaiils->save();
        return view('abonnement/formulaire_envoyer');
    }

}
