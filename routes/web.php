<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ListaAnimales',function(){
    $arm = DB::table('arminos')->get();
    $glot = DB::table('gloton')->get();
    $puercoS = DB::table('puercoSpin')->get();
    $we = DB::table('buey')->get();
    $pooh = DB::table('oso')->get();
    $osoH = DB::table('osoHormiguero')->get();
    
return $arm . $glot . $puercoS . $we . $pooh . $osoH; })->middleware('grupoNo1');;

Route::get('animales/{$id}', function($id){
  $a=App\armino::find($id)->get($id);
  $g=App\gloton::find($id)->get($id);
  $p=App\puercoSpin::find($id)->get($id);
  $w=App\buey::find($id)->get($id);
  $p=App\oso::find($id)->get($id);
  $o=App\osoHormiguero::find($id)->get($id);
  return $a . $g . $p . $w . $p . $o ;
})->middleware('grupoNo1');;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


