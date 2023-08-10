<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

// Accueil, liste de tous les films
Route::get('/', [FilmController::class, 'index'])
    ->name('index');

// Route pour un seul film
Route::get("/films/{id}", [FilmController::class, 'show'])
->name('films.show')
->whereNumber('id');

// Liste de la recherche des films
Route::get("/films/chercher", [FilmController::class, 'chercher'])
->name('films.chercher');
