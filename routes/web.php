<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(callback: function () {
    Route::get('/home', [PagesController::class, 'home'])->name('home');

    Route::get('/saludo/{nombre}', [PagesController::class, 'saludos'])->name('saludos');

    Route::get('contactos', [PagesController::class, 'contact'])->name('contactos');

    Route::post('contactos', [PagesController::class, 'mensaje']);
});
