<?php

namespace App\Http\Controllers\WEB\Abonnement;

use App\Models\abonnement\Abonner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Emails\EmailsValidation;
use App\Repositories\abonnement\AbonnementRepositories;
use App\Repositories\abonnement\AbonnerRepositoriesInterface;

/**
 * Astuces : 
 *          -Votre code n'est pas facile à maintenir si vous instancier vos modèle directement
 *          dans le controleur dont il est préferable de l'injecter dans le paramètre de chaque 
 *          méthode que utiliser comme celui de Request exemple : 
 *                  -public function allo (EmailModel $model, Request $request){
 *                                 $model-> non $model()->
 *                                  $request-> non Request() ==> ceci fonctionne lorsque vous l'injecter pas dans le paramètre
 *
 *                      }
 *          -Utiliser le design pattern repositories : 
 *               -creer une interface et l'heriter dans une classe avant de l'injecter dans un controlleur 
 * 
 *          -Vous pouvez inverser aussi le mode de fonctionnnement : 
 *              -au lieu d'injecter la classe on inject l'interface et il sait quel class qu'il doit instancier dont vous devez configurer dans 
 *              app/http/providers/appserviceprovider dans le méthode register(){
 *                                                                                    $this->app->bind(
 *                                                                                          'app/repositories/abonnerRepositoriesInterface',
 *                                                                                          'app/repositories/abonnerRepositoriesInterface'
 *                                                                                             
 *                                                                                     );
 *                                                                                  }
 */
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
   
    public function postFormulaire2(EmailsValidation $emails_requests, Abonner $abonner_models){
        /**
         *Refoctoring de code pour les modèles c'est pas encore parfaits 
         */
        $abonner_models->emails=$emails_requests->input('emails'); 
        $abonner_models->save();
        return view('abonnement/formulaire_envoyer');
    }
    public function postFormulaire3(EmailsValidation $emails_requests, AbonnementRepositories $emailsRepo){
        /**
         *Refoctoring de code pour les modèles c'est recommander 
         */
        $emailsRepo->save($emails_requests->input('emails'));   
        return view('abonnement/formulaire_envoyer');
    }
    public function postFormulaire4(EmailsValidation $emails_requests, AbonnerRepositoriesInterface $emailsRepoInter){
        /**
         *Refoctoring de code pour les modèles c'est plus recommander et plus utiliser
         */
        $emailsRepoInter->save($emails_requests->input('emails'));   
        return view('abonnement/formulaire_envoyer');
    }

}
