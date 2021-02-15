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
        return $this->belongsToMany(Actor::class);
    }

    /** has one director */
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    /** has many language */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
