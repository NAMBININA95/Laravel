<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    //
	protected $table="ville";
	protected $primaryKey="ID";
	protected $fillable=[
		'VILLE'];//'slug'
	public $timestamps=false;

	public $incrementing=true;

	public function commandes(){
		return $this->hasMany('App\Models\Livraison\Commande','ID_VILLE','ID');
	}

}
