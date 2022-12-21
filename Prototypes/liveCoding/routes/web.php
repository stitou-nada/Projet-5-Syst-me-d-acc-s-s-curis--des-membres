<?php

use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tache',[TacheController::class,'index']);
Route::get('create',[TacheController::class,'create'])->name('tache.create');
Route::post('store',[TacheController::class,'store'])->name('tache.store');
Route::delete('delete/{id}',[TacheController::class,'delete'])->name('tache.delete');


