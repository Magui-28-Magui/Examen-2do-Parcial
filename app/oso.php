<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oso extends Model
{
    public function getElArcaDeNoe(){
        return $this->belongsTo(getElArcaDeNoe::class);
    }
}
