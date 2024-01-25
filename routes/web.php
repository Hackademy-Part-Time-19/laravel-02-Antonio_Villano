<?php

use Faker\Guesser\Name;
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

Route::get('/Homepage', function () {
    return view('home',['nome_blog'=>'Randomico']);

})->name('home');
Route::get('/articoli', function () {
    $articoli=[
        ['titolo'=>'articolo 1','descrizione'=>'descrizione di prova 1','autore'=>'Marco Rossi','categoria'=>'categoria 1'],
        ['titolo'=>'articolo 2','descrizione'=>'descrizione di prova 2','autore'=>'Roberto Bianchi','categoria'=>'categoria 2'],
        ['titolo'=>'articolo 3','descrizione'=>'descrizione di prova 3','autore'=>'Carlo Neri','categoria'=>'categoria 3'],
        ['titolo'=>'articolo 4','descrizione'=>'descrizione di prova 4','autore'=>'Michele Verdi','categoria'=>'categoria 4'],
    ];
    return view('articoli',['titolo'=>'Articoli','articoli'=>$articoli]);
})->name('articoli');

Route::get('/articoli/articolo/{id}', function ($id) {
    $articoli=[
        ['titolo'=>'articolo 1','descrizione'=>'descrizione di prova 1','autore'=>'Marco Rossi','categoria'=>'categoria 1'],
        ['titolo'=>'articolo 2','descrizione'=>'descrizione di prova 2','autore'=>'Roberto Bianchi','categoria'=>'categoria 2'],
        ['titolo'=>'articolo 3','descrizione'=>'descrizione di prova 3','autore'=>'Carlo Neri','categoria'=>'categoria 3'],
        ['titolo'=>'articolo 4','descrizione'=>'descrizione di prova 4','autore'=>'Michele Verdi','categoria'=>'categoria 4'],
    ];
    return view('articolo',['articolo'=>$articoli[$id]]);
})->name('articoli.articolo');

Route::get('/Contatti/chi-sono', function () {
    return view('chi_sono',['descrizione'=>'questa è una descrizione']);
})->name('contatti');
