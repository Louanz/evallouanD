<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdinateursController;
use App\Http\Controllers\ReseauxController;
use App\Http\Controllers\ServeursController;
use App\Https\Controllers\GestionController;
use App\Https\Controllers\AccueilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::resource('ordinateurs', OrdinateursController::class);
Route::resource('reseaux', ReseauxController::class);
Route::resource('serveurs', ServeursController::class);

Route::group(['middleware' => 'gestion_parc'], function () {
    Route::get('/gestion', [GestionController::class, 'edit'])->name('gestion.edit');
    Route::patch('/gestion', [GestionController::class, 'update'])->name('gestion.update');
    Route::delete('/gestion', [GestionController::class, 'destroy'])->name('gestion.destroy');

});

