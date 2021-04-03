<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    //
    protected $table="posts";
    protected $primaryKey="id";
    protected $guarded="id"; //celui ci est contraire de fillable dont on peut pas modifier l'id de nos tables
    protected $fillable=['titre','contenu','user_id'];
    public $timestamps=false;
    protected $dates=['created_at']; //herite de la type Carbon pour éviter de réecrir new DateTime afin de changer plus facilement les format de date et heures
}
