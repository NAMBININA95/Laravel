<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
*Nous allons relier la table etranger que les autres appels pivot pour relier la relation manytomany sur la
 * Donc ceci est très important
 **/
class Post_Tags extends Pivot
{
    //
//    protected $table='post_tag';
//    protected $primaryKey = 'id';
//    protected $fillable=['tags_id','post_id'];
//    public $timestamps=false;
    public $incrementing = true;
}
