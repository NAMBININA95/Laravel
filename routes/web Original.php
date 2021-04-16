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


//use App\Models\TEACHER\Url_Short;
//use App\Http\Requests\TEACHER\ShortUrl;
use App\Http\Requests\TEACHER\UrlShort;
use Illuminate\Support\Facades\Route;

//event brote resource teacher
Route::get('/', 'TEACHER\EventBrote@index')->name('accueil');
Route::resource('/event-brote','TEACHER\EventBrote');
Route::resource('/urlshort','TEACHER\UrlShort');








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
//Route::get('post/tag/{tag}','PostsController@indexTag')->name('recherche');
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

Route::get('/requete-database', function () {

    /*
     * La difference entre alias DB et Elequent ORM c'est :
     *  Eloquent retourne les données en collections
     *  DB retoune les données en array*/

    $query=DB::select('select * from users');
    $queryQueryBuilder=DB::table('users')->get();
//    dd($query);
    dump($query);
    dump($queryQueryBuilder);

//    Maintenant je vais appeller le model avec le query Builder DB:: et ses classe static

    $articles= App\Models\TEACHER\articles::find(10);
    dump($articles);
});#route pour faire la simulation d'un requete de based de données

Route::get('afficher-articles',function (){
//    $articles=App\Models\TEACHER\articles::all();
    $articles=App\Models\TEACHER\articles::limit(6)->get();
    return view("TEACHER.pages.affichage")->withArticles($articles);
});
Route::get('afficher-articles2',function (){
    $e= App\Models\TEACHER\articles::first();
    $e->titre="Allo c'est un titre modifier par Georges";
    $e->save();
    return App\Models\TEACHER\articles::first();

});


//---------------DEBUT RACCOURCIR LES URLS DES SITES ----------------
//Shotcut link by my teacher
Route::get('/shortcut-website','TEACHER\ShotUrl@create');
Route::post('/shortcut-website','TEACHER\ShotUrl@store');
Route::get('/{shortcut}','TEACHER\ShotUrl@show');
//------------------------
Route::resource('/urlshort','TEACHER\UrlShort');
/*Route::resource('/urlshort','TEACHER\UrlShort')->names([
    'show'=>'Aboaho',
    'create'=>'Lelereny'
]);*/



//Application pour Event Brote avec nos teachers
//Route::resource('event-brote','TEACHER\EventBrote');





//---------------FIN DE RACCOURCIR LES URLS DES SITES ----------------



/***
-----------------------------------------------------------
----------------------------------------------------------
----------------------------------------------------------
---------------------------------------------------------
---------------------FIN DE ROUTE TEACHER DU NET ----------------------
 ************/
