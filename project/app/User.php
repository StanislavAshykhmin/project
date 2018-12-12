<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
protected $with = ['friends', 'bfriends'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function group(){
        return $this->BelongsTo('App\Group');
    }

        public function friends(){
        return $this->belongsToMany('App\Friend' , 'friend_user' , 'user_id' , 'friend_id');

        }

        public function bfriends(){
            return $this->belongsToMany('App\Friend' , 'friend_user' , 'friend_id' , 'user_id');
        }





}
