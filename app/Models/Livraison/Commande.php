<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //

	protected $table="commande";
	protected $primaryKey="NUMCOMMANDE";
	public $incrementing=false;
	protected $keyType="string";
	protected $fillable=[
		'NUMCOMMANDE',
		'ID_TARIF',
		'ID_PAYS',
		'ID_PIZZA',
		'ID_VEHICULE',
		'ID_VILLE',
		'DATECOMMANDE',
		'LATITUDE',
		'LONGITUDE',
		'ADRESSEONE',//'slug'
		'RETARD',//'slug'
		'ADRESSETWO'];//'slug'
	public $timestamps=false;
	protected $dates=['DATECOMMANDE'];
}
