<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name', 'bio', 'movies'
    ];

    public function actor() {
        return $this->belongsToMany('movie_id');
    }
}
