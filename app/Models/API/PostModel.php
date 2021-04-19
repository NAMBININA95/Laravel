<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    //
    protected $table='posts';
    protected $primaryKey = 'id';
    protected $fillable=['titre','contenu','user_id'];

    public function users_perso()
    {
        # code...
        return $this->belongsTo('App\User');
    }

   public function tags(){// le nom de la table doit se correspondre dans la base de données
        return $this->belongsToMany('App\Models\API\Tags','post_tag','post_id','tags_id');
//        return $this->belongsToMany('App\Models\API\Tags','post_tag','post_id','tags_id')->using('App\Models\API\Post_Tags')->withPivot(['created_at','updated_at']);
    }


}
