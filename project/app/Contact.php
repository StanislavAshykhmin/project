<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['name', 'parent_id'];

    public function childs()
    {
//        return $this->hasMany('App\Contact','parent_id','id') ;
        return $this->hasMany('App\Contact', 'parent_id', 'id');
//        return $this->hasMany('App\Contact','id','parent_id')->union($first);
    }

    public function bchilds()
    {
        return $this->hasMany('App\Contact', 'id', 'parent_id');
    }
}
