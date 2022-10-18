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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/multimedia', function () {
    return view('pages.multimedia');
});
Route::get('/principios', function () {
    return view('pages.principlesmusic');
});
Route::get('/musicoterapia', function () {
    return view('pages.musictherapy');
});
Route::get('/maldealzheimer', function () {
    return view('pages.alzheimerdisease');
});
Route::get('/oido-y-funcionamiento', function () {
    return view('pages.earfunctions');
});
Route::get('/psicologia-de-la-musica', function () {
    return view('pages.psychologymusic');
});
Route::get('/soluciones-multimedia', function () {
    return view('pages.multimediasolutions');
});
Route::get('/bibliografia', function () {
    return view('pages.bibliografia');
});
