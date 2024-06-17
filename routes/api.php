<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\EtapasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Models\Servicio;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [LoginController::class, 'login']);
Route::post('servicio', [ServiciosController::class, 'show']);
Route::post('servicio/guardar', [ServiciosController::class, 'storeApi'])->name('servicio.guardar');
Route::delete('/servicio/borrar/{id}',[ServiciosController::class,'deleteApi']);
Route::get('servicio/{id?}', [ServiciosController::class, 'viewApi'])->name('servicio.view'); // Note the {id?} indicating id is optional
Route::get('servicios', [ServiciosController::class, 'indexApi'])->name('servicios.index');


Route::post('etapa', [EtapasController::class, 'show']);
Route::post('etapa/guardar', [EtapasController::class, 'storeApi'])->name('etapa.guardar');
Route::delete('/etapa/borrar/{id}',[EtapasController::class,'deleteApi']);

/*
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
*/

