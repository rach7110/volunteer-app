<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerEvent extends Model
{
	protected $table = 'volunteerevents';
	protected $fillable = ['title'];
	
        public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
