<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GantController;

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
    return view('home');
//    return view('welcome');  // pour la page par défaut
})->name('home');

/*Route::get('/listeClient', function () {
    return view('client.listeClient');
})->name('listeClient');

Route::get('/listeGant', function () {
    return view('gant.listeGant');
})->name('listeGant');*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/gants', [GantController::class, 'index'])->name('gants.index');
    Route::get('/gants/create', [GantController::class, 'create'])->name('gants.create');
    Route::post('/gants', [GantController::class, 'store'])->name('gants.store');
    Route::get('/gants/{id}/edit', [GantController::class, 'edit'])->name('gants.edit');
    Route::put('/gants/{id}', [GantController::class, 'update'])->name('gants.update');
});
