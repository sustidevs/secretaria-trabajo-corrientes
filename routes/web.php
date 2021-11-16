<?php

use Inertia\Inertia;
use App\Http\Controllers\prueba;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

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

 //         NO REGISTRADO - PAGINA PUBLICA          ///
Route::inertia('/', 'Inicio');
Route::inertia('/delegaciones', 'Delegaciones');

//TEST//////////////////////////////////////////////////
Route::get('/test', [prueba::class,'test']);
Route::get('/test2', [prueba::class,'test2']);
///////////////////////////////////////////////////////
Route::inertia('/organigrama', 'Organigrama');
Route::inertia('/requisitos', 'Requisitos');
Route::inertia('/formulario', 'Formulario');

Route::inertia('/login', 'Login');
Route::inertia('/turnos', 'Turnos');
