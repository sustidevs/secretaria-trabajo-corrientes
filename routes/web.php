<?php

use Inertia\Inertia;
use App\Http\Controllers\prueba;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\DelegacionController;
use App\Http\Controllers\FormularioController;


 //         NO REGISTRADO - PAGINA PUBLICA          ///Seleccione un Tipo de Trámite
Route::inertia('/', 'Inicio');
Route::inertia('/delegaciones', 'Delegaciones');
Route::inertia('/organigrama', 'Organigrama');
Route::inertia('/inspectores', 'Inspectores');
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

//FORMULARIO/////////////////////////////////////////////////////////////////////////
Route::get('/formulario-create', [FormularioController::class, 'create']);
Route::post('/formulario-pdf',   [FormularioController::class, 'comprobanteTurno']);
////////////////////////////////////////////////////////////////////////////////////

///////PERSONAS////////////////////////////////////////
Route::get('/index-personas', [PersonaController::class, 'index']);
Route::get('/index-delegados', [PersonaController::class, 'indexDelegados']);
Route::get('/index-abogados', [PersonaController::class, 'indexAbogados']);
Route::get('/index-solicitante', [PersonaController::class, 'indexSolicitantes']);
Route::get('/index-admins', [PersonaController::class, 'indexAdminAreas']);
Route::get('/create-abogado', [PersonaController::class, 'createAbogado']);
Route::get('/abogados-internos', [PersonaController::class, 'indexAbogadosInternos']);
Route::post('/edit-persona', [PersonaController::class, 'edit']);
Route::post('/update-abogado', [PersonaController::class, 'updateAbogado']);
Route::post('/store-abogado', [PersonaController::class, 'storeAbogado']);
///////////////////////////////////////////////////////

///////USERS////////////////////////////////////////
Route::get('/index-users', [UserController::class, 'index']);
Route::get('/create-user', [UserController::class, 'create']);
Route::post('/store-user', [UserController::class, 'store']);
Route::post('/edit-user', [UserController::class, 'edit']);
Route::post('/update-user', [UserController::class, 'update']);
Route::post('/destroy-user', [UserController::class, 'destroy']);
Route::post('/restore-user', [UserController::class, 'restore']);
///////////////////////////////////////////////////////