<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //
    protected $table="posts";
    protected $primaryKey="id";
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
}
