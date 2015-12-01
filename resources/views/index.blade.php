@extends('layouts/default')
@section('content')

@section('title')  @parent ¿QUÉ TAN COOL ERES? @stop

	<img src="img/home.jpg" id="bg" alt="">
	
	<div id="page-wrap">
	<div class="home">
		<h1>¿QUÉ TAN COOL ERES?</h1>
		<h2>
		Algo que siempre has querido saber pero nunca has sabido cómo medir.<br>
		Haz este test y descubrirás qué estilos de vida llevas y qué tan coll eres.
		</h2>
		<a href="{{URL::to('empezar')}}" class="myButton btn_inicio">
			CLIC AQUÍ
		</a>		
	</div>
	

	
	</div>

@stop