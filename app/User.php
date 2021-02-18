<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        # code...
        /**
         * Pour relier à la table articles  post 
         * 
         */
        return $this->hasMany('App\Modes\API\PostModel');
    }

   
   //Ceci est inutile lorsque vous utiliser auth sur laravel dont vous aurez un erreur 
   //These credentials do not match our records. lors de l'authentification  
  /*  public function setPasswordAttribute($password){
        $this->attributes['password']=bcrypt($password);
    } */
}
