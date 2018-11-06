<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puercoSpin extends Model
{
    public function getElArcaDeNoe(){
        return $this->belongsTo(getElArcaDeNoe::class);
    }
}
