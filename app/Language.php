<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /** belongsTo movie */
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
