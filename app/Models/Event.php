<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    /**
     * Method workshops
     *
     * @return void
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
    
    /**
     * Method events
     *
     * @return void
     */
    public function events() 
    {
        $events = Event::with('workshops')->get();
        return $events;
    }
}
