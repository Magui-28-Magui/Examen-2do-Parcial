<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buey extends Model
{
   public function getElArcaDeNoe(){
        return $this->belongsTo(getElArcaDeNoe::class);
    }
}
