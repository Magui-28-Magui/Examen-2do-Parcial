<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class osoHormiguero extends Model
{
    public function getElArcaDeNoe(){
        return $this->belongsTo(getElArcaDeNoe::class);
    }
}
