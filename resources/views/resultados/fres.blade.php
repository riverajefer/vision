@extends('layouts/default')
@section('content')

@section('title')  @parent ERES UN FRESCOOL @stop

	<img src="img/fres-cool.jpg" id="bg" alt="">
	
	<div id="page-wrap">
	<div class="resultado">
		<div class="cool">
			<h1>ERES UN FRESCOOL </h1>
			<p>
			Eres parte de un grupo al que muchos quisieran pertenecer.
			Eres fresco y aunque no el más excéntrico. <b>tu vida es cool y privilegiada, llena de posibilidades que la mayoría de los colombianos no tiene.</b> Por eso, tu aporte puede cambiar esta realidad, logrando que más personas tengan tus mismas oportunidaddes de desarrollo.
			
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
