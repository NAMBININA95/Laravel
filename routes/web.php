<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use App\Models\abonnement\Abonner;
//use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('layout/layout');
});*/

Route::get('/', 'HomeController@index');


/*apprendre à ajouter des variable dans html*/
Route::get('/hello', function () {
    $nom='Georges';
    $prenom='Nambinina';
    return view('pages/hello_world')->with('nom',$nom)->with('prenom',$prenom);
});// première méthode pour ajouter des variables dans html

Route::get('/help', function () {
    $nom='Georges';
    $prenom='Nambinina';
    return view('pages/hello_world')->with([
        'nom'=>$nom,
        'prenom'=>$prenom
    ]);
});// deuxième méthode pour ajouter des variables dans html

Route::get('/about', function () {
   $data=[
      'nom'=>'Georges',
      'prenom'=>'Nambinina'
   ];
    return view('pages/hello_world',$data);
});// troisième méthode pour ajouter des variables dans html


/**
*
 ************C'est ici que je vais ecrire mes routes sur l'abonnement*/


Route::get('abonnement-emails','WEB\Abonnement\AbonnementController@getFormulaire')->name('formulaire_abonner_get');
Route::post('abonnement-emails','WEB\Abonnement\AbonnementController@postFormulaire4')->name('formulaire_abonner_post');

Route::post('abonnement-emails-ok',function(){
    /**
     * Ceci est un teste 
     */
    $emaiils=new Abonner();//Appel de nos model
    $emaiils->emails='ali78aaa@aa.fr';/* =$emails_requests->input('emailles'); */
    return $emaiils->save();
});
/* Route::get('abonnement-emails-valider',[
                                            'uses'=>'WEB\Abonnement\AbonnementController@postFormulaire',
                                            'as'=>'formulaire_abonner_post'
                                        ]); */
//FIN DE ROUTE DE L'ABONNEMENT


/**
 * API sur laravel
 */

Route::resource('users-teste', 'API\UserController');
Route::resource('post', 'API\PostsController',['except'=>['show','edit','update'/* ,'create','store' */]]);
Route::get('post/tag/{tag}','PostsController@indexTag')->name('recherche');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


/*
 * Simulation pour faire des testes direct sur le route*/

Route::get('/manyTomany', function () {

    $user = \App\Models\API\PostModel::find(10);
    $user2 = \App\Models\API\PostModel::select(' select * ');
//    $user = \App\Models\API\PostModel::find(10);
//
//    $user->roles()->sync([
//        1 => [
//            'name' =>'victor'
//        ]
//    ]);

   foreach ($user->tags as $role) {
        echo $role;
//        dd($role);
    }

//    dd($user->tags->first()->pivot->created_at);

});


/***
-----------------------------------------------------------
 ----------------------------------------------------------
 ----------------------------------------------------------
 ---------------------------------------------------------
 ---------------------TEACHER DU NET ----------------------
 ************/

Route::get('/service-injection', function () {
    return view('TEACHER.pages.service_injection');
});#route pour apprendre la service d'injection


/***
-----------------------------------------------------------
----------------------------------------------------------
----------------------------------------------------------
---------------------------------------------------------
---------------------FIN DE ROUTE TEACHER DU NET ----------------------
 ************/
