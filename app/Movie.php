<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** has many quotes */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    /** has many actors */
    public function actors()
    {
        return $this->hasMany(Actor::class);
    }
}
