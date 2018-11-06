<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class armino extends Model
{
    public function getElArcaDeNoe(){
        return $this->belongsTo(getElArcaDeNoe::class);
    }
}
