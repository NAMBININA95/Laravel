<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    //
    protected $table='posts';
    protected $fillable=['titre','contenu','user_id'];

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }

   /* public function tags(){// le nom de la table doit se correspondre dans la base de données
        return $this->belongsToMany('App\Models\API\Tags');
    }*/
}
