<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    public function connect(){
        return $this->morphTo();
    }
}
