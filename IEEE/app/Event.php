<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
<<<<<<< HEAD
    
=======
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
}
