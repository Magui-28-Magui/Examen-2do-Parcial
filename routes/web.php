<?php
use Illuminate\Http\Request;
use App\armino;
use App\buey;
use App\gloton;
use App\osoHormiguero;
use App\oso;
use App\puercoSpin;
use App\animales;

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
    
return $arm.$glot.$puercoS.$we.$pooh.$osoH;})->middleware('grupoNo1');;

Route::post('armino/add',function(Request $request){
$armino = new $armino;
$armino->nombre=$request ->input('nombre');
$armino->color=$request ->input('color');
$armino->genero=$request ->input('genero');
$armino->edad=$request ->input('edad');
$armino->animales_id=$request ->input('animales_id');
$armino->save();
echo 'El ID:'. $armino;
});
Route::put('armino/update/{id}', function (Request $request, $id) {
$armino = armino::find($id);
$armino->nombre=$request ->input('nombre');
$armino->color=$request ->input('color');
$armino->genero=$request ->input('genero');
$armino->edad=$request ->input('edad');
$armino->animales_id=$request ->input('animales_id');
$armino->save();
echo 'El ID:'. $id;
});

Route::post('buey/add', function(Request $request){
$buey = new $buey;
$buey->nombre=$request ->input('nombre');
$buey->color=$request ->input('color');
$buey->genero=$request ->input('genero');
$buey->edad=$request ->input('edad');
$buey->animales_id=$request ->input('animales_id');
$buey->save();
echo 'El ID:'. $buey;
});
Route::put('buey/update/{id}', function(Request $request, $id){
$buey =buey::find($id);
$buey->nombre=$request ->input('nombre');
$buey->color=$request ->input('color');
$buey->genero=$request ->input('genero');
$buey->edad=$request ->input('edad');
$buey->animales_id=$request ->input('animales_id');
$buey->save();
echo 'El ID:'. $id;
});
Route::post('gloton/add', function(Request $request) {
$gloton = new $gloton;
$gloton->nombre=$request ->input('nombre');
$gloton->color=$request ->input('color');
$gloton->genero=$request ->input('genero');
$gloton->edad=$request ->input('edad');
$gloton->animales_id=$request ->input('animales_id');
$gloton->save();
echo 'El ID:'. $gloton;
});
Route::put('gloton/update/{id}', function(Request $request, $id) {
$gloton =gloton::find($id);	
$gloton->nombre=$request ->input('nombre');
$gloton->color=$request ->input('color');
$gloton->genero=$request ->input('genero');
$gloton->edad=$request ->input('edad');
$gloton->animales_id=$request ->input('animales_id');
$gloton->save();
echo 'El ID:' .$id;
});
Route::post('oso/add', function(Request $request) {
$oso = new $oso;
$oso->color=$request ->input('color');
$oso->genero=$request ->input('genero');
$oso->edad=$request ->input('edad');
$oso->animales_id=$request ->input('animales_id');
$oso->save();
echo 'El ID:'. $oso;
});
Route::put('oso/update/{id}', function(Request $request, $id)
{
$oso =oso::find($id);	
$oso->nombre=$request ->input('nombre');
$oso->color=$request ->input('color');
$oso->genero=$request ->input('genero');
$oso->edad=$request ->input('edad');
$oso->animales_id=$request ->input('animales_id');
$oso->save();
echo 'El ID:' . $id;
});
Route::post('osoHormiguero/add', function(Request $request){
$osoHormiguero = new $osoHormiguero;
$osoHormiguero->nombre=$request ->input('nombre');
$osoHormiguero->color=$request ->input('color');
$osoHormiguero->genero=$request ->input('genero');
$osoHormiguero->edad=$request ->input('edad');
$osoHormiguero->animales_id=$request ->input('animales_id');
$osoHormiguero->save();
echo 'El ID'. $osoHormiguero;
});
Route::put('osoHormiguero/update/{id}',function(Request $request, $id){
$osoHormiguero =osoHormiguero::find($id);	
$osoHormiguero->nombre=$request ->input('nombre');
$osoHormiguero->color=$request ->input('color');
$osoHormiguero->genero=$request ->input('genero');
$osoHormiguero->edad=$request ->input('edad');
$osoHormiguero->animales_id=$request ->input('animales_id');
$osoHormiguero->save();
echo 'El ID:' . $id;
});
Route::post('/puercoSpin/add',function(Request $request){
$puercoSpin = new $puercoSpin;
$puercoSpin->nombre=$request ->input('nombre');
$puercoSpin->color=$request ->input('color');
$puercoSpin->genero=$request ->input('genero');
$puercoSpin->edad=$request ->input('edad');
$puercoSpin->animales_id=$request ->input('animales_id');
$puercoSpin->save();
echo 'El ID:' . $puercoSpin;
});
Route::put('puercoSpin/update/{id}',function(Request $request, $id){
$puercoSpin =puercoSpin::find($id);	
$puercoSpin->nombre=$request ->input('nombre');
$puercoSpin->color=$request ->input('color');
$puercoSpin->genero=$request ->input('genero');
$puercoSpin->edad=$request ->input('edad');
$puercoSpin->animales_id=$request ->input('animales_id');
$puercoSpin->save();
echo 'El ID:'. $id;
});


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


