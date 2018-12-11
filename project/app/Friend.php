<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{

    protected $table = 'friends';

    public function connect(){
        return $this->hasMany('App\Connection');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
