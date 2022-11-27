<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;
use App\Http\Controllers\controladorBD;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home', function () {
    return view('home');
})->name('routeHome');


Route::view('/home','home')->name('routeHome');
Route::view('/ingresar','ingresar')->name('routeIngresar');
//Route::view('/recuerdos','recuerdos')->name('routeRecuerdos');


route::get('/ingresar',function(){
   return "Esta es mi ruta de ingresar recuerdos";
});

route::get('/ingresar/{name}', function($name){
    return "Bienvenido a mi ruta de recuerdos $name";
});


route::get('/recuerdos/{nombre?}',function($nombre="Invitado"){
    return "Bienvenido a la ruta de recuerdos $nombre";
});


route::get('/recuerdos/{nombre?}', ['as'=>'NRecuerdos', function($nombre="Invitado"){
    $arrnombres=['Gerson','Amy','Sara'];
    return view('recuerdos', compact('nombre','arrnombres'));
}]);

route::get('/',['as'=>'NHome', 'uses'=>'App\Http\Controllers\ControladorPaginas@home']);
route::get('ingresar',['as'=>'NIngresar', 'uses'=>'App\Http\Controllers\ControladorPaginas@ingresar']);
route::get('recuerdos/{nombre?}',['as'=>'NRecuerdos', 'uses'=>'App\Http\Controllers\ControladorPaginas@recuerdos']);
*/

Route::get('/', [ControladorPaginas::class, 'fHome'])->name('NHome');
Route::get('/ingresar', [ControladorPaginas::class, 'fIngresar'])->name('NIngresar');
Route::get('/recuerdos/{nombre?}', [ControladorPaginas::class, 'fRecuerdos'])->name('NRecuerdos');

Route::post("/guardarRecuerdos", [ControladorPaginas::class, "procesarRecuerdos"])->name("NProcesar");

Route::get('/recuerdo/create', [controladorBD:: class, 'create'])->name('recuerdo.create');

//Función de Store para guardar/insertar datos en la BD
Route::post('/recuerdo', [controladorBD::class, 'store'])->name('recuerdo.store');

//Función Index para procesar la vista de consulta
Route::get('/recuerdo', [controladorBD::class, 'index'])->name('recuerdo.index');

//Función para mostrar un registro fallido
Route::get('/recuerdo/{id}/edit', [controladorBD::class, 'edit'])->name('recuerdo.edit');

//Función Update para editar el registro filtrado
Route::put('/recuerdo/{id}', [controladorBD::class, 'update'])->name('recuerdo.update');

//Funcion de confirmar para mostar un registro a eliminar
Route::get('/recuerdo/{id}/confirm', [controladorBD::class, 'confirm'])->name('recuerdo.confirm');

//Funcion de eliminar recuerdo (registro filtrado)
Route::delete('/recuerdo/{id}', [controladorBD::class, 'destroy'])->name('recuerdo.destroy');
