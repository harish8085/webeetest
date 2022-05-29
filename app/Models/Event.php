<?php

namespace App\Models;

use Carbon\Carbon;
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
     * All events
     *
     * @return void
     */
    public function events()
    {
        $events = Event::with('workshops')->get();
        return $events;
    }

    /**
     * Method futureEvents
     * All future events
     *
     * @return void
     */
    public function futureEvents()
    {
        $currentDate = Carbon::now();
        $futureEvents = $this->with('workshops')->whereHas(
            'workshops',
            function ($query) use ($currentDate) {
                $query->whereDate('end', '>',  $currentDate);
            }
        )->get();
        return $futureEvents;
    }
}
