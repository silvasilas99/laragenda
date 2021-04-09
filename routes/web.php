<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::get('/contato', 'App\Http\Controllers\ContatoController@index')->middleware(['auth', 'verified'])->name('contato');
Route::get('/contato/add', 'App\Http\Controllers\ContatoController@create')->middleware(['auth', 'verified'])->name('contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@store')->middleware(['auth', 'verified'])->name('contato');
Route::get('/contato/{id}', 'App\Http\Controllers\ContatoController@show')->middleware(['auth', 'verified'])->name('contato');
Route::get('/contato/edit/{id}', 'App\Http\Controllers\ContatoController@edit')->middleware(['auth', 'verified'])->name('contato');
Route::put('/contato/{id}', 'App\Http\Controllers\ContatoController@update')->middleware(['auth', 'verified'])->name('contato');
Route::delete('/contato/{id}', 'App\Http\Controllers\ContatoController@destroy')->middleware(['auth', 'verified'])->name('contato');

require __DIR__.'/auth.php';

