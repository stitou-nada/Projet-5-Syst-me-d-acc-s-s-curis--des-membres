<?php

use App\Http\Controllers\googleController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [TacheController::class,'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('create',[TacheController::class,'create'])->name('tache.create');
Route::post('store',[TacheController::class,'store'])->name('tache.store');
Route::delete('delete/{id}',[TacheController::class,'delete'])->name('tache.delete');
Route::get('google-auth',[googleController::class,'redirect'])->name('google-auth');
Route::get('auth/google/callback',[googleController::class,'callbackGoogle']);
require __DIR__.'/auth.php';
