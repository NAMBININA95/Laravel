<?php

namespace App\Models\TEACHER;

use Illuminate\Database\Eloquent\Model;

class EventBroteModel extends Model
{
    //
	protected $table="eventbrote";
	protected $primaryKey="id";
	protected $fillable=['titre','description','lieu','date_event','time_event'];
	public $timestamps=false;
	protected $dates=['date_event'];
}
