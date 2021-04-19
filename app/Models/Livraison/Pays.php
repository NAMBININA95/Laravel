<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
	protected $table="pays";
	protected $primaryKey="ID";
	protected $fillable=[
		'PAYS',
		];//'slug'
	public $timestamps=false;
	public $incrementing=true;

	public function commande(){
		return $this->hasOne('App\Models\Livraison\Commande','ID_PAYS','ID');
	}
}
