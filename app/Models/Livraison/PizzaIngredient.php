<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PizzaIngredient extends Pivot
{
    //
	protected $table="pizza_ingredient";
	protected $primaryKey="id_pivot";
	protected $fillable=[
		'ID',
		'NOMPIZZA',
		];//'slug'
	public $incrementing=true;

}
