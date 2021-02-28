<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

    public function fases(){
        return $this->hasMany('App\Fase')->orderBy('fase_number');
    }

    public function members(){
        return $this->belongsToMany('App\Member');
    }

}
