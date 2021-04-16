<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

	protected $table="role";
	protected $primaryKey="ID";
	protected $fillable=[
		'ROLE'
		];//'slug'
	public $timestamps=false;

}
