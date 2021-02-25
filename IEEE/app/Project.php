<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    

    public function fases(){
        return $this->hasMany('App\Fase');
    }
}
