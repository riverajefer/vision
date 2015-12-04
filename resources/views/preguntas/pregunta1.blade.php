@extends('layouts/default')
@section('content')

@section('title')  @parent CUANDO COMES FUERA DE CASA, VAS A: @stop


	<img src="img/pizza.jpg" id="bg" alt="">
	
	<div id="page-wrap">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="pregunta1">
			<h1>
				CUANDO COMES FUERA DE CASA, VAS A:
			</h1>
			<ul class="lista_opciones">
				<li id="4">
					<button class="myButton btnopcion" >
						RESTAURANTE A LA CARTA
					</button>
				</li>
				<li id="3">
					<button class="myButton btnopcion">
						RESTAURANTE DE CADENA
					</button>
				</li>	
				<li id="2">
					<button class="myButton btnopcion">
						PANADERÍA O TIENDA
					</button>								
				</li>
				<li id="1">
					<button class="myButton btnopcion">
						CORRIENTAZO
					</button>								
				</li>				
			</ul>
		</div>
	
	</div>
<script>
$(document).ready(function(){

	$('ul').randomize();

	$('ul.lista_opciones li').click(function(e){

	  var $link = $(e.target);
	  e.preventDefault();

	  if(!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 300) {
			envio(this.id);
	  }

	  $link.data('lockedAt', +new Date());

	});

	  function envio(id){
		$.ajax({
		    url : "<?php echo route('pregunta1'); ?>",
		    data : { id : id, '_token': $('input[name=_token]').val() },
		    type : 'POST',
		    dataType : 'json',
		    success : function(json) {
		    	window.location.href = "<?php echo route('pregunta2')?>";
		    },
		    error : function(xhr, status) {
		        console.log('Disculpe, existió un problema');
		    }
		 
		});  	
	  }

});
</script>
@stop
