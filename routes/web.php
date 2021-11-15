<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::inertia('/organigrama', 'Organigrama');
Route::inertia('/requisitos', 'Requisitos');


Route::inertia('/login', 'Login');
