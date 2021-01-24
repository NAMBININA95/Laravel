<?php

namespace App\Models\abonnement;

use Illuminate\Database\Eloquent\Model;

class Abonner extends Model
{
    //
    /**
    @author : Georges
     Sur Eloquent ORM , il prend en compte automatiquement le champ created_at et updated_at
     d'où si vous ne desactivez vous aurez des erreurs lors de non complétions de ces champs
     pour la desactiver :  public $timestamps=false; */
    public $table='abonnement';// variable à utiliser pour indiquer la table dans la base de données
    public $timestamps=false;
    public $fillable=['emails'];
}//fin de la classe Abonner
