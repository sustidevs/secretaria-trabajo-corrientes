<?php

use Inertia\Inertia;
use App\Http\Controllers\prueba;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


 //         NO REGISTRADO - PAGINA PUBLICA          ///
Route::inertia('/', 'Inicio');
Route::inertia('/delegaciones', 'Delegaciones');
Route::inertia('/organigrama', 'Organigrama');
Route::inertia('/requisitos', 'Requisitos');
Route::inertia('/formulario', 'Formulario');
Route::inertia('/formulario-asesoramiento-juridico', 'FormularioAJuridico');
Route::inertia('/elegir-fecha', 'ElegirFecha');

 ///         REGISTRADO         ///
 Route::inertia('/login', 'Login');
 Route::inertia('/turnos', 'Turnos');
 

//TEST//////////////////////////////////////////////////
Route::get('/test', [prueba::class,'test']);
Route::get('/test2', [prueba::class,'test2']);
///////////////////////////////////////////////////////

