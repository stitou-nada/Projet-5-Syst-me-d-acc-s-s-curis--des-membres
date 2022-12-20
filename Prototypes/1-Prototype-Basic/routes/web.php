<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';



Route::get('tache', [TacheController::class,'index'])->name('tache.index');
Route::middleware('auth')->group(function(){
Route::get('create', [TacheController::class,'create'])->name('tache.create');
Route::post('store', [TacheController::class,'store'])->name('tache.store');
Route::delete('delete/{id}', [TacheController::class,'destroy'])->name('tache.destroy');
});
