<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backlog extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\timelines');
    }
}
