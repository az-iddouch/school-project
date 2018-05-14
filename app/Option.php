<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    public function suboptions (){

        return $this->hasMany('App\Suboption');
    
    }

    public function services(){

        return $this->belogsToMany(Service::class);
    
    }
}
