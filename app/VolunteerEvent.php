<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerEvent extends Model
{
	protected $table = 'volunteerevents';
	protected $fillable = ['title', 'description', 'start_date', 'end_date', 'location', 'street_address', 'cuty', 'state', 'zip', 'country'];
	// protected $guarded = ['timestamps'];
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
