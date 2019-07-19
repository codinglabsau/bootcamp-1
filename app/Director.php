<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    /** belongsTo movie */
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
