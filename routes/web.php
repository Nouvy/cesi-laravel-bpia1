<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HistoriqueTemperatureController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard')->middleware(['auth']);

    Route::resource('articles', ArticleController::class)->middleware(['auth']);

    Route::resource('utilisateurs', UtilisateurController::class)->middleware(['auth']);

    Route::resource('historique_temperatures', HistoriqueTemperatureController::class)->middleware(['auth']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
