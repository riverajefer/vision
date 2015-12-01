<?php

Route::get('/', 'PreguntasController@index');
Route::get('home', 'PreguntasController@home');
Route::get('empezar', 'PreguntasController@start');

Route::get('empezar', 'PreguntasController@start');

$router->group(['middleware' => 'filtro'], function() {

    Route::get('pregunta1', 'PreguntasController@pregunta1');
    Route::get('pregunta2', 'PreguntasController@pregunta2');
    Route::get('pregunta3', 'PreguntasController@pregunta3');
    Route::get('pregunta4', 'PreguntasController@pregunta4');
    Route::get('pregunta5', 'PreguntasController@pregunta5');
    Route::get('calcula', 'PreguntasController@calcula');

});


Route::post('pregunta1', 'PreguntasController@postPregunta1');
Route::post('pregunta2', 'PreguntasController@postPregunta2');
Route::post('pregunta3', 'PreguntasController@postPregunta3');
Route::post('pregunta4', 'PreguntasController@postPregunta4');
Route::post('pregunta5', 'PreguntasController@postPregunta5');



Route::get('extreme-cool', function () {
    return view('resultados/extreme');
});

Route::get('autentico-cool', function () {
    return view('resultados/autentico');
});


Route::get('fres-cool', function () {
    return view('resultados/fres');
});


Route::get('casual', function () {
    return view('resultados/casual');
});


Route::get('session', function () {
            $session = Session::get('session_id');
        return $session;
});

