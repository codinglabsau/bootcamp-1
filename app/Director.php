<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /** belongsToMany movie */
    public function movies() {
        return $this->belongsToMany(Movie::class);
    }
}
