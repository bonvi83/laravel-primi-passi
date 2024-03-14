<?php

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


// questo file utilizza l'url per decidere quale pagina deve vedere l'utente

Route::get('/', function () {
    $titolo = 'Hello World';
    $descrizione = 'Prova di scrittura nella home, tramite le variabili ecc ecc ecc ecc';

    return view('home', compact('titolo', 'descrizione'));
});
