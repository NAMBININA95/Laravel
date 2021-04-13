<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class EventBroteModel extends Model
{
    //

	/*
	 * Pour gerer l'unicité de slug veuillez
	 * installer le librairie sur composer eloquent-sluggable
	 * */
	protected $table="eventbrote";
	protected $primaryKey="id";
	protected $fillable=['titre','description','lieu','date_event','time_event','slug'];
	public $timestamps=false;
	protected $dates=['date_event'];


	public function getRouteKeyName()//ceci permet de recuperer id dans le paramètre d route
	{
		//return parent::getRouteKey();
		//Maintenant noous allons utiliser le slug comme identifiant
		//dont le par défaut est le primaryKey="id"
		//A present faut maintenant changer ou pas id car il reconnait automatiquement

		return 'slug';

	}
}
