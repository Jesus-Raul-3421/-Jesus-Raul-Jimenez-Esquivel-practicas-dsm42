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

Route::get('/','Pagecontroller@index' );


Route::get('Helloworld', function () {
    return view('Helloworld');
});

Route:: get('/miprimerarray', 'Alumno\controlleralumnos@getalumnos')->name('alumnos');

Route:: resource('/listadealumnos', 'Alumno\controlleralumnos');

Route::group(['prefix'=>'api'], function(){
Route::apiResource('materias','Alumno\controllermaterias');
//Route::apiResource('alumnos','Alumno\controlleralumnos');
});

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');
