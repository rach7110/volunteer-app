<?php

namespace App\Events;

abstract class Event
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
