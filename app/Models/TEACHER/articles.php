<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //
    /*
     * Les accesseur get et les mutateurs set de Laravel sont bien définit en utilisant :
     *      -getTitreAttribute($value) ---> n'oublie jamais de mettre l'Attribute à la fin sinon Laravel ne le reconnait pas
     *      -setTitreAttribute
     * L'un de puissance de laravel nous pourrons créer des attributes virtuel comme :
     *      -getFakeTitreAttribute() -----> fake_titre
     *
     * Pour afficher ou ajouter les champs virtuels dans nos json sans y  toucher à la base de données
     *      -on utilise protected $appends=['']
     * */

    protected $table="posts";
    protected $hidden=[];//Pour masquer les champs
    protected $primaryKey="id";
    protected $appends=['fake_titre'];
    protected $guarded="id"; //celui ci est contraire de fillable dont on peut pas modifier l'id de nos tables
    protected $fillable=['titre','contenu','user_id'];
    protected $casts=[
        'user_id'=>'integer'
    ]; //Par défaut , les contenues de base de  données sont de types string dont il faut faire des casting pour les chiffre oou date de types Carbonne donc il faut aller voir la documentation
    public $timestamps=false;
    protected $dates=['created_at']; //herite de la type Carbon pour éviter de réecrir new DateTime afin de changer plus facilement les format de date et heures

    public function isPair(){
        if($this->user_id%2==0){
            return true ;
        }else{
            return false;
        }
//        $this->user_id%2==0;
    }
    public function getTitreAttribute($value){//dans le vue sous titre
        return $value.' Cours Laravel 5.8';
    }
    public function getFakeTitreAttribute(){//ceci est un champs virtuel que nous allons appelé dans le titre sous fake_titre
        /*
         * $this->attributes['']===>permet de specifier l'accès des champs dans nos tables
         * les champs virtuels sont très utiles lorsque vous utiliser des calculs total qui ne devrait enregistrer dans
         * un tables*/
        return $this->attributes['titre'].' Ceci est un fake titre';
    }

    public function setTitreAttribute($value){//c'est le mutateur
        return $this->attributes['titre']=strtoupper($value);
    }


}
