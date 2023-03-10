<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\SeriesController;
use  App\Http\Controllers\SeasonsController;
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
    return redirect('/series');
});

// Route::get('/series', [SeriesController::class, 'index'] );
// Route::get('/series/criar', [SeriesController::class, 'create'] );
// Route::post('/series/salvar', [SeriesController::class, 'store'] );

// Route::controller(SeriesController::class)->group(function(){
//     Route::get('/series',  'index' )->name('series.index');
//     Route::get('/series/criar',  'create')->name('series.create');
//     Route::post('/series/salvar',  'store' )->name('series.store');
// });

// Route::resource('/series', SeriesController::class);
// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'] )->name('series.destroy');
// Route::resource('/series', SeriesController::class)
// ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);

// Route::resource('/series', SeriesController::class)
//     ->except(['show']);

Route::resource('/series', SeriesController::class)
->except(['show']);

Route::get('/series/{series}/season', [SeasonsController::class, 'index'] )->name('seasons.index');
