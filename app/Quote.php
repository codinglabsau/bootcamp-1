<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /** belongs to a actor */ 
    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }

    /** belongs to a movie */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
