<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
	protected $table="pizza";
	protected $primaryKey="NOMPIZZA";
	public $incrementing=false;
	protected $keyType="string";
	protected $fillable=[
		'NOMPIZZA',
		'PRIX',
		'IMAGEPIZZA',
		];//'slug'
	public $timestamps=false;

	public function ingredients(){
		return $this->belongsToMany('App\Models\Livraison\Ingredient','PizzaIngredient','NOMPIZZA','ID','id_pivot');
	}

	public function commandes(){
		return $this->hasMany('App\Models\Livraison\Commande','ID_PIZZA','NOMPIZZA');
	}
}
