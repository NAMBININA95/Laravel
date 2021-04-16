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
}
