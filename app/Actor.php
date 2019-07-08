<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name', 'bio', 'movies'
    ];
  
    /** belongsToMany movies */
    public function movie() {
        return $this->belongsToMany(Movie::class, 'movie_id');
    }

    /** hasMany quote */
    public function quote() {
        return $this->hasMany(Quote::class, 'quote_id');
    }
}
