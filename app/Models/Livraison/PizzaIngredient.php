<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class PizzaIngredient extends Model
{
    //
	protected $table="pizza_ingredient";
	protected $primaryKey="id_pivot";
	protected $fillable=[
		'ID',
		'NOMPIZZA',
		];//'slug'

}
