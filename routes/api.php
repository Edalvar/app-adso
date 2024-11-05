<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\DetallesRentaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\SerieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/peliculas/datos',[PeliculaController::class,'getData']);
Route::post('/peliculas/save',[PeliculaController::class,'save']);
Route::put('/peliculas/update',[PeliculaController::class,'update']);
Route::delete('/peliculas/delete',[PeliculaController::class,'delete']);

Route::get('/series/datos',[SerieController::class,'getData']);
Route::post('/series/save',[SerieController::class,'save']);
Route::put('/series/update',[SerieController::class,'update']);
Route::delete('/series/delete',[SerieController::class,'delete']);

Route::get('/pais/datos',[PaisController::class,'getData']);
Route::post('/pais/save',[PaisController::class,'save']);
Route::put('/pais/update',[PaisController::class,'update']);
Route::delete('/pais/delete',[PaisController::class,'delete']);

Route::get('/comentario/datos',[ComentarioController::class,'getData']);
Route::post('/comentario/save',[ComentarioController::class,'save']);
Route::put('/comentario/update',[ComentarioController::class,'update']);
Route::delete('/comentario/delete',[ComentarioController::class,'delete']);

Route::get('/catalogo/datos',[CatalogoController::class,'getData']);
Route::post('/catalogo/save',[CatalogoController::class,'save']);
Route::put('/catalogo/update',[CatalogoController::class,'update']);
Route::delete('/catalogo/delete',[CatalogoController::class,'delete']);

Route::get('/detail/datos',[DetallesRentaController::class,'getData']);
Route::post('/detail/save',[DetallesRentaController::class,'save']);
Route::put('/detail/update',[DetallesRentaController::class,'update']);
Route::delete('/detail/delete',[DetallesRentaController::class,'delete']);

Route::get('/renta/datos',[RentaController::class,'getData']);
Route::post('/renta/save',[RentaController::class,'save']);
Route::put('/renta/update',[RentaController::class,'update']);
Route::delete('/renta/delete',[RentaController::class,'delete']);








