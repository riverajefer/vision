<?php
use App\SaveSession;
Route::get('/', 'PreguntasController@index');
Route::get('home', 'PreguntasController@home');
Route::get('empezar', 'PreguntasController@start');

Route::get('empezar', 'PreguntasController@start');

$router->group(['middleware' => 'filtroPregunta'], function() {

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
	

$router->group(['middleware' => 'filtroPerfil'], function() {
	Route::get('perfil/extreme-cool', 'PerfilController@ExtremeCool');
	Route::get('perfil/autentico', 'PerfilController@Autentico');
	Route::get('perfil/fres-cool', 'PerfilController@FressCool');
	Route::get('perfil/casual', 'PerfilController@Casual');
});




Route::get('hola', function(){

        return $session = Session::get('session_id');
         $getId = SaveSession::where('cookie', $session)->first()->id;        
        $puntos = DB::table('registros')->where('session_id', $getId)->sum('valor');
        return $puntos;

    return "hola Mundo";
});

Route::get('session', function () {
            $session = Session::get('session_id');
        return $session;
});

