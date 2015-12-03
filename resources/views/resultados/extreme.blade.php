@extends('layouts/default')
@section('content')

@section('title')  @parent Hola @stop

	<img src="{{asset('img/extreme.jpg')}}" id="bg" alt="">
	
	<div id="page-wrap">
	<div class="resultado">
		<div class="cool">
			<h1>ERES EXTREME-COOL </h1>
			<p>
			Eres de los más play y populares de tu grupo de amigos. Siempre tienes los mejores planes y todos quieren  parchar contigo. <b>Esto te hace parte de una minoría privilegiada</b>, un perfil que te permite darle una oportunidad a la mayoría de los colombianos para que tengan un futuro con posibilidades
			</p>
		</div>	
		<h2>¿SABÍAS QUE EL 71% DE LOS COLOMBIANOS NO SUPERA LA LÍNEA DE POBREZA?</h2>		

		<div align="center" class="img-vision">
			<a href="#" >
				<img src="{{asset('img/vision.png')}}" alt="Visión Mundial" class="img-responsive">
			</a>
		</div>
	</div>

	
	</div>
@stop
