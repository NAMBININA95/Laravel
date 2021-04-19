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

	/*
	 * Attention à la nomination de votre id qui relie avec l'id sinon vous rencontrer des erreurs
	 * pour la recuperation des ID avec le mot clé :
	 * 		-hasMany dont le localkey est toujours l'ID de qui s'associe à la table relier
	 * 		et le foreignKey : est celui dans la table impliquer
	 * 		-belongsTo -- c'est toujours le meme principe
	 * */

	public function users(){
		return $this->hasMany('App\User','ID_ROLE','ID');
	}

}
