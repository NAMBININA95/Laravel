<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
	protected $table="tarification";
	protected $primaryKey="TAILLE";
	public $incrementing=false;
	protected $keyType="string";
	protected $fillable=[
		'TAILLE',
		'COEFFICIENT'
		];//'slug'
	public $timestamps=false;

	public function commande(){
		return $this->hasMany('App\Models\Livraison\Commande','ID_TARIF','TAILLE');
	}

}
