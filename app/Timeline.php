<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
       public function backlogs()
    {
        return $this->belongsToMany('App\Backlog');
    }
}
