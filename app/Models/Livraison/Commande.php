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
		'ID_USERS',
		'DATECOMMANDE',
		'LATITUDE',
		'LONGITUDE',
		'ADRESSEONE',//'slug'
		'RETARD',//'slug'
		'ADRESSETWO'];//'slug'
	public $timestamps=false;
	protected $dates=['DATECOMMANDE'];

	public function user(){
		return $this->belongsTo('App\User','ID_USERS','id');
	}

	public function pizza(){
		return $this->belongsTo('App\Models\Livraison\Pizza','ID_PIZZA','NOMPIZZA');
	}
	public function vehicule(){
		return $this->belongsTo('App\Models\Livraison\Vehicule','ID_VEHICULE','IMMATRICULATION');
	}


	public function tarif(){
		return $this->belongsTo('App\Models\Livraison\Tarification','ID_TARIF','TAILLE');
	}
	public function pays(){
		return $this->belongsTo('App\Models\Livraison\Pays','ID_PAYS','ID');

	}

	public function ville(){
		return $this->belongsTo('App\Models\Livraison\Ville','ID_VILLE','ID');
	}


}
