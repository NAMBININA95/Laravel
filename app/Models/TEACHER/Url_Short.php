<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class Url_Short extends Model

{
    //

    protected $table="url_short";
    protected $fillable=['link_origi','link_short'];
    public $timestamps=false;
}
