<?php

use Inertia\Inertia;
use App\Http\Controllers\prueba;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\DelegacionController;


 //         NO REGISTRADO - PAGINA PUBLICA          ///Seleccione un Tipo de Trámite
Route::inertia('/', 'Inicio');
Route::inertia('/delegaciones', 'Delegaciones');
Route::inertia('/organigrama', 'Organigrama');
Route::inertia('/requisitos', 'Requisitos');
Route::inertia('/formulario', 'Formulario');
Route::inertia('/formulario-asesoramiento-juridico', 'FormularioAJuridico');
Route::inertia('/elegir-fecha', 'ElegirFecha');

 ///         REGISTRADO         ///
 Route::inertia('/login', 'Login');
 Route::group(['middleware' => 'auth'], function(){
    Route::inertia('/turnos', 'Turnos');
 });

 //DELEGACIONES/////////////////////////////////////////////////////////////
 Route::get('/delegacion-index', [DelegacionController::class,'index']);
 Route::get('/delegacion-create', [DelegacionController::class,'create']);
 //////////////////////////////////////////////////////////////////////////

//TEST//////////////////////////////////////////////////
Route::get('/test', [prueba::class,'test']);
Route::get('/test2', [prueba::class,'test2']);
///////////////////////////////////////////////////////

///////TRAMITE/////////////////////////////////////////
Route::get('/index-tramites', [TramiteController::class, 'index']);
Route::post('/show-tramites', [TramiteController::class, 'show']);
///////////////////////////////////////////////////////
