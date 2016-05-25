<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backlog extends Model
{
    public function timelines()
    {
        return $this->belongsToMany('App\Timeline');
    }
}
