<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{

    
    /**
     * Method event
     *
     * @return void
     */
    public function event() 
    {
        return $this->belongsTo(Event::class);
    }
}
