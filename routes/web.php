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


Route::get('/', function () {
    return view('welcome');
});


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/',function(){

	$projet="Livraison Pizza";
	$author="Georges Nambinina";
	return view('welcome',compact('projet','author'));

})->name('path_home');

Route::get('/teste-foreignkey',function(){

	$role=App\User::findOrFail(2);//Pour voir les roles
	$user2=App\Models\Livraison\Role::findOrFail(3);

	$user=DB::select('
		select users_perso.name as anarana, r.ROLE from users_perso,role r where ID_ROLE=r.ID
		');
	//$user=App\Models\Livraison\Role::findOrFail(3);//Pour voir tout ce qui utilise ce role

	return view('Livraison.index',compact('role','user','user2'));

})->name('teste_path');


