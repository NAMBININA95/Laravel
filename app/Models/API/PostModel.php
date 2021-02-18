<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    //
    protected $table='posts';
    protected $fillable=['titre','conternu','user_id'];

    public function user()
    {
        # code...
        return $this->belongsTo('App\User');
    }
}
