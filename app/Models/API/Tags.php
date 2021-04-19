<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $table='tags';
    protected $primaryKey = 'id';
    protected $fillable=['tag','tag_url'];

   public function posts(){// le nom de la table doit se correspondre dans la base de données
        return $this->belongsToMany(App\Models\API\PostModel::class)->using(App\Models\API\Post_Tags::class);
    }
}
