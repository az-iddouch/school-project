<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    public function subOptions (){
        return $this->hasMany('App\Suboption');
    }
}
