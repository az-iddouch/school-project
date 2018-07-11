<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function options(){

        return $this->belongsToMany(Option::class);
    
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'favorites');
    }
}
