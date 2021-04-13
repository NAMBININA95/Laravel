<?php

namespace App\Models\Traits;

trait SlugRoute{

	public function getRouteKeyName()//ceci permet de recuperer id dans le paramètre d route
	{
		//return parent::getRouteKey();
		//Maintenant noous allons utiliser le slug comme identifiant
		//dont le par défaut est le primaryKey="id"
		//A present faut maintenant changer ou pas id car il reconnait automatiquement
		return 'slug';

	}
}


