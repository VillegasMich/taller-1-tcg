<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/tcgcards', 'App\Http\Controllers\TCGCardController@index')->name('tcgCards.index');
Route::get('/tcgcards/create', 'App\Http\Controllers\TCGCardController@create')->name('tcgCards.create');
Route::post('/tcgcards/save', 'App\Http\Controllers\TCGCardController@save')->name('tcgCards.save');
Route::delete('/tcgcards/{id}', 'App\Http\Controllers\TCGCardController@delete')->name('tcgCards.delete');
Route::get('/tcgcards/{id}', 'App\Http\Controllers\TCGCardController@show')->name('tcgCards.show');
