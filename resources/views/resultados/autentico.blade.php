@extends('layouts/default')
@section('content')

@section('title')  @parent ERES UN AUTÉNTICO COOL @stop

	<img src="{{asset('img/autentico-cool.jpg')}}" id="bg" alt="autentico-cool">
	
	<div id="page-wrap">
	<div class="resultado">
		<div class="cool">
			<h1>ERES UN AUTÉNTICO COOL </h1>
			<p>
			Eres más cool que la mayoría de las personas a tu alrededor. Estás preparado y la pasas muy bien.
			<b>Esto significa que perteneces a una minoría privilegiada y la mayoría de colombianos, quisiera tener tus mismas posibilidads de desarrollo.</b> !Apóyalos¡
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
