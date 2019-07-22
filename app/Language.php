<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /** hasMany movie */
    public function movies() {
        return $this->hasMany(Movie::class);
    }
}
