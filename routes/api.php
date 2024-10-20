<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/test', function(){
//     return 'API is working';
// });

Route::get('/bukus/search', [BukuController::class, 'search']);
Route ::apiResource('kategoris', KategoriController::class);
Route ::apiResource('bukus', BukuController::class);
// Route::get('/bukus/{buku}',[BukuController::class,'show']);
// Route::put('bukus/{id}', [BukuController::class, 'update']);
// Route::delete('/bukus/{id}', [BukuController::class, 'destroy']);
// Route::get('/bukus',[BukuController::class,'index']);
// Route::get('/bukus/{buku}',[BukuController::class,'show']);
// Route::post('/bukus',[BukuController::class,'store']);
// Route::put('/bukus/{buku}',[BukuController::class,'update']);


