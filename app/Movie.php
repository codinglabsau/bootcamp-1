<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** has many quotes */
    public function quote()
    {
        return $this->hasMany(Quote::class, 'quote_id');
    }

    /** has many actors */
    public function actor()
    {
        return $this->hasMany(Actor::class, 'actor_id');
    }
}
