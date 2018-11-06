<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElArcaDeNoe extends Model
{
     protected $table="el_arca_de_noes";
    public function armino(){
        return $this -> hasMany(armino::class);
    }

    public function buey(){
        return $this -> hasMany(buey::class);
    }
    public function oso(){
        return $this -> hasMany(oso::class);
    }
    public function osoHormiguero(){
        return $this -> hasMany(osoHormiguero::class);
    }
    public function puercoSpin(){
        return $this -> hasMany(puercoSpin::class);
    }
    public function gloton(){
        return $this -> hasMany(gloton::class);
    }

}
