<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class Url_Short extends Model

{
    //

    protected $table="url_short";
    protected $fillable=['link_origi','link_short'];
    public $timestamps=false;

    public static function generateTextRandom(){

        $shortned=str_random(6); # generer une chaine de caractère aléatoire de six caractères
        if(static::whereLinkShort($shortned)->count()!=0){
            return static::generateTextRandom();
        }
        return $shortned;

    }
}
