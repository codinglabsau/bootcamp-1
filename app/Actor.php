<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /** belongsToMany movies */
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }

    /** hasMany quote */
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
