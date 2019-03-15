<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('evaluacion', function () {
    return view('evaluacion');
});

Route::get('evaluacion/encuesta', function () {
    return view('Encuesta.showEncuesta');
});

Route::get('/evaluaciones', 'EvaluacionController@index')->name('evaluacion.index');

Route::post('evaluacion/encuesta/store','EvaluacionController@store')->name('evaluacion.store');