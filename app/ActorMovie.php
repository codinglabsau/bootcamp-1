<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    /** hasMany movies */
    public function movie() {
        return $this->hasMany(Movie::class, 'movie_id');
    }

    /** hasMany actors */
    public function actor() {
        return $this->hasMany(Actor::class, 'actor_id');
    }
}
