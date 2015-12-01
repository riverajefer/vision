@extends('layouts/default')
@section('content')

@section('title')  @parent ERES CASUAL @stop

	<img src="img/casual.jpg" id="bg" alt="">
	
	<div id="page-wrap">
	<div class="resultado">
		<div class="cool">
			<h1>ERES CASUAL </h1>
			<p>
			Aunque pueda que no seas de lo más top, tu vida es genial ya que puedes prepararte y darte algunos gustos. <b>Esto te hace parte de una minoria privilegiada en el País, ya  que la mayoría de los colombianos no cuenta con tus mismas posibilidades de desarrollo.</b>
			Dales una oportunidad para cambiar esta realidad gracias a tu apoyo.
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
