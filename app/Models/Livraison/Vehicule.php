<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    //
	protected $table="vehicule";
	protected $primaryKey="IMMATRICULATION";
	public $incrementing=false;
	protected $keyType="string";
	protected $fillable=[
		'IMMATRICULATION',
		'MARQUE',
		'TYPE',
		'IMAGES',
		];//'slug'
	public $timestamps=false;

}
