<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [ControladorPaginas::class, 'fPrincipal'])->name('NPrincipal');
Route::get('/formulario', [ControladorPaginas::class, 'fFormulario'])->name('NFormulario');
Route::get('/consulta', [ControladorPaginas::class, 'fConsulta'])->name('NConsulta');

Route::post("/guardarDatos", [ControladorPaginas::class, "procesarDatos"])->name("NProcesar");