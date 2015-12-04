<?php
use App\SaveSession;
Route::get('/', 'PreguntasController@index');
Route::get('home', 'PreguntasController@home');

Route::get('empezar', 'PreguntasController@start');

$router->group(['middleware' => 'filtroPregunta'], function() {
    Route::get('cuando-comes-fuera-de-casa-vas-a', 'PreguntasController@pregunta1')->name('pregunta1');
    Route::get('que-plan-describe-mejor-tus-domingos', 'PreguntasController@pregunta2')->name('pregunta2');
    Route::get('cuanto-tiempo-compartes-con-tus-amigos', 'PreguntasController@pregunta3')->name('pregunta3');
    Route::get('a-cuantos-conciertos-has-ido-de-tu-cantante-favorito', 'PreguntasController@pregunta4')->name('pregunta4');
    Route::get('cuando-haces-un-regalo-el-presupuesto', 'PreguntasController@pregunta5')->name('pregunta5');
    Route::get('calcula', 'PreguntasController@calcula')->name('calcula');
});


	Route::post('cuando-comes-fuera-de-casa-vas-a', 'PreguntasController@postPregunta1')->name('pregunta1');
	Route::post('que-plan-describe-mejor-tus-domingos', 'PreguntasController@postPregunta2')->name('pregunta2');
	Route::post('cuanto-tiempo-compartes-con-tus-amigos', 'PreguntasController@postPregunta3')->name('pregunta3');
	Route::post('a-cuantos-conciertos-has-ido-de-tu-cantante-favorito', 'PreguntasController@postPregunta4')->name('pregunta4');
	Route::post('cuando-haces-un-regalo-el-presupuesto', 'PreguntasController@postPregunta5')->name('pregunta5');
	

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
