<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $fillable = ['name','parent_id', 'id'];
    protected $with = [
        'children'
    ];


    public function children() {
        return  $this->hasMany('App\Contact','parent_id','id');
    }

    public function age(){
        return now()->diffInYears( \Carbon\Carbon::parse($this->birthday));
    }

//    public function parent(){
//        return  $this->belongsTo('App\Contact','id','parent_id');
//    }

    public function saveContacts(){
        return $this->hasMany('App\Contact', 'id');
    }
}
