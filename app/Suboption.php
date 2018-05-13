<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suboption extends Model
{
    public function option(){
        return $this->belongsTo('App\Option');
    }
}
