<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
	protected $table="ingredient";
	protected $primaryKey="ID";
	public $incrementing=true;
	//protected $keyType="string";
	protected $fillable=[
		'INGREDIENT',
		];//'slug'
	public $timestamps=false;

	public function pizzas(){
		return $this->belongsToMany('App\Models\Livraison\Pizza','PizzaIngredient','ID','NOMPIZZA','id_pivot');
	}

}
