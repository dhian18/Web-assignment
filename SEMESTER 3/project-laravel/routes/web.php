<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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
//Route::get('/add', function () {
  //  return view('add');
//});

Route::get('/', [ArtikelController::class,'index']);
Route::get('/add', [ArtikelController::class,'add']);
Route::post('/store', [ArtikelController::class,'store']);
Route::get('/show/{id}', [ArtikelController::class,'show']);
Route::post('/update/{id}', [ArtikelController::class,'update']);
Route::get('/destroy/{id}', [ArtikelController::class,'destroy']);