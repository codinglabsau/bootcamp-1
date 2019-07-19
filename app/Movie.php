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

    /** has one director */
    public function director()
    {
        return $this->hasOne(Director::class, 'director_id');
    }

    /** has many actors */
    public function Language()
    {
        return $this->hasOne(Language::class, 'language_id');
    }
}
